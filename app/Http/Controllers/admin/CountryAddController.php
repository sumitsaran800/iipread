<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Country Add";
        $url = route('admin.country.add');
        $btn = "Add Country";
        $data = compact('title', 'url', 'btn');
        return view('frotend/admin/country/countryadd')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        // $countries = Country::with('states')->get()->toArray();
        // echo "<pre>";
        // print_r($countries);
        // echo "</pre>";

        $title = "Country View";
        $fetch = Country::with(['states' => function ($q) {
            $q->orderby('states.state_name', 'asc');
        }])
            ->orderby('id', 'desc')->paginate(5);
        $data = Compact('title', 'fetch');
        return view('frotend/admin/country/countryview')->with($data);
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
            'country_name' =>  'required|unique:countries,country_name',
        ]);

        $user = new Country;
        $user->country_name = $request['country'];
        $user->save();

        return redirect('country/view');
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
        $title = "Country Update";
        $fetch = Country::find($id);
        $btn = "Update";
        $url = route('admin.country.update', ['id' => encrypt($id)]);
        $data = compact('title', 'btn', 'url', 'fetch');
        return view('frotend/admin/country/countryadd')->with($data);
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
        $user = Country::find($id);
        $user->country_name = $request['country'];
        $user->save();

        return redirect('country/view');
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
        $user = Country::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function status($id)
    {

        $id = decrypt($id);
        $user = Country::find($id);
        if ($user['status'] == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }

        $user->save();
        return redirect()->back();
    }
}