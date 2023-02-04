<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id = decrypt($id);
        $title = "User";
        $fetch = Register::find($id);
        $data = compact('title', 'fetch');
        return view('frotend/admin/user')->with($data);
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

        $btn = "Update";
        $title = "User Update";
        $fetch = Register::find($id);
        $url = route('admin.fortend.user.update', ['id' => encrypt($id)]);
        $data = compact('title', 'url', 'btn', 'fetch');
        return view('frotend/register')->with($data);
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
            'name' => 'required',
            'email' => 'required|',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        if (!$request['agree']) {
            $error = "You Must Agree All The T & C";
            return redirect()->back()->withErrors($error);
        }
        $id = decrypt($id);

        $user = Register::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendEmail()
    {
        $user = "sureshsaran97@gmail.com";
        Mail::raw('Hello This Is Testing', function ($massage) use ($user) {
            $massage->subject("testing");
            $massage->to($user, 'Sumit Saran');
        });
        echo "<h1>Success</h1>";
    }

    public function forget()
    {
        $title = "Forget Password";
        $btn = "Send";
        $url = route('admin.user.sendlink');
        $data = compact('title', 'btn', 'url');
        return view('frotend/forgetpassword')->with($data);
    }

    public function sendlink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = Register::where('email', $request['email'])->first();

        if (is_null($user)) {
            $error = "Invaild Email Please Check Email";
            return redirect()->back()->withErrors($error);
        } else {
            $data = [
                'user' => $user,
                'url' => route('admin.fortend.user.edit', ['id' => encrypt($user->id)]),
            ];


            mail::send('frotend.email.register', $data, function ($message) use ($user) {
                $message->subject("Your Password");
                $message->to($user->email);
            });
            echo "mail Sent";
        }
    }
}
