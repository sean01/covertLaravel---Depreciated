<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    return view('index');
});

Route::get('/register', 'UserCtrl@create');
# Save a user to the database
Route::post('/user', 'UserCtrl@store');
# Get a login form
Route::get('/login', 'UserCtrl@login');
# Log the user in
Route::post('/auth', 'UserCtrl@authenticate');
# Log the user out
Route::get('/logout', 'UserCtrl@logout');
