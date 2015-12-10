<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Http\Requests;
use Laravel\Http\Controllers\Controller;

class UserController extends Controller
{
    public function signup()
    {

    }

    public function login($user)
    {
    	return view('login',array($user));
    }
}
