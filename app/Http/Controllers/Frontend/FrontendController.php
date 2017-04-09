<?php

namespace App\Http\Controllers\Frontend;

use GetStream\StreamLaravel\Facades\FeedManager;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
		
	
		/**
		 * @return \Illuminate\View\View
		 */
		public function index()
	{
		return view('frontend.public.public_index');
	}
		
	
	
}
