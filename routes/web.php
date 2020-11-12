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

Route::group([], function(){
	//list user
	Route::get('/users', 'UserController@index')->name('users.list');
	//show form create user
	Route::get('/users/create', 'UserController@create')->name('users.create');
	//store user
	Route::post('/users', 'UserController@store')->name('users.store');
	//show edit form
	Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit')->middleware('is.owner');

	//update user
	Route::put('/users/{id}', 'UserController@update')->name('users.update')->middleware('is.owner');
	//delete user
	Route::delete('/users/{id}', 'UserController@destroy')->name('users.delete')->middleware('is.owner');
	//show user detail
	Route::get('/users/{id}', 'UserController@show')->name('users.show')->middleware('is.owner');

});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Login form
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('form-login');
//submit login
Route::post('/login', 'Auth\LoginController@login')->name('login');
//home page
Route::get('/home', 'HomeController@index')->name('home');
//logout
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//show register page
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('form-register');
//create user
Route::post('/register', 'Auth\RegisterController@register')->name('register');

