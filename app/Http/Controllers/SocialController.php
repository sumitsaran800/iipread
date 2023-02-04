<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use Laravel\Socialite\facades\socialite;

class SocialController extends Controller
{
    public function googlelogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request)
    {
        $googlecallback = Socialite::driver('google')->user();
        $googlename = $googlecallback->getName();
        $googleemail = $googlecallback->getEmail();

        $user = Register::where('email', $googleemail)->first();
        if (!is_null($user)) {
            session(['id' => $user->id, 'name' => $user->name]);
            return redirect('/');
        } else {

            $user = new Register;
            $user->name = $googlename;
            $user->email = $googleemail;


            $user->save();

            if ($user) {
                session(['id' => $user->id, 'name' => $user->name]);
                return redirect('/');
            } else {
                return redirect()->back();
            }
        }
    }
}