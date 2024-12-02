<?php
  
namespace App\Http\Controllers;
include 'razorpay/Razorpay.php';


use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Cart;
use Exception;
  use \Illuminate\Support\Facades\Session;
class RazorpayPaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {     
        $carts=Cart::all();
       
        return view('frontend.razorpayView',compact("carts","total"));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    
    public function store(Request $request)
{
    $input = $request->all();

    // Replace with your Razorpay API credentials
    $razorpayKey = 'rzp_test_YXKx6Hazxe7yPu';
    $razorpaySecret = 'hV6nQfX7tFBt3vGKxJaE2mMx';

    $api = new Api($razorpayKey, $razorpaySecret);

    if (isset($input['razorpay_payment_id'])) {
        try {
            // Fetch the payment details
            $payment = $api->payment->fetch($input['razorpay_payment_id']);

            $payment = $payment->total;
            

            // Do something with the payment amount and notes
            // For example, you can store them in your database

            // Redirect to a success page or do further processing
            Session::put('success', 'Payment successful');
            return redirect()->route('frontend.index');
        } catch (Exception $e) {
            Session::put('error', $e->getMessage());
            return redirect()->route('frontend.checkout');
        }
    } else {
        Session::put('error', 'Razorpay payment ID is missing');
        return redirect()->route('frontend.checkout');
    }
}
}

