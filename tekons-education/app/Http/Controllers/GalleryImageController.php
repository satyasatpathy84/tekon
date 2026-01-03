<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    public function index()
    {
        $galleryImages = GalleryImage::all();
        return view('gallery.index', compact('galleryImages'));
    }
}
