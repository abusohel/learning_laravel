<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    //
    public function index(Request $request)
    {

    	Mail::to('abusoheljnu@gmail.com')->send(new Mailtrap());
    }
}
