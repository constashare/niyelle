<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetContentController extends Controller
{
    //
	public function path(Request $request, $path)
	{
		$file = $request->file($path);
	}
}
