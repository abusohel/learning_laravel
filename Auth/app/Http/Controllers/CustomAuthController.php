<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class CustomAuthController extends Controller
{
    public function showRegisterForm()
    {
    	return view('custom.register');
    }

    public function register(Request $request)
    {
    	$this->validation($request);
    	User::create($request->all());
    	return redirect('/')->with('Status', 'you are registerd');
    }
    public function validation($request)
    {
    	return $this->validate($request,[

    		'name'=>'required|max:255',
    		'lastname'=>'required|max:255',
    		'email'=>'required|email|unique:users|max:255',
    		'password'=>'required|confirmed|max:255',
    ]);

    }
}
