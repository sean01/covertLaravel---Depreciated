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

		if (Auth::check()) return Redirect::to('/');
		
		return View::make('register');
	
	}

	public function store(Request $request){

    	$user = new User();

    	$user->name = $request->get('name');
    	$user->email = $request->get('email');
    	$user->password = Hash::make($request->get('password'));

    	$user->save();

    	return redirect('/login');
    

	}

	public function login(){
		return View::make('login');
	}

	public function authenticate(Request $request){
		$formdata = $request->only('email', 'password');

        $success = Auth::attempt($formdata);

        if($success){
            return redirect('/');
        }else{
            return redirect('/login');
        }

	}

	public function logout(){

		Auth::logout();

		return redirect ('/');
	}
}