<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Message;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderBy('id','desc')->get();
        return view('admin.announcements',compact('announcements'));
    }

    public function create()
    {
        return view('admin.announcement_create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('announcement_photo')){
            $fileNameWithExtension = $request->file('announcement_photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('announcement_photo')->guessClientExtension();
            $fileNameToStore_o = time().'_'.$filename.'.'.$extension;
            $request->file('announcement_photo')->storeAs('public/announcement',$fileNameToStore_o);
            $announcement_status = 1;
        }else{
            $fileNameToStore_o = '';
            $announcement_status = 0;
        }

        $announcement = ($request->input('announcement_id') !== NULL)  ? Announcement::findOrFail($request->announcement_id) : new Announcement;
        $announcement->title = $request->input('title');
        $announcement->content = $request->input('content');
        if($announcement_status == 1){
            $announcement->photo = $fileNameToStore_o;
        }
        $announcement->save();
        return redirect('/administration/announcements/create');
    }

    public function delete(Request $request)
    {
        $id = $request->get('announcement_id');
        $a = Announcement::find($id);
        unlink(public_path().'/storage/announcement/'.$a->photo);
        
        $a->delete();
        return 'success';
    }

    public function messages()
    {
        $messages = Message::orderBy('id','desc')->get();
        return view('admin.messages',compact('messages'));
    }
    public function ajaxAnouncementDetails(Request $request){
        $announcement = Announcement::find($request->input('announcement_id'));
        return $announcement;
    }
}
