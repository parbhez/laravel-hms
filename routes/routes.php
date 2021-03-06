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

Route::get('/',[
	'as' => '/',
	'uses' => 'DashboardController@index'
]);
Route::get('/login',[
	'as' => 'login',
	'uses' => 'DashboardController@index'
]);

Route::post('/login-check',[
	'as' => '/login-check.post',
	'uses' => 'LoginController@loginCheck'
]);
Route::group(['middleware' => 'userAuth'],function() {
	Route::get('/dashboard',[
	'as' => '/dashboard',
	'uses' => 'LoginController@dashboard'
]);
});
