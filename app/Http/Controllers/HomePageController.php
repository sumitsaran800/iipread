<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        $title = "Home";
        $data = compact('title');
        return view('frotend/index')->with($data);
    }
}