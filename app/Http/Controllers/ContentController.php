<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    public function index($type) {
        $content = Content::where('type', strtolower($type))->first();
        
        if (!$content) {
            return redirect('/administration');
        }
        
        return view('admin.content', compact('content'));
    }

    public function save(Request $request) {
        $content = Content::findOrFail($request->input('id'));
        $content->body = $request->input('body');
        $content->save();

        return back()->with('success', $content->name.' updated successfully.');
    }
}
