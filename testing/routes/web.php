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
    return view('welcome');
});


Route::post('/teams', function () {

    $validate = request()->validate([
        'name' => 'required'
    ]);

    $validate['user_id'] = auth()->id();

    \App\Team::create($validate);

    return redirect('/');
});
