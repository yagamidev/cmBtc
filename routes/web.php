<?php

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

Route::get('/', function () {
    return view('welcome');
})->name("home") ;

Route::get('/api',function(){

    $apiKey = '693c80b4c3274b1a823f34ceb45b64a0';
    $apiSecret = 'b5586b1a0d1d18beb2a9bcee2a47fb460881a6bcf3fcd78b6e020310e22dbb00';
    $apiUrl = 'https://api.changelly.com';

    $message = json_encode(
        [
          'jsonrpc' => '2.0',
          'id' => 1,
          'method' =>
           'getCurrencies', 'params' => []
        ]
    );
    $sign = hash_hmac('sha512', $message, $apiSecret);
    $requestHeaders = [
        'api-key:' . $apiKey,
        'sign:' . $sign,
        'Content-type: application/json'
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);

    $response = curl_exec($ch);
    curl_close($ch);

    return var_dump($response);
});

Route::get('/en/login', function(){
    return view('login');
})->name("login");

Route::get('/en/signup',function(){
    return view('signup');
})->name("signup");

Route::get('/en/account/history/{currency_name}',"DashboardController@accountDetails")
    ->where(['currency_name' => 'eth|ltc|btc|xaf|bch']);

Route::get('/en/trade',function(){
    return view("trade");
});

Route::get('/en/exchange',function(){
  return view('exchange');
});

Route::get('/en/dashboard',"DashboardController@index")->name("dashboard");

Route::get('/logout',function(){
    Sentinel::logout();
    return View::make("welcome");
})->name("logout");

Route::get('/en/contact',function(){
  return view("contact");
});

Route::post('/en/contact',"ContactController@postContact");

Route::get('/account/send/{currency_name}',"DashboardController@send")
    ->where(['currency_name'=>'eth|ltc|btc|xaf|bch']);

Route::post('/postLogin',"HomeController@postLogin");
Route::post('/postRegister',"HomeController@postRegister");
// Route::get('/buy',function(){
//     return view("buy");
// });

// Route::get('/sell',function(){
//     return view('sell');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

// Route::get('/about-us',function(){
//     return view("about-us");
// });
