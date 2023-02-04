<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Register";
        $btn = "Register";
        $url = route('admin.fortend.register.store');
        $data = compact('title', 'btn', 'url');
        return view('frotend/register')->with($data);
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

            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required | same:password',

        ]);
        if (!$request['agree']) {
            $error = "You Must Agree All The T & C";
            return redirect()->back()->withErrors($error);
        }


        $user = new Register;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];

        $user->save();

        if ($user) {
            return redirect('/');
        } else {
            return redirect()->back();
        }

        // if ($request['email'] != "") {
        //     $user = Register::where('email', $request['email'])->get();

        //     if (count($user) != 0) {
        //         $error = "Email Allready Exit";
        //         return redirect()->back()->withErrors($error);
        //     }
        // } else {
        //     $user = new Register;
        //     $user->name = $request['name'];
        //     $user->email = $request['email'];
        //     $user->password = $request['password'];
        // }

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
        //
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
    public function destroy($id)
    {
        //
    }


    public function login()
    {
        $url = route('admin.fortend.checklogin');
        $title = "Login";
        $data = compact('title', 'url');
        return view('frotend/admin/index')->with($data);
    }

    public function checklogin(Request $request)
    {

        if ($request['email'] != "" && $request['password']) {
            $user = Register::where([
                'email' => $request['email'],
                'password' => $request['password']
            ])->first();

            if (!empty($user)) {
                session(['id' => $user->id, 'name' => $user->name]);
                return redirect('/admin');
            } else {
                $error = "Wrong Password And Email";
                return redirect()->back()->withErrors($error);
            }
        } else {
            $error = "Please Enter Your Email and password";
            return redirect()->back()->withErrors($error);
        }
    }

    public function logout()
    {

        session()->forget('id');
        session()->forget('name');
        return redirect('/');
    }
}