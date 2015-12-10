<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
* ;ok;lk

*/
Route::get('contact','PagesController@contact');
Route::get('home','PagesController@home');
Route::get('/','PagesController@home');
Route::get('signup','UserController@signup');
Route::get('login/{user}',function($user)
	{
		return view('login')->with('user',$user);
	});
Route::get('login','UserController@login');
Route::get('about','PagesController@about');
