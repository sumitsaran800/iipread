<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index()
    {
        $fetch = about::orderby('about_content', 'desc')->first();
        $title = "About";
        $data = compact('title', 'fetch');
        return view('frotend/about')->with($data);
    }
}