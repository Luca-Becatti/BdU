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

Route::group(['middleware' => ['auth']], function() {
	// uses 'auth' middleware

		Route::get('/', function () {
			return view('index');
		});
			
		Route::get('index', function () {
			return view('index');
		});
			
		Route::get('tables', function () {
			return view('pareri');
		});
		
		Route::get('/pratiche_gis', function () {
				return view('pratiche_gis');
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
		
		Route::get('blank', function () { //pagina vuota per la creazione di nuove pagine
			return view('blank');
		});
		
		Route::get('forgot-password', function () {
			return view('forgot-password');
		});
		
		Route::get('login', function () {
			return view('auth.login');
		});
		
		Route::get('form', function () {
			return view('form');
		});
	
		
		//Route riferite ai pareri. 
		
		Route::get('/pareri/get_commissioni', 'ParereController@get_commissioni')->name('pareri.get_commissioni');;
		Route::get('/pareri/deleteAjax', 'ParereController@deleteAjax')->name('pareri.deleteAjax');
		Route::get('pareri/restore/{id}', array('as'=>'pareri.restore', 'uses'=>'ParereController@restore'));
		Route::get('pareri/showTrashed/{id}', array('as'=>'pareri.showTrashed', 'uses'=>'ParereController@showTrashed'));
		Route::POST('aggiungiParere','ParereController@aggiungiParere');
		Route::POST('editPost','ParereController@editPost');
		Route::POST('deletePost','ParereController@deletePost');	
		Route::get('cestino', 'ParereController@trashcanIndex');		
		Route::resource('pareri', 'ParereController');
		Route::get('pareri/{id}/{ubicazione}', 'ParereController@showWithGis');
		/*------------------------------------------------------*/
		
		
		Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Inserita la GET per il logout perchè auth::router prevede solo POST
		//è possibile che sia il caso di studiare il modo di inviarla via post per questioni di sicurezza.	
	
	});

Auth::routes(); 

/* // Authentication Routes...
$this->get('admin/logi', 'Auth\LoginController@showLoginFor')->name('logi');
$this->post('admin/logi', 'Auth\LoginController@logi');
$this->post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('admin/password/reset', 'Auth\ResetPasswordController@reset'); */

