<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $title = "Contact";
        $fetch = Contact::get();
        $data = compact('title', 'fetch');
        return view('frotend/contact')->with($data);
    }
}