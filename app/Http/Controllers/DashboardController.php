<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect; 
use DB; 
class DashboardController extends Controller
{
 
    /**
     * Shows the main page of the dashboard 
     */

     public function index(){
    
        if( $user = \Sentinel::check()){
            $wallets = DB::table("wallets")->select('*')->get();
            return view('dashboard',['wallets'=>$wallets]);
        }else{
            return Redirect::to('/en/login');
        }
        
     }

     public function accountDetails($currency_name){

        if( \Sentinel::check()){
            $user = \Sentinel::getUser(); 
            
            $accountInfo = DB::table("wallets")->where(["user_id"=>$user->id,"currency_name"=> $currency_name])->first();
            return view("accountDetails")->with("accountInfo",$accountInfo);
        }
        return Redirect::to("/en/login"); 
     }

}
