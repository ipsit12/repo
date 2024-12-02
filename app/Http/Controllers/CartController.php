<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    
    public function cart(){
        $count = DB::table('carts')->count();
        $cart=Cart::all();
        return view("frontend.cart",['carts'=>Cart::get()],compact('count','cart'));

    }
    public function store(Request $request){
    
    // dd($request);

        $cart =new Cart;
        $cart->image =$request->image;
        $cart->name =$request->name;
        $cart->price =$request->price;
        $cart->description =$request->description;
        $cart->quantity =$request->quantity;
        // dd($cart);
       
        $cart->save();
        return back();
    }
    public function delete($id) {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
        }
        return back();
    }
    
public function destroy_all(){
    Cart::truncate();
    return redirect(url('/shop'));
}
}
