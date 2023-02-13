<?php

namespace App\Http\Controllers;

use App\Highlights;
use Illuminate\Http\Request;
use Image;

class HighlightsController extends Controller
{
    const IMAGE_WIDTH = 380;
    const IMAGE_HEIGHT = 300;

    public function index() {
        $highlights = Highlights::orderBy('highlight_number','asc')->get();
        return view('admin.highlights', compact('highlights'));
    }

    public function details(Request $request) {
        $highlight = Highlights::findOrFail($request->input('id'));
        return $highlight;
    }

    public function update(Request $request) {
        $request->validate([
            'title' => 'bail|required|max:50'
        ]);

        $filenametostore = '';
        if ($request->hasFile('highlights_photo')) {
            $highlights_photo_status = 1;

            //get filename with extension
            $filenamewithextension = $request->file('highlights_photo')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filename = str_replace(' ','_',$filename);

            //get file extension
            $extension = $request->file('highlights_photo')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            $request->file('highlights_photo')->storeAs('public/highlights_photos', $filenametostore);

            $image_path = public_path('storage/highlights_photos/'.$filenametostore);
            $this->resizePhoto($image_path, self::IMAGE_WIDTH, self::IMAGE_HEIGHT);
        }

        $highlight = Highlights::findOrFail($request->input('id'));
        $highlight->title = $request->input('title');
        if ($filenametostore !== '') {
            $highlight->image = $filenametostore;
        }

        $highlight->save();

        return back()->with('success','Highlights updated successfully.');
    }

    public function resizePhoto($path, $width, $height)
    {
        // $img = Image::make($path)->resize($width, $height, function ($constraint) {
        //     $constraint->aspectRatio();
        // });
        $img = Image::make($path)->resize($width, $height)->save($path);
        $img->save($path);
    }
}
