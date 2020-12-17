<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\News;
class NewsController extends Controller
{
    public function create(){
        return view('admin.news_create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')){
            $fileNameWithExtension = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->guessClientExtension();
            $fileNameToStore = time().'_'.$filename.'.'.$extension;
            $path = $request->file('thumbnail')->storeAs('public/news',$fileNameToStore);
        }else{
            $fileNameToStore = 'nofile.jpg';
        }

        $news = ($request->input('news_id') !== NULL)  ? News::findOrFail($request->news_id) : new News;
        $news->title = $request->input('title');
        $news->photo = $fileNameToStore;
        $news->body = $request->input('wysiwyg-editor');
        $news->slug = Str::slug($request->input('title').' '.time(), '-');
        $news->save();
        return redirect('/administration/news/add');
    }

    public function newsDetails($slug){
        $news = News::whereSlug($slug)->first();
        return view('news',compact('news'));
    }

}
