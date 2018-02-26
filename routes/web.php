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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signup-as', 'HomeController@signup_as')->name('signup-as');

// Redirect after account creation
Route::get('/account-created', 'HomeController@account_created')->name('account-created');

// FAQ page
Route::get('/faq', function(){
	return view('layouts.pages.faq',["header"=>"header_3"]) ;
});

// Pricing and plans page
Route::get('/pricing-and-plans', function(){
	return view('layouts.pages.pricing-and-plans',["header"=>"header_3"]) ;
});
