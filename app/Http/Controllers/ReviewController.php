<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(){
        return view('frontend.review.rceate');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'description' => 'required',
        ]);
    
        $review = new Review;
        $review->name = $request->name;
    
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/review/', $filename);
            $review->image = $filename;
        } 
    
        $review->description = $request->description ;
        $review->save();
        return redirect("/rview")->withSuccess('Product added');
    }
    public function view(){
        $review= Review::all();
        
        
        
        return view('frontend.review.rview', compact('review'));
      }
      
        public function delete($id){
            $review =Review::find($id);
    
            if (is_null( $review)) {
    
                return redirect()->back();
    
            } else {
                $review->delete();
    
                if ( $review) {
    
                    return redirect('/rview');
    
                } else {
    
                    echo "Unable to Delete Resource";
    
           }
    }
        }
  
  
}
