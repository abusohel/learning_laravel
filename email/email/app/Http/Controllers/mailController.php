<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\newMail;
class mailController extends Controller
{
   public function index()
    {
    	Mail::send(new newMail());
    }
}
