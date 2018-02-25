<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
	public function ShowUpLoadForm()
	{
		 return view('upload');
	}

	public function storeFile(Request $request)
	{

		if ($request->hasFile('file')) {
			return $request->file->store('public/upload');
			// return 'yes';
		}
	 return $request->all();
	 }
    
}
