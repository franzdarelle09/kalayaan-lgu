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
}
