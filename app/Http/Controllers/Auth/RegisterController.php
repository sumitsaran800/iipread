<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Register;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Register::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

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
        return view('auth/register')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        return view('auth/login')->with($data);
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