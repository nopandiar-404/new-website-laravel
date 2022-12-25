<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteGitHubAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handelProviderCallback()
    {
        try {
            $githubUser= Socialite::driver("github")->stateless()->user();
        } catch(Exception $err) {
            return redirect()->back()->with("status", "Something Went Wrong!");
        }

        $existingUser=User::where("github_id", $githubUser->id)->first();

        if (!$existingUser) {
            $newUser=User::create([
                "github_id"=>$githubUser->id,
                "name"=>$githubUser->name,
                "email"=>$githubUser->email,
                "avatar"=>$githubUser->avatar,
                "email_verified_at"=>now()
            ]);
            Auth::login($newUser);
        } else {
            Auth::login($existingUser);
        }

        return to_route('home');

    }
}
