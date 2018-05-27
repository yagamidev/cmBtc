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

Route::get('/en/login', function(){
    return view('login');
})->name("login");

Route::get('/en/signup',function(){
    return view('signup');
})->name("signup");

Route::get('/en/dashboard',"DashboardController@index")->name("dashboard");

Route::get('/logout',function(){
    Sentinel::logout(); 
    return View::make("welcome");
})->name("logout");

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