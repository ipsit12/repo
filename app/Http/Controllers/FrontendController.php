<?php

namespace App\Http\Controllers;
use App\Mail\HelloMail;
use App\Models\Frontend;
use App\Models\Feature;
use App\Models\Latest;
use App\Models\Review;

use App\Models\Cart;
use App\Models\Total;
use App\Models\Contact;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class FrontendController extends Controller
{
    public function index(){
    //     $carts=Cart::all();
    //     $count = DB::table('carts')->count();
    //     $image=Frontend::all();
    //    $product=Feature::all();
    //    $latest=Latest::all();
        // return view("frontend.index",compact("image","product","latest","count",'carts'));
        return view("frontend.index");
        

    }
    public function login(){
       
        return view("frontend.login");
        

    }
    public function register(){
       
        return view("frontend.register");
        

    }
    public function about(){
        $count = DB::table('carts')->count();
        $carts=Cart::all();
        return view("frontend.about",compact("count","carts"));
    }
    public function contact(){
        $count = DB::table('carts')->count();
        $contact=Contact::all();
        $carts=Cart::all();
        return view("frontend.contact",compact("contact","count","carts"));
    }
    public function shop(){
        $count = DB::table('carts')->count();
        $product=Feature::limit(6)->get();
        $carts=Cart::all();
        return view("frontend.shop",compact("product","count","carts"));
    }
    public function productdetails($id)
    {
        $carts=Cart::all();
        $count = DB::table('carts')->count();
        $product = Feature::limit(6)->get();
        $productDetails = Feature::where('id', $id)->first();
        $review=Review::all();
        return view('frontend.product-details', compact('productDetails', 'product','review',"count","carts"));
}

public function checkout(Request $request){
    $count = DB::table('carts')->count();
    $carts=Cart::all();
   $total=$request->input('total',0);
  
    return view("frontend.checkout",compact("total","count","carts"));
}
public function service(){
    $count = DB::table('carts')->count();
    $carts=Cart::all();
    return view("frontend.service",compact("count","carts"));
}
public function portfolio(){
    $count = DB::table('carts')->count();
    $carts=Cart::all();
    return view("frontend.portfolio",compact("count","carts"));
}
public function faq(){
    $count = DB::table('carts')->count();
    $carts=Cart::all();
    return view("frontend.faq",compact("count","carts"));
}
}
