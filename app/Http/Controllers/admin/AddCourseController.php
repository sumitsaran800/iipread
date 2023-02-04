<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = route('frotend.admin.add.course.store');
        $heading = "Add Course";
        $btn = "Save";
        $title = "Add Course";
        $data = compact('btn', 'title', 'url', 'heading');
        return view('frotend/admin/course/addcourse')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $title = "Course View";
        $fetch = course::orderby('id', 'desc')->get();
        $data = compact('title', 'fetch');
        return view('frotend/admin/course/viewcourse')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('logo');
        $imagename = "Gallery-" . date('dmy_his') . "." . $file->getClientOriginalExtension();
        $upload = "public/upload/course";
        $file->move($upload, $imagename);


        $user = new course;
        $user->course_title = $request['name'];
        $user->course_description = $request['course_dec'];
        $user->course_color = $request['course_color'];
        $user->course_logo = $imagename;
        $user->course_price = $request['course_price'];
        $user->save();
        return redirect('course/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $id = decrypt($id);
        $user = course::find($id);
        if ($user['status'] == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }

        $user->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = decrypt($id);
        $fetch = course::find($id);
        $url = route('frotend.admin.add.course.update', ['id' => encrypt($id)]);
        $title = "Course Update";
        $heading = "Update Course";
        $btn = "Update";
        $data = compact('url', 'title', 'btn', 'fetch', 'heading');
        return view('frotend/admin/course/addcourse')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $user = course::find($id);

        $imagename = $user->course_logo;

        if (!empty($request['logo'])) {
            $file = $request->file('logo');
            $imagename = "Gallery-" . date('dmy_his') . "." . $file->getClientOriginalExtension();
            $upload = "public/upload/course";
            $file->move($upload, $imagename);
        }

        $user->course_title = $request['name'];
        $user->course_description = $request['course_dec'];
        $user->course_color = $request['course_color'];
        $user->course_logo = $imagename;
        $user->course_price = $request['course_price'];
        $user->save();
        return redirect('course/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $id = decrypt($id);
        $user = course::find($id);
        $user->delete();
        return redirect()->back();
    }
}