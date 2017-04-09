<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
	public function create()
	{
		return view('frontend.user.pages.createpage');
	}
	
	public function page()
	{
	
	}
	
	
	public function store(Request $request)
	{
		return view('frontend.user.pages.loading');
	}
}
