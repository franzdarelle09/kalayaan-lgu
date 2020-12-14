<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function test(){
        // $user = new User();
        // $user->password = Hash::make('kalayaan4015');
        // $user->email = 'kalayaan_lgu@yahoo.com.ph';
        // $user->name = 'Administrator';
        // $user->save();

        

        
    }
}
