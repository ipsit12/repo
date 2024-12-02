<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function add(){
        return view('frontend.products.pcreate');
    }
    public function store(Request $request){
       
        $product =new Feature ;
        if ($request->hasfile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/product/', $filename);
            $product->image = $filename;
        }
        $product->name =$request->name;
        $product->price =$request->price;
        $product->quantity =$request->quantity;
        $product->description =$request->description;
        
        $product->save();
        return redirect("/pview")->withSuccess('product addedd');
        
    
    
    }
    public function view(){
        $product= Feature::all();
        
        
        
        return view('frontend.products.pview', compact('product'));
      }
      
        public function delete($id){
            $product =Feature::find($id);
    
            if (is_null( $product)) {
    
                return redirect()->back();
    
            } else {
                $product->delete();
    
                if ( $product) {
    
                    return redirect('/pview');
    
                } else {
    
                    echo "Unable to Delete Resource";
    
           }
    }
        }
    public function edit($id)
    {
        
        $product=Feature::find($id);
        return view('frontend.products.pedit',compact('product'));
    }
    public function update( Request $request,$id)
    {
        // p($request->all());
        // die;
      
        $product = Feature::find($id);
        if ($request->hasfile('product')) {
            $destination = 'frontend/product/' .  $product->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/product/', $filename);
            $product->image = $filename;

}
$product->name = $request['name'];
$product->price = $request['price'];
$product->quantity = $request['quantity'];
$product->description= $request['description'];

      
$product->save();
        return redirect("/pview");
        }
}
