<?php
	use Illuminate\Support\Facades\App;
	use JildertMiedema\LaravelPlupload\Facades\Plupload;
	
	
	/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');
	
	
	
	Route::get('/bridge', function() {
		$pusher = App::make('pusher');
		
		$pusher->trigger( 'test-channel',
			'test-event',
			array('text' => 'Preparing the Pusher Laracon.eu workshop!'));
		
		return view('frontend.public.public_index');
	});

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(/**
     *
     */
	    ['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
        
        /*
         * User file upload
         */
        
        Route::get('submit', 'FileUploadController@index')->name('submit');
        
        /*
         * User video manager page
         */
	
	    Route::get('v/edit/{video_id}/{video_path}', 'VideoManagerController@index')->name('video.manager');
	    
	    Route::post('v/make', 'VideoManagerController@make')->name('video.manager.make');
	    
//	    Route::get('file/{path}', 'GetContentController@path')->name('content.manager');
	    
	    /*
		 * User Brand page creation
		 */
	    Route::get('brand/create', 'PagesController@create')->name('brand.create');
	    Route::post('brand/create', 'PagesController@store')->name('brand.create');
    });
});
