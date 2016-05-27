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

Route::get('covert/', function () {
    return view('index');
});

// Room routing
Route::get('covert/room/{roomID}', function($roomID) {
    // this will load room.blade.php
    return view('room', ['roomID' => $roomID]);
});
// Authentication routes...
Route::get('covert/auth/login', 'Auth\AuthController@getLogin');
Route::post('covert/auth/login', 'Auth\AuthController@postLogin');
Route::get('covert/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('covert/auth/register', 'Auth\AuthController@getRegister');
Route::post('covert/auth/register', 'Auth\AuthController@postRegister');