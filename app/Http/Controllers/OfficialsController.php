<?php

namespace App\Http\Controllers;

use App\Official;
use Illuminate\Http\Request;
use Image;

class OfficialsController extends Controller
{
    const IMAGE_WIDTH = 263;
    const IMAGE_HEIGHT = 230;

    public function index () {
        $officials = Official::where('status','1')->get();
        return view('admin.officials', compact('officials'));
    }

    public function details(Request $request) {
        $official = Official::findOrFail($request->input('id'));
        return $official;
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'bail|required|max:50'
        ]);

        $official = Official::findOrFail($request->input('id'));
        $official->name = $request->input('name');
        $official->facebook = $request->input('facebook');
        $official->twitter = $request->input('twitter');
        $official->instagram = $request->input('instagram');

        if (!empty($request->input('image_name'))) {
            $official->image = $request->input('image_name');
        }

        $official->save();

        return back()->with('success','Official updated successfully.');
    }

    public function resizePhoto($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height)->save($path);
        $img->save($path);
    }
}
