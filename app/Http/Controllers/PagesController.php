<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;

use Furbook\Http\Requests;
use Furbook\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function Contact()
    {
    	$name ="Manish";
    	$number = 7835851975;

    	$contacts = [
    		
    	];
    	return view('contact',compact('contacts'));
    }
}
