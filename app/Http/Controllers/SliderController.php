<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Frontend;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function add(){
        return view('frontend.image.create');
    }
    public function store(Request $request){
        $request->validate([
            
            'image'=>'required|mimes:jpeg,jpg,png,gif',
            'name'=>'required',
            'description'=>'required',
        ]);

        $image =new Frontend;
        if ($request->hasfile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/slider/', $filename);
            $image->image = $filename;
        }
        $image->name =$request->name;
        $image->description =$request->description;
        $image->save();
        return redirect("/view")->withSuccess('product addedd');
        
    
    
    }
    public function view(){
        $image= Frontend::all();
        
        
        
        return view('frontend.image.view', compact('image'));
      }
      
        public function delete($id){
            $image =Frontend::find($id);
    
            if (is_null( $image)) {
    
                return redirect()->back();
    
            } else {
                $image->delete();
    
                if ( $image) {
    
                    return redirect('/view');
    
                } else {
    
                    echo "Unable to Delete Resource";
    
           }
    }
        }
    public function edit($id)
    {
        
        $image= Frontend::find($id);
        return view('frontend.image.edit',compact('image'));
    }
    public function update( Request $request,$id)
    {
        // p($request->all());
        // die;
      
        $image = Frontend::find($id);
        if ($request->hasfile('image')) {
            $destination = 'frontend/slider/' .  $image->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/slider/', $filename);
            $image->image = $filename;

}
$image->name = $request['name'];
$image->description =$request['description'];
      
$image->save();
        return redirect("/view");
        // return redirect('backend/iron/view');
    }
}
