<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('rolldice', function($name, $day)
{
	if($day == 'Saturday' || $day =='Sunday'){
		return View::make('test')->with('student', $name);
	}else{
		return Redirect::to('http://google.com');
	}
});

Route::get('rolldice', function()
{
if($num =0) {
 $min = $num[1];
 $max = $num[2];
} else {
$min = 1;
$max = 6;
}
$answer = mt_rand($min, $max); 
return View::make('rolldice')->with('answer', $answer);
});

Route::get('orm-test', function ()
{
	$post = Post::find(1);
	var_dump($post);
});

