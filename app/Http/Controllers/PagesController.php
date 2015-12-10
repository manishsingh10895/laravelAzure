<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Http\Requests;
use Laravel\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function Contact()
    {
    	$name ="Manish";
    	$number = 7835851975;

    	$contacts = [
    		'Manish',
    		'Andy',
    		'Enrique'
    	];
    	return redirect('/');
    }

    public function home()
    {
    	return view('home');
    }

    public function about(){
    	return view('about');
    }


}
