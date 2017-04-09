<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    //
	public function index()
	{
		return view('frontend.user.files.user_upload');
	}
}
