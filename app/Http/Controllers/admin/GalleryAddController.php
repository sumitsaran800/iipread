<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;

class GalleryAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Add";
        $fetch = gallery::get();
        $url = route('admin.frotend.gallery.add');
        $btn = "Save";
        $data = compact('title', 'btn', 'url', 'fetch');
        return view('frotend/admin/gallery/galleryadd')->with($data);
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

            'image' => 'required',
            'image_title' => 'required',
        ]);


        $file = $request->file('image');
        $imagename = "gallery-" . date('dmy_his') . "." . $file->getClientOriginalExtension();
        $upload = "public/uploads";
        $file->move($upload, $imagename);
        $gallery = new gallery;
        $gallery->image_name = $imagename;
        $gallery->image_title = $request['image_title'];
        $gallery->save();

        return redirect('admin/gallery')->with('Success', "New Recored Created Succesfully");
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
        $btn = "Update";
        $id = decrypt($id);
        $title = "Gallery Update";
        $fetch = gallery::find($id);
        $url = route('admin.frotend.gallery.update', ['id' => encrypt($id)]);
        $data = compact('btn', 'fetch', 'url', 'fetch', 'title');
        return view('frotend/admin/gallery/galleryadd')->with($data);
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
        $user = gallery::find($id);

        $imagename = $user->image_name;

        if (!empty($request['image'])) {
            $file = $request->file('image');
            $imagename = "gallery-" . date('dmy_his') . "." . $file->getClientOriginalExtension();
            $upload = "public/uploads";
            $file->move($upload, $imagename);
        }


        $user->image_name = $imagename;
        $user->image_title = $request['image_title'];
        $user->save();

        return redirect('admin/gallery')->with('Success', "New Recored Created Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}