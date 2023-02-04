<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;

class GalleryViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Gallery View";
        $fetch = gallery::orderby('id', 'desc')->paginate(4);
        $data = compact('fetch', 'title');
        return view('/frotend/admin/gallery/gallery')->with($data);
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
        //
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
        //
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



        $fetch = gallery::find($id);
        $fetch->delete();
        return redirect()->back()->with("Delete", 'Data SuccessFully Deleted');
    }

    public function status($id)
    {
        $id = decrypt($id);
        $user = gallery::find($id);

        if ($user->image_status == 1) {
            $user->image_status = 0;
        } else {
            $user->image_status = 1;
        }
        $user->save();

        return redirect()->back();
    }
}