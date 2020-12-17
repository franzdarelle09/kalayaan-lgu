<?php

namespace App\Http\Controllers;

use App\Documentlist;
use Illuminate\Http\Request;
use App\User;
use App\News;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->take(3)->get();
        foreach($news as $n){
            $sub_count[] = $this->getOptimalSubstrCount($n->title);
        }
        
        return view('home',compact('news','sub_count'));
    }

    
    private function getOptimalSubstrCount($title){
        $title_count = strlen($title);
        if ($title_count <= 31){
            return 175;
        }elseif($title_count > 31 && $title_count >= 43){
            return 140;
        }else{
            return 114;
        }
    }

    public function test(){
        // $user = new User();
        // $user->password = Hash::make('kalayaan4015');
        // $user->email = 'kalayaan_lgu@yahoo.com.ph';
        // $user->name = 'Administrator';
        // $user->save();

        

        
    }
}
