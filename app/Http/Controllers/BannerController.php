<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index() {
        $banners = Banner::orderBy('id', 'asc')->get();
        return view('admin.banners', compact('banners'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'image_name' => 'required'
        ]);

        $banner = new Banner;
        $banner->name = $request->input('name');
        $banner->image = $request->input('image_name');
        $banner->save();

        return back()->with('success','Banner saved successfully.');
    }

    public function delete(Request $request) {
        $banner = Banner::findOrFail($request->input('id'));
        $bannerImage = public_path().'/storage/banners/'.$banner->image;

        if (file_exists($bannerImage)) {
            unlink($bannerImage);
        }

        $banner->delete();
        return $banner->id;
    }
}
