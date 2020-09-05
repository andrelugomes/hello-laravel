<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/trace', 'TraceController@index')->name('trace.get');
Route::get('/auto-trace', 'AutoTraceController@index')->name('trace.get');
Route::get('/external-trace', 'ExternalTraceController@index')->name('trace.get');
Route::get('/facade-from-package', 'UsingFacadeFromPackageController@index')->name('facade.get');
