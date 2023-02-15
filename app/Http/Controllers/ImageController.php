<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function crop(Request $request) {
        $path = 'public/'.$request->input('path').'/';
        
        $image_64 = $request->input('image'); //your base64 encoded data

        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf

        $replace = substr($image_64, 0, strpos($image_64, ',')+1); 

        // find substring fro replace here eg: data:image/png;base64,

        $image = str_replace($replace, '', $image_64); 

        $image = str_replace(' ', '+', $image); 

        $imageName = uniqid().'.'.$extension;
        
        $storage = Storage::put($path.$imageName, base64_decode($image));
        return response()->json($imageName);
    }
}
