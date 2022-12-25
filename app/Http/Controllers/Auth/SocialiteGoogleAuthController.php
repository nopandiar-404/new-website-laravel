<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteGoogleAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver("google")->redirect();
    }

    public function handelProviderCallback()
    {
        try {
            $googleUser= Socialite::driver("google")->stateless()->user();
        } catch(Exception $err) {
            return redirect()->back()->with("status", "Something Went Wrong!");
        }

        $existingUser=User::where("google_id", $googleUser->id)->first();

        if (!$existingUser) {
            $newUser=User::create([
                "google_id"=>$googleUser->id,
                "name"=>$googleUser->name,
                "email"=>$googleUser->email,
                "avatar"=>$googleUser->avatar,
                "email_verified_at"=>now()
            ]);
            Auth::login($newUser);
        } else {
            Auth::login($existingUser);
        }

        return to_route('home');
    }
}
