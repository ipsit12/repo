<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Register;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(){
        return view('backend.login');
    }

public function loginpost(Request $request)
    {
      
      $credentials =$request->only('email','password');
      
        
      
      if(Auth::attempt($credentials)){
        // dd($credentials);
          Session::put('name',$request['email']);
          return redirect('/dashboard')->with('success', 'Login Successfully !!');
      }
      else{
        return redirect('/login');
      }
    }

    
    public function dashboard(){
      $this->middleware(AuthMiddleware::class);
        return view('backend.index');
    }
    public function logout(Request $request){
        Auth::logout();
        Session::flush();
        $request->session()->put('logged_out', true);
        // $request->session()->put('came_from_dashboard', false);
        return redirect()->route('admin.login');
}

public function register(){
    $carts=Cart::all();
    $count = DB::table('carts')->count();
    return view('frontend.register',compact('carts','count'));
}
public function registerstore(Request $request){
    $register= new Register;
    $register->name=$request->name;
    $register->phone = $request->phone;
   $register->email = $request->email;
   $register->password =  $request->phone;
    $register->save();
    return redirect("/register")->withSuccess('Product added');
}
public function admin_login(Request $request){
    
    // dd($request->all());
        //validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //login user here
        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect('home');
        } else{
        return redirect('frontend.userlogin')->withError('Login details are incorrect...');
}
     return redirect('frontend.userlogin')->with('error', '*Error email Error password ');
      }
    

}


