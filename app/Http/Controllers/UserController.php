<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{


    public function login(){
        if (Auth::check()){
            return redirect('/administration');
        }
        return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
    	$remember = (isset($remember)) ? true:false;
    	if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],true)) {
            return redirect('/administration');
		}else{
            $message = "whoops email or password is incorrect";
			return redirect('login')->with($message);
		}
    }

    public function signout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
