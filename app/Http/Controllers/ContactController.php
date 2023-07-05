<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
   public function index(){
        $data = ContactModel::get();
        // return $data;
        return view('contact',compact('data'));
    }
    public function addContact(){
        $data = ContactModel::get();
        return view('NewContact',compact('data'));
    }
    public function saveContact(Request $request){
        // validation
        $request->validate([
       'fname'=>'required',
       'lname'=>'required',
       'number'=>'required',
       'email'=>'required|email'
        ]);
       
        // Retrieve data from inputs
        $firstname =$request->fname;
        $lastname =$request->lname;
        $number =$request->number;
        $email =$request->email;

        // Stores data in table of database
        $newcontact = new ContactModel();
        $newcontact->firstName = $firstname;
        $newcontact->lastName = $lastname;
        $newcontact->Number = $number;
        $newcontact->Email = $email;

        $newcontact->save();

         return redirect('contact')->with('success','Contact saved successfully');


    }

    public function editContact($id){
        $data = ContactModel::where('id','=',$id)->first();
        return view('edit-Contact',compact('data'));
    }

    public function updateContact(Request $request){
            // validation
            $request->validate([
                'fname'=>'required',
                'lname'=>'required',
                'number'=>'required',
                'email'=>'required|email'
                 ]);

              // Retrieve data from inputs
              $id = $request->id;
              $firstname =$request->fname;
              $lastname =$request->lname;
              $number =$request->number;
              $email =$request->email;

              ContactModel::where('id','=',$id)->update([
                'firstName'=>$firstname,
                'lastName'=>$lastname,
                'Number'=>$number,
                'Email'=>$email
              ]);

      
              return redirect('contact')->with('success','Contact updated successfully');

    }


    public function deleteContact($id){
        ContactModel::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Contact deleted successfully');
    }
}
