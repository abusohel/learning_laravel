<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    //
    public function send()
    {
    	Mail::send(['text'=>'mail'],['name','abusohel'],function($message){
    		$message->to('abusohelcse28@gmail.com','to sohel')->subject('test email');
    		$message->from('abusohelcse28@gmail.com','sohel');
    	});	
    }
	

}
