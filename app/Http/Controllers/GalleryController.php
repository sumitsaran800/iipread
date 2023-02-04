<?php

namespace App\Http\Controllers;

use App\Models\gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $fetch = gallery::orderby('id', 'desc')->where('image_status', 1)->get();
        $title = "Gallery";
        $data = compact('title', 'fetch');
        return view('frotend/gallery')->with($data);
    }
}