<?php

/*Route::pattern('id','[0-9]+');*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('test', ['as' => 'test.test', function(){
	return 'Hello';
}]);
*/

Route::get('/',['as' => 'home.index', function(){
	return view('index');
}]);

Route::get('about.html', ['as' => 'about.index' ,function(){
	return view('about');
}]);
