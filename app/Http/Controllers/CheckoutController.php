<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request){
        $carts=Cart::all();
        $count = DB::table('carts')->count();
        $mail=$request->mail;
        $checkout = new Checkout;
        $checkout->firstname = $request->firstname;
        $checkout-> lastname= $request->lastname;
        $checkout->email = $request->email;
        $checkout->phone = $request->phone;
        $checkout->address = $request->address;
        $checkout->country = $request->country;
        $checkout->state = $request->state;
        $checkout->pincode = $request->pincode;
        $checkout->price = $request->price;


        $checkout->save();
    //     $data=['name'=>"ipsita",'data'=>"hello ipsita"];
        
    //      $user['to'] ="ipsitabiswal.edevlop@gmail.com";
    //    Mail::send('mail',$data,function($message) use ($user){
    //   $message->to( $user['to']);
    //   $message->subject('hello');
    //    });
        return view('frontend.razorpayview',compact('count','carts'));


       
    }
    public function view(){
        $checkout=Checkout::limit(6)->get();
        return view("frontend.viewcheckout",compact("checkout"));
    }
    public function delete($id){
        $checkout =Checkout::find($id);

        if (is_null( $checkout)) {

            return redirect()->back();

        } else {
            $checkout->delete();

            if ( $checkout) {

                return redirect('/checkout');

            } else {

                echo "Unable to Delete Resource";

       }
}
    }
    // public function checkoutstore(Request $request){
    //     $total = new Total;
    //     $total->total= $request->total;
    //     $total->save();
    //     return redirect("/checkout")->withSuccess('Product added');
    // }
    // public function checkoutview(){
    //     $total=Total::limit(6)->get();
    //     return view("frontend.checkout",compact("total"));
    // }


    
    }

