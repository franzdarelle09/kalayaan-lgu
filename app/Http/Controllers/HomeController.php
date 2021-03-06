<?php

namespace App\Http\Controllers;

use App\Message;
use App\Announcement;
use App\Department;
use App\Documentlist;
use Illuminate\Http\Request;
use App\User;
use App\News;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->take(3)->get();
        foreach($news as $n){
            $sub_count[] = $this->getOptimalSubstrCount($n->title);
        }
        $announcements = Announcement::orderBy('id','desc')->get();
        return view('home',compact('news','sub_count','announcements'));
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

    public function officials(){
        return view('officials');
    }

    public function about(){
        return view('about');
    }

    public function projects(){
        return view('projects');
    }

    public function policy(){
        return view('policy');
    }

    public function terms(){
        return view('terms');
    }

    public function contactSave(Request $request)
    {
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('msg');
        $message->ipaddress = $request->ip();
        $message->save();
        return 'success';
    }


    public function test(){
        // $user = new User();
        // $user->password = Hash::make('kalayaan4015');
        // $user->email = 'kalayaan_lgu@yahoo.com.ph';
        // $user->name = 'Administrator';
        // $user->save();

        
        $departments = [
            "Municipal Mayor's Office",
            "Municipal Vice Mayor's Office",
            "Sangguniang Bayan Office",
            "Secretary to the Sanggunian Office",
            "Municipal Human Resource Management and Development Office",
            "MUNICIPAL PLANNING AND DEVELOPMENT OFFICE",
            "Municipal Budget Office",
            "Municipal Treasurer's Office",
            "Municipal Engineering Office",
            "Municipal Social Welfare and Development Office",
            "Municipal Accounting Office",
            "Municipal Civil Registrar Office",
            "Municipal Assessor's Office",
            "Municipal Health Office",
            "Municipal Agriculture Office",
            "General Services Office",
            "Municipal Nutrition Action Office",
            "Municipal Disaster Risk Reduction Management Office",
            "Municipal Economic Enterprise Development Office"
        ];

        // foreach($departments as $d){
        //     $dep = new Department;
        //     $dep->name = $d;
        //     $dep->slug = Str::slug($d);
        //     $dep->acronym = '';
        //     $dep->save();
        // }
        
    }
}
