<?php

use App\Http\Controllers\FeatureController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\FrontendController;
use App\Http\controllers\FormController;
use App\Http\controllers\ContactController;
use App\Http\controllers\CheckoutController;
use App\Http\controllers\LatestController;
use App\Http\controllers\CartController;
use App\Http\controllers\SliderController;
use App\Http\controllers\ReviewController;
use App\Http\controllers\RazorpayPaymentController;
use App\Http\controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

// require __DIR__.'/auth.php';
Route::get('/',[FrontendController::class,'index']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/shop',[FrontendController::class,'shop']);
Route::get('/product-details/{id}',[FrontendController::class,'productdetails'])->name('frontend.productdetails');

Route::get('/checkout',[FrontendController::class,'checkout']);
Route::get('/service',[FrontendController::class,'service']);
Route::get('/portfolio',[FrontendController::class,'portfolio']);
Route::get('/faq',[FrontendController::class,'faq']);


Route::get('/create', [SliderController::class, 'add']);
Route::post('/create/store', [SliderController::class, 'store']);
Route::get('/view',[SliderController::class,'view']);
Route::get('image/delete/{id}',[SliderController::class,'delete']);
Route::get('image/edit/{id}',[SliderController::class,'edit']);
Route::post('image/update/{id}',[SliderController::class,'update']);



Route::get('/pcreate', [FeatureController::class, 'add']);
Route::post('/pcreate/store', [FeatureController::class, 'store']);
Route::get('/pview',[FeatureController::class,'view']);
Route::get('product/delete/{id}',[FeatureController::class,'delete']);
Route::get('product/edit/{id}',[FeatureController::class,'edit']);
Route::post('product/update/{id}',[FeatureController::class,'update']);

Route::post('confirm-razorpay-payment');


Route::get('/ccreate', [ContactController::class, 'add']);
Route::post('/ccreate/store', [ContactController::class, 'store']);
Route::get('/cview',[ContactController::class,'view']);
Route::get('contact/delete/{id}',[ContactController::class,'delete']);
Route::get('contact/edit/{id}',[ContactController::class,'edit']);
Route::post('contact/update/{id}',[ContactController::class,'update']);




// Route::get('/contact', [FormController::class,'add']);
Route::post('/contact/store', [FormController::class, 'store'])->name("addironmining");
Route::get('/contactview',[FormController::class,'view']);
Route::get('contact/delete/{id}',[FormController::class,'delete']);
Route::get('contact/edit/{id}',[FormController::class,'edit']);
Route::post('contact/update/{id}',[FormController::class,'update']);



Route::get('/lcreate', [LatestController::class,'add']);
Route::post('/lcreate/store', [LatestController::class, 'store']);
Route::get('/lview',[LatestController::class,'view']);
Route::get('latest/delete/{id}',[LatestController::class,'delete']);
Route::get('latest/edit/{id}',[LatestController::class,'edit']);
Route::post('latest/update/{id}',[LatestController::class,'update']);


Route::get('/rceate',[ReviewController::class,'add']);
Route::post('/rceate/store',[ReviewController::class,'store']);
Route::get('/rview',[ReviewController::class,'view']);
Route::get('review/delete/{id}',[ReviewController::class,'delete']);


Route::post('/cart/store', [CartController::class, 'store'])->name('cart_store');
Route::get('/cart',[CartController::class,'cart']);
Route::get('/cart/delete/{id}', [CartController::class,'delete']);

Route::post('/checkout/store/{total}', [CheckoutController::class, 'store']);
Route::get('/viewcheckout/{total}', [CheckoutController::class, 'view']);
Route::get('/checkout/delete/{id}', [CheckoutController::class,'delete']);

// Route::get(uri:'/testroute',function(){
//     $name="funny coder";
//     Mail::to('ipsitabiswal.edevlop@gmail.com')->send(new MyTestEmail($name));
// });

Route::get('/clear_cart', [CartController::class,'destroy_all'])->name('clear_cart');


Route::get('payment', [RazorpayPaymentController::class, 'index']);
Route::post('payment', [RazorpayPaymentController::class, 'store']);

// / login page
//     //->middleware('is_logout')
    Route::get('/login', [AuthController::class, 'login'])->name("admin.login"); 
    Route::post('/login-post', [AuthController::class, 'loginpost'])->name('admin.loginpost'); 

    // dashboard
    //the middleware need to be used at every page's route which is inside of the dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('is_auth');
    //logout
    
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/register', [AuthController::class, 'register']); 
    Route::post('/register/store', [AuthController::class, 'registerstore']); 
   
    Route::get('userlogin',[AuthController::class,'admin_login']);
    Route::post('userlogin',[AuthController::class,'admin_login'])->middleware('throttle:2,1');
   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
