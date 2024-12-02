<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
class FormController extends Controller
{
    // public function add(){
    //     return view('frontend.products.pcreate');
    // }
    public function store(Request $request){
        $request->validate([
            
            'name' => 'required',
            'email'=>'required',
            'subject'=>'required',
            'phone'=>'required',
        
            
        ]);

        $form =new Form ;
      
        $form ->name =$request->name;
        $form ->email =$request->email;
        $form ->subject =$request->subject;
        $form ->phone =$request->phone;
        $form ->message =$request->message;
        $form ->save();
        return redirect("/contact")->withSuccess('product addedd');
        
    
    
    }
    public function view(){
        $form= Form ::all();
        
        
        
        return view('frontend.contactview', compact('form'));
      }
      
        public function delete($id){
            $form  =Form ::find($id);
    
            if (is_null(  $form)) {
    
                return redirect()->back();
    
            } else {
                $form->delete();
    
                if (  $form) {
    
                    return redirect('/contactview');
    
                } else {
    
                    echo "Unable to Delete Resource";
    
           }
    }
        }
   
   
}
