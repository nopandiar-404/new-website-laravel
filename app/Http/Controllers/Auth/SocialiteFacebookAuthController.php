<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteFacebookAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver("facebook")->redirect();
    }

    public function handelProviderCallback()
    {
        try {
            $facebookUser= Socialite::driver("facebook")->stateless()->user();
        } catch(Exception $err) {
            return redirect()->back()->with("status", "Something Went Wrong!");
        }

        $existingUser=User::where("facebook_id", $facebookUser->id)->first();

        if (!$existingUser) {
            $newUser=User::create([
                "facebook_id"=>$facebookUser->id,
                "name"=>$facebookUser->name,
                "email"=>$facebookUser->email,
                "avatar"=>$facebookUser->avatar,
                "email_verified_at"=>now()
            ]);
            Auth::login($newUser);
        } else {
            Auth::login($existingUser);
        }

        return to_route('home');
    }
}
