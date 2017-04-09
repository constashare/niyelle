<?php
	/**
	 * Created by PhpStorm.
	 * User: Marcus
	 * Date: 3/19/2017
	 * Time: 1:13 AM
	 */
	
	namespace App\Http\Controllers;
	
	class BaseController extends Controller {
		
		protected $layout = 'frontend.layouts.main';
		
		protected function setupLayout()
		{
			if ( ! is_null($this->layout))
			{
				$this->layout = View::make($this->layout);
			}
		}
		
	}