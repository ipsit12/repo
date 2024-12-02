<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function add(){
        return view('frontend.contact.ccreate');
    }
    public function store(Request $request){
        $request->validate([
            
            'image'=>'required|mimes:jpeg,jpg,png,gif',
            'name'=>'required',
            'description'=>'required',
            
        ]);

        $contact =new Contact ;
        if ($request->hasfile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/contact/', $filename);
            $contact->image = $filename;
        }
        $contact->name =$request->name;
        $contact->description =$request->description;
        
        $contact->save();
        return redirect("/cview")->withSuccess('product addedd');
        
           
    
    }
    public function view(){
        $contact= Contact::all();
        
        
        
        return view('frontend.contact.cview', compact('contact'));
      }
      
        public function delete($id){
            $contact =Contact::find($id);
    
            if (is_null(  $contact)) {
    
                return redirect()->back();
    
            } else {
                $contact->delete();
    
                if (  $contact) {
    
                    return redirect('/cview');
    
                } else {
    
                    echo "Unable to Delete Resource";
    
           }
    }
        }
    public function edit($id)
    {
        
        $contact= Contact::find($id);
        return view('frontend.contact.cedit',compact('contact'));
    }
    public function update( Request $request,$id)
    {
        // p($request->all());
        // die;
      
        $contact = Contact::find($id);
        if ($request->hasfile('product')) {
            $destination = 'frontend/contact/' .   $contact->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/contact/', $filename);
            $contact->image = $filename;

}
$contact->name = $request['name'];

$contact->description = $request['description'];  
$contact->save();
        return redirect("/cview");
        }
}
