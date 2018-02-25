<?php

namespace App\Http\Controllers;

use App\File;
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
			foreach ($request->file as $file) {
			
			$filename=$file->getClientOriginalName();
			$filesize=$file->getClientSize();
			$file->storeAs('public/upload',$filename);
			$fileModel=new File;
			$fileModel->name=$filename;
			$fileModel->size=$filesize;
			$fileModel->save();
			
			}
			return 'yes';
		}
	 
	}
    
}
