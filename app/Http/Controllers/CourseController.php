<?php

namespace App\Http\Controllers;

use App\Models\course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $title = "Course";

        $data = compact('title');
        return view('frotend/course')->with($data);
    }

    public function courseview($id)
    {
        $title = "Course Details";
        $id = decrypt($id);
        $fetch = course::find($id);
        $data = compact('title', 'fetch');
        return view('frotend/courseshow')->with($data);
    }
}