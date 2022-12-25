<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravolt\Avatar\Avatar;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());


        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        if ($request->user()->isDirty('name')) {
            $userId=$request->user()->id;



            if (empty($request->user()->avatar) && file_exists(storage_path("app/public/avatars/default-avatar-$userId.png"))) {
                unlink(storage_path("app/public/avatars/default-avatar-$userId.png"));
            }

            if (empty($request->user()->avatar) && !file_exists(storage_path("app/public/avatars/".$request->user()->avatar))) {
                $colors=[
                    "#f44336",
                    "#E91E63",
                    "#9C27B0",
                    "#673AB7",
                    "#3F51B5",
                    "#2196F3",
                    "#03A9F4",
                    "#00BCD4",
                    "#009688",
                    "#4CAF50",
                    "#8BC34A",
                    "#CDDC39",
                    "#FFC107",
                    "#FF9800",
                    "#FF5722",
                ];

                $randomColor=array_rand($colors, 1);

                $avatar=new Avatar();
                $avatar->create($request->name)->setBackground($colors[$randomColor])->setBorder(0, "background")->save(storage_path("app/public/avatars/default-avatar-$userId.png"));
            }
        }



        if ($request->hasFile("avatar")) {
            $user=$request->user();

            if (file_exists(storage_path("app/public/avatars/default-avatar-$user->id.png"))) {
                unlink(storage_path("app/public/avatars/default-avatar-$user->id.png"));
            }

            if (!empty($request->user()->avatar) && file_exists(storage_path("app/public/avatars/$user->avatar"))) {
                unlink(storage_path("app/public/avatars/$user->avatar"));
            }

            $extension=$request->file("avatar")->extension();

            $finalName="avatar-$user->id.$extension";

            $request->file("avatar")->storeAs("avatars", $finalName);


            $request->user()->avatar=$finalName;
        }


        // @dd($request->user());


        $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'Profile is updated successfully');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        if (auth()->user() && !auth()->user()->google_id && !auth()->user()->facebook_id
        && !auth()->user()->github_id) {
            $request->validateWithBag('userDeletion', [
                'password' => ['required', 'current-password'],
            ]);
        }

        $user = $request->user();


        Auth::logout();

        if (file_exists(storage_path("app/public/avatars/default-avatar-$user->id.png"))) {
            unlink(storage_path("app/public/avatars/default-avatar-$user->id.png"));
        }

        if (!empty($user->avatar) && file_exists(storage_path("app/public/avatars/$user->avatar"))) {
            unlink(storage_path("app/public/avatars/$user->avatar"));
        }


        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with("info", "Your Account is deleted successfully");
    }
}
