<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;

class StateAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Add State";
        $fetch = Country::orderby('id', 'desc')->get();
        $url = route('admin.state.store');
        $btn = "Save";
        $data = compact('title', 'btn', 'url', 'fetch');
        return view('frotend/admin/state/stateadd')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        // $data = State::with('country')->get()->toArray();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";


        $title = "State View";
        $fetch = State::with('country')->orderby('states.id', 'desc')->paginate(10);
        // $states->Join('countries', 'states.country_id', '=', 'countries.id');
        // $fetch = $states->paginate(10);


        $data =  compact('title', 'fetch');
        return view('frotend/admin/state/stateview')->with($data);
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
            'state' => "required",
            'country' => 'required',
        ]);
        $user = new State;
        $user->state_name = $request['state'];
        $user->country_id = $request['country'];
        $user->save();

        return redirect('state/view');
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
        $user = State::find($id);
        if ($user['state_status'] == 1) {
            $user->state_status = 0;
        } else {
            $user->state_status = 1;
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
        $title = "State Update";
        $btn = "Update";
        $id = decrypt($id);
        $fetch = Country::get();
        $getData = State::find($id);
        $url = route('admin.state.update', ['id' => encrypt($id)]);
        $data = compact('title', 'btn', 'url', 'fetch', 'getData');
        return view('frotend/admin/state/stateadd')->with($data);
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
        $user = State::find($id);
        $user->state_name = $request['state'];
        $user->country_id = $request['country'];
        $user->save();

        return redirect('state/view');
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
        $user = State::find($id);
        $user->delete();

        return redirect()->back();
    }
}