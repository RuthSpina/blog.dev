<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		//do stuff before its sent to hello page
		return View::make('hello');
	}
	public function showResume()
	{
		//do stuff before its sent to hello page
		return View::make('resume');
	}
	public function showPortfolio()
	{
		//do stuff before its sent to hello page
		return View::make('portfolio');
	}

}
