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
Route::get('cats',function()
{
	return 'All cats';
});

Route::get('/',function(){
	return redirect('cats');
});


Route::get('about',function(){
	return view('about')->with('numberOfCats',9000);
	});

Route::get('cats/{id}',function($id){
	return sprintf('Cat #%s',$id);
	})->where('id','[0-9]+');

Route::get('contact','PagesController@contact');