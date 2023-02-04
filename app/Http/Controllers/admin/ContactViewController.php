<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Contact View";
        $fetch = contact::get();
        $data = compact('title', 'fetch');
        return view('frotend/admin/contact/contactview')->with($data);
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
        $id = decrypt($id);

        $url = route('admin.contact.update', ['id' => encrypt($id)]);
        $title = "Update";
        $btn = "Update";
        $fetch = Contact::find($id);
        $data = compact('title', 'btn', 'url', 'fetch');
        return view('frotend/admin/contact/contactadd')->with($data);
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
        $user = Contact::find($id);
        $user->phone = $request['phone'];
        $user->mobile = $request['mobile'];
        $user->email = $request['email'];
        $user->website = $request['website'];
        $user->address = $request['address'];
        $user->map_link = $request['maplink'];
        $user->save();

        return redirect('contact/view');
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