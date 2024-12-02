<?php

namespace App\Http\Controllers;

use App\Models\Latest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LatestController extends Controller
{
    public function add()
    {
        return view('frontend.latest.lcreate');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'price' => 'required',
        ]);

        $latest = new Latest;
        $latest->name = $request->name;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/latest/', $filename);
            $latest->image = $filename;
        }

        $latest->price = $request->price;
        $latest->save();
        return redirect("/lview")->withSuccess('Product added');
    }
    public function view()
    {
        $latest = Latest::all();



        return view('frontend.latest.lview', compact('latest'));
    }

    public function delete($id)
    {
        $latest = Latest::find($id);

        if (is_null($latest)) {

            return redirect()->back();
        } else {
            $latest->delete();

            if ($latest) {

                return redirect('/lview');
            } else {

                echo "Unable to Delete Resource";
            }
        }
    }
    public function edit($id)
    {

        $latest = Latest::find($id);
        return view('frontend.latest.ledit', compact('latest'));
    }
    public function update(Request $request, $id)
    {
        // p($request->all());
        // die;

        $latest = Latest::find($id);
        if ($request->hasfile('image')) {
            $destination = 'frontend/latest/' .  $latest->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/latest/', $filename);
            $latest->image = $filename;
        }
        $latest->name = $request['name'];
        $latest->price = $request['price'];

        $latest->save();
        return redirect("/lview");
        // return redirect('backend/iron/view');
    }
}
