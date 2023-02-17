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

        $highlight = Highlights::findOrFail($request->input('id'));
        $highlight->title = $request->input('title');
        if ($request->input('image_name') !== '') {
            $highlight->image = $request->input('image_name');
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
