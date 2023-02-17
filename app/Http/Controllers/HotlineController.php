<?php

namespace App\Http\Controllers;

use App\Hotline;
use Illuminate\Http\Request;

class HotlineController extends Controller
{
    public function index() {
        $hotlines = Hotline::where('status', 1)->get();
        return view('admin.hotlines', compact('hotlines'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required'
        ]);
        $hotline = empty($request->input('id')) ? new Hotline : Hotline::findOrFail($request->input('id'));
        $hotline->title = $request->input('title');
        $hotline->contact_name = $request->input('contact_name');
        $hotline->address = $request->input('address');
        $hotline->email = $request->input('email');
        $hotline->landline = $request->input('landline');
        $hotline->mobile = $request->input('mobile');
        $hotline->save();

        return back()->with('success','Hotline saved successfully.');
    }

    public function details(Request $request) {
        $hotline = Hotline::findOrFail($request->input('id'));
        return $hotline;
    }

    public function delete(Request $request) {
        $hotline = Hotline::findOrFail($request->input('id'));
        $hotline->delete();

        return $hotline->id;
    }
}
