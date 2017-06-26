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
Route::post('/customer/add', 'CustomerController@add');
