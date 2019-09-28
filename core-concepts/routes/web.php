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

//Put things inside Container
app()->bind('example', function() {
    return new \App\Example;
});

//Singleton
app()->singleton('single', function() {
    return new \App\Example;
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', 'ServiceController@index');
Route::get('/providers', 'ServiceProviderController@index');
Route::get('/providers/repo', 'ServiceProviderController@repo');
Route::get('/reflectionError', 'ServiceController@reflectionError');
Route::get('/sample', 'AutoResolvingController@sample')->middleware('log-warning'); //single
Route::get('/bar', 'BarController@bar')->middleware('log'); //group
