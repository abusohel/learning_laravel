<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    //
    public function index()
    {
    	return view('upload.upload');
    }

    public function store(Request $request)
    {
    	if ($request->hasFile('image')) {
    		$request->file('image');
    		return Storage::putFile('public/new',$request->file('image'));
    		// return $request->image->path();
    		// return $request->image->extension();
    		// return $request->image->store('public');
    	}else{
    		return "no file selected.";
    	}
    	
    }
  
    public function show()
    {
     // return Storage::files('public');
    	// return Storage::allFiles('public');
    	// return Storage::makeDirectory('public/make');
    	if (Storage::deleteDirectory('public/new')) {
    		return 'deleted';
    	}	
     }
}
