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

Route::get('/customer/json', 'CustomerController@json');
Route::get('/customer/list', 'CustomerController@list');
Route::get('/customer/edit/{_id}', 'CustomerController@edit');
Route::get('/customer/new', 'CustomerController@new');
Route::get('/customer/remove/{_id}', 'CustomerController@remove');
Route::post('/customer/add', 'CustomerController@add');



// Route::get('/auth','LoginController');
// Authentication routes...


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
