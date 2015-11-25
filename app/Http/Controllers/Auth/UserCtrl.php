<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use View;
use Hash;
use Auth;
use App\User;


class UserCtrl extends Controller{
	
	public function create(){
		return View::make('register');

		
	}

	public function store(Request $request){

    	$user = new User();

        $user->fill($request->all());

        $user->save();

        return $user;
    

	}

	public function login(){
		return View::make('login');
	}

	public function authenticate(Request $request){


	}

	public function logout(){

		Auth::logout();

		return redirect ('/');
	}
}