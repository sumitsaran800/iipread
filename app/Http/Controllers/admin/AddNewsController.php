<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use Carbon\Carbon;

class AddNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $todayDate = $now->toDateString();
        $title = "Add News";
        $url = route('frotend.news.add');
        $btn = "Save";
        $data = compact('title', 'btn', 'url', 'todayDate');
        return view('frotend/admin/news/addnews')->with($data);
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
            'title' => 'required',
            'des'   =>  'required|max:5000',
            'Date' =>   'required|date|after_or_equal:todayDate'
        ]);

        $user = new news;
        $user->title = $request['title'];
        $user->description = $request['des'];
        $user->expire_date = $request['Date'];
        $user->save();

        return redirect('news/view');
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
        $now = Carbon::now();
        $todayDate = $now->toDateString();
        $btn = "Update";
        $id = decrypt($id);
        $url = route('frotend.news.update', ['id' => encrypt($id)]);
        $fetch = news::find($id);
        $title = "News Update";
        $data = compact('btn', 'title', 'url', 'fetch', 'todayDate');
        return view('frotend/admin/news/addnews')->with($data);
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

        $request->validate([
            'title' => 'required',
            'des'   =>  'required|max:5000',
            'Date' =>   'required|date|after_or_equal:todayDate'
        ]);


        $id = decrypt($id);
        $user = news::find($id);
        $user->title = $request['title'];
        $user->description = $request['des'];
        $user->expire_date = $request['Date'];
        $user->save();

        return redirect('news/view');
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
        $user = news::find($id);
        $user->delete();

        return redirect()->back();
    }
}