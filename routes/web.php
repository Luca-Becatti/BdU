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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('tables', function () {
    return view('tables');
});

Route::get('navbar', function () {
    return view('navbar');
});

Route::get('charts', function () {
    return view('charts');
});

Route::get('cards', function () {
    return view('cards');
});

Route::get('blank', function () {
    return view('blank');
});

Route::get('forgot-password', function () {
    return view('forgot-password');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('resigter');
});

Route::get('nuovoparere', function () {
		return view('nuovoparere');
});

Route::resource('/tables/register', 'ParereController');


//Route::resource('tables', 'ParereController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
