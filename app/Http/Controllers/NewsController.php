<?php

namespace App\Http\Controllers;

use App\Models\news;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id)
    {
        $id = decrypt($id);
        $fetch = news::find($id);
        $title = "News";
        $data = compact('title', 'fetch');
        return view('frotend/news')->with($data);
    }
}