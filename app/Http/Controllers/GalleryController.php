<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'desc')->get();

        return view('gallery', compact('photos'));
    }

}
