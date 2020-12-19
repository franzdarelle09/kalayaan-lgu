<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\News;
use Image;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{

    public function index(){
        $news = News::orderBy('id','desc')->get();
        return view('admin.news',compact('news'));
    }

    public function create(){
        return view('admin.news_create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')){
            $fileNameWithExtension = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->guessClientExtension();
            $fileNameToStore_o = time().'_'.$filename.'.'.$extension;
            $path = $request->file('thumbnail')->storeAs('public/article_photos/thumbnail',$fileNameToStore_o);
            $thumbnail_status = 1;
        }else{
            $fileNameToStore_o = '';
            $thumbnail_status = 0;
        }

        if($request->hasFile('article_photo')) {
            $article_photo_status = 1;
            //get filename with extension
            $filenamewithextension = $request->file('article_photo')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filename = str_replace(' ','_',$filename);
            //get file extension
            $extension = $request->file('article_photo')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
     
            //small thumbnail name
            $smallthumbnail = $filename.'_small_'.time().'.'.$extension;
     
            //medium thumbnail name
            $mediumthumbnail = $filename.'_medium_'.time().'.'.$extension;
     
            //large thumbnail name
            $largethumbnail = $filename.'_large_'.time().'.'.$extension;
     
            //Upload File
            $request->file('article_photo')->storeAs('public/article_photos', $filenametostore);
            $request->file('article_photo')->storeAs('public/article_photos/thumbnail', $smallthumbnail);
            $request->file('article_photo')->storeAs('public/article_photos/thumbnail', $mediumthumbnail);
            $request->file('article_photo')->storeAs('public/article_photos/thumbnail', $largethumbnail);
      
            //create small thumbnail
            $smallthumbnailpath = public_path('storage/article_photos/thumbnail/'.$smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 150, 93);
     
            //create medium thumbnail
            $mediumthumbnailpath = public_path('storage/article_photos/thumbnail/'.$mediumthumbnail);
            $this->createThumbnail($mediumthumbnailpath, 300, 185);
     
            //create large thumbnail
            $largethumbnailpath = public_path('storage/article_photos/thumbnail/'.$largethumbnail);
            $this->createThumbnail($largethumbnailpath, 520, 390);
      
            // return redirect('image')->with('success', "Image uploaded successfully.");
        }else{
            $article_photo_status = 0;
        }

        $news = ($request->input('news_id') !== NULL)  ? News::findOrFail($request->news_id) : new News;
        $news->title = $request->input('title');
        if($thumbnail_status == 1){
            if(file_exists("/storage/article_photos/$news->thumbnail") && $news->thumbnail != ""){
                unlink("/storage/article_photos/$news->thumbnail");
            }
            $news->thumbnail = $fileNameToStore_o;
        }
        if ($article_photo_status == 1) {
            
            if(file_exists(public_path()."/storage/article_photos/".$news->article_photo) && $news->article_photo != ""){
                unlink(public_path()."/storage/article_photos/$news->article_photo");
                
            }
            if(file_exists(public_path()."/storage/article_photos/thumbnail/$news->small_thumb") && $news->small_thumb != ""){
                unlink(public_path()."/storage/article_photos/thumbnail/$news->small_thumb");
                unlink(public_path()."/storage/article_photos/thumbnail/$news->medium_thumb");
                unlink(public_path()."/storage/article_photos/thumbnail/$news->large_thumb");
            }
            $news->article_photo = $filenametostore;
            $news->small_thumb = $smallthumbnail;
            $news->medium_thumb = $mediumthumbnail;
            $news->large_thumb = $largethumbnail;
        }
        $news->body = $request->input('wysiwyg-editor');
        $news->slug = Str::slug($request->input('title').' '.time(), '-');
        $news->save();
        return redirect('/administration/news/add');
    }

    public function createThumbnail($path, $width, $height)
    {
        // $img = Image::make($path)->resize($width, $height, function ($constraint) {
        //     $constraint->aspectRatio();
        // });
        $img = Image::make($path)->resize($width, $height)->save($path);
        $img->save($path);
    }

    public function newsDetails($slug){
        $news = News::whereSlug($slug)->first();
        $recent_news = News::where('slug','!=',$slug)->orderBy('id','desc')->take(5)->get();
        return view('news',compact('news','recent_news'));
    }

    public function newsList(){
        $news = News::orderBy('id','desc')->paginate(4);
        return view('news_list',compact('news'));
    }

    public function delete(Request $request)
    {
        $id = $request->get('news_id');
        $n = News::find($id);
        unlink(public_path().'/storage/article_photos/'.$n->article_photo);
        unlink(public_path().'/storage/article_photos/thumbnail/'.$n->small_thumb);
        unlink(public_path().'/storage/article_photos/thumbnail/'.$n->medium_thumb);
        unlink(public_path().'/storage/article_photos/thumbnail/'.$n->large_thumb);
        
        $n->delete();
        return 'success';
    }

    public function edit($id){
        $n = News::find($id);
        return view('admin.news_edit',compact('n'));
    }

}
