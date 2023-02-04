<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;

class AboutAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $btn = "Save";
        $title = "About Add";
        $url = route('admin.frotend.aboutadd.store');
        $data = compact('btn', 'url', 'title');
        return view('frotend/admin/about/add')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'about' => 'required|7000',
        ]);


        $user = new about;
        $user->about_content = $request['about'];
        $user->save();
        return redirect('about/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $fetch = about::find($id);
        $title = "About Update";
        $url = route('admin.frotend.about.update', ['id' => encrypt($id)]);
        $btn = "Update";
        $data = compact('url', 'btn', 'fetch', 'title');
        return view('frotend/admin/about/add')->with($data);
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
        $userupdate = about::find($id);
        $userupdate->about_content = $request['about'];
        $userupdate->save();
        return redirect()->back();
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
        $user = about::find($id);
        $user->delete();
        return redirect()->back();
    }
}