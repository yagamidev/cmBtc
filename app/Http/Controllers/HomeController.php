<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect; 
use DB;
use Coinbase\Wallet\Client;
use Coinbase\Wallet\Configuration;
use Coinbase\Wallet\Resource\Account;
use Coinbase\Wallet\Resource\Address;
use Coinbase\Wallet\Enum\CurrencyCode;
use Coinbase\Wallet\Resource\Transaction;
use Coinbase\Wallet\Value\Money;
use Coinbase\Wallet\Exception\ClientException;
class HomeController extends Controller
{
    private $apiKey = "E1EoRoHIZNQ35VPh";
    private $apiSecret = "ffM18GiYW0HPfpvIrvZOHjgYQ1VxPQPG";

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
        $user = \Sentinel::register($credentials,true);
        
        // Generating new addresses for the new user
        // Labels follow the rules $user->username."currency".$user->id
        $btcObject = $this->generateBTCAddress($user->username . "BTC" . $user->id);
        $ltcObject = $this->generateLTCAddress($user->username . "LTC" . $user->id);
        $bchObject = $this->generateBCHAddress($user->username . "BCH" . $user->id);
        $ethObject = $this->generateETHAddress($user->username . "ETH" . $user->id);

        DB::table("wallets")->insert([ 
            ["user_id"=> $user->id,"currency_name"=>"BTC", "address"=> $btcObject["address"],"label"=> $btcObject["name"] ],
            ["user_id"=> $user->id,"currency_name"=>"LTC", "address"=> $ltcObject["address"],"label"=> $ltcObject["name"] ],
            ["user_id"=> $user->id,"currency_name"=>"BCH", "address"=> $bchObject["address"],"label"=> $bchObject["name"] ],
            ["user_id"=> $user->id,"currency_name"=>"ETH", "address"=> $ethObject["address"],"label"=> $ethObject["name"] ],
            ["user_id"=> $user->id,"currency_name"=>"XAF", "address"=>null,"label"=> $user->username . "XAF" . $user->id],

        ]);

        return redirect()->route('dashboard');
    }

    public function postLogin(Request $req){

        $credentials = [
            "login" => $req->post("email"),
            "password" => $req->post("password")
        ];
        if( $user = \Sentinel::authenticate($credentials) ){
             return redirect()->route('dashboard') ;
        }else{
           return Redirect::back()->withErrors(["Invalid email or password."])->withInput();
        }
    }

    /**
     *  Generate a bitcoin address 
     *  @param $param the label to assign to the address
     * @return Address Object 
     */
    public function generateBTCAddress($param){
        $configuration = Configuration::apiKey($this->apiKey, $this->apiSecret);
        $client = Client::create($configuration);
        $accounts = $client->getAccounts();
        foreach ($accounts as $account) {
            $address = new Address();
            if ($account->getRawData()["currency"] == "BTC") {
                $address->setName($param);
                $client->createAccountAddress($account, $address);
                break;
            }
           
        }

        return $address->getRawData();
    }

    /**
     *  Generate a Litecoin address 
     *  @param $param the label to assign to the address
     * @return Address Object 
     */

    public function generateLTCAddress($param){
        $configuration = Configuration::apiKey($this->apiKey, $this->apiSecret);
        $client = Client::create($configuration);

        $accounts = $client->getAccounts();
        foreach ($accounts as $account) {
            $address = new Address();
            if ($account->getRawData()["currency"] == "LTC") {
                $address->setName($param);
                $client->createAccountAddress($account, $address);
                break;
            }
           
        }

        return $address->getRawData();
    }
    /**
     *  Generate a BCH address 
     *  @param $param the label to assign to the address
     * @return Address Object 
     */

    public function generateBCHAddress($param)
    {
        $configuration = Configuration::apiKey($this->apiKey, $this->apiSecret);
        $client = Client::create($configuration);

        $accounts = $client->getAccounts();
        foreach ($accounts as $account) {
            $address = new Address();
            if ($account->getRawData()["currency"] == "BCH") {
                $address->setName($param);
                $client->createAccountAddress($account, $address);
                break;
            }
            
        }
        return $address->getRawData();
    }

    /**
     *  Generate a Litecoin address 
     *  @param $param the label to assign to the address
     * @return Address Object 
     */

    public function generateETHAddress($param)
    {
        $configuration = Configuration::apiKey($this->apiKey, $this->apiSecret);
        $client = Client::create($configuration);

        $accounts = $client->getAccounts();
        foreach ($accounts as $account) {
            $address = new Address();
            if ($account->getRawData()["currency"] == "ETH") {
                $address->setName($param);
                $client->createAccountAddress($account, $address);
                break;
            }
            
        }

        return $address->getRawData();
    }

}
