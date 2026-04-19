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

    public function adminIndex()
    {
        $photos = Photo::orderBy('created_at', 'desc')->get();

        return view('admin.gallery.index', compact('photos'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:4096',
        ]);

        $file = $request->file('photo');
        $filename = time() . '_' . preg_replace('/[^A-Za-z0-9\-_\.]/', '', $file->getClientOriginalName());
        $directory = public_path('uploads/gallery');

        if (! file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        $file->move($directory, $filename);

        $title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        Photo::create([
            'title' => $title ?: 'Foto Gallery',
            'description' => null,
            'path' => 'uploads/gallery/' . $filename,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Foto berhasil diunggah ke database.');
    }
}
