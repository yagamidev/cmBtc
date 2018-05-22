<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect; 

class HomeController extends Controller
{
    public function postRegister(Request $req){
      $validator = $req->validate([
            'username' => "required|unique:users|max:255",
            "email"=> "required|email|unique:users",
            "password"=> "required|confirmed",
        ]);
        $credentials = [
            "username" => $req->post("username"),
            "email" => $req->post("email"),
            "password" => $req->post("password")
        ];
        
        /* @TODO : Set activation to false and send an email for verification */
        /* Redirect to /dashboard after success */  
        \Sentinel::register($credentials,true);
        echo "Registered successfully ";
    }

    public function postLogin(Request $req){

        $credentials = [
            "login" => $req->post("email"),
            "password" => $req->post("password")
        ];
        if( $user = \Sentinel::authenticate($credentials) ){
            /* Redirecting to the dashboard */ 
            
            echo $user->username." Welcome";
            exit; 
        }else{
           return Redirect::back()->withErrors(["Invalid email or password."])->withInput();
        }
         
    
    }
}
