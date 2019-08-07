<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome')->with([

    	'foo' => 'bar',
    	'list' => [1,2,3,4]
    ]);
});


Route::get('/contact', function () {
    return view('contact')->withEmail("andrelugomes@gmail.com")->withPhone("+55 12 1234567");
});

Route::get('/about', function () {
	$name = "André";

    return view('about')->withName($name);
});

/*Route::get('/tasks', function () {

	$tasks = [
		"Go to the market",
		"Go to the gym",
		"Code software"
	];

    return view('tasks', ['tasks' => $tasks]);
});
*/

Route::get('/tasks', 'TaskController@index');