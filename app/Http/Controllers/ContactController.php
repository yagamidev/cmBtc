<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect ;
use App\Contact ;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    //

    public function  postContact(Request $req){
      $rules = [
        "name" =>"required|max:255",
        "email"=> "required|email",
        "question" => "required",
        "subject"=> "required"
      ];
      $validator = Validator::make(Input::all(),$rules);
      if( $validator->fails() ){
        return Redirect::back()->withInput()->withErrors($validator);
      }
      $contact = new Contact();
      if( \Sentinel::check() ){
        $user = \Sentinel::getUser();
        $contact->user_id = $user->id;
      }

      $contact->email = $req->post('email');
      $contact->subject =$req->post('subject');
      $contact->phone = $req->post('phone');
      $contact->question= $req->post('question');
      $contact->name= $req->post('name');

      $contact->save();
      return Redirect::back()->with("success","Thank you for contacting us, we'll get back to you soon.");
    }
}
