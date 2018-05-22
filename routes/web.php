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
});

Route::get('/en/login', function(){
    return view('login');
});

Route::get('/en/signup',function(){
    return view('signup');
});

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