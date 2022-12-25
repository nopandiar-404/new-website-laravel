<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserTwoFactorController extends Controller
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        if ($request->enable_two_factor) {
            $validated = $request->validateWithBag('enable_two_factor', [
                'enable_two_factor' => ['required', 'string'],
            ]);

            $request->user()->update([
                'enable_two_factor' => $validated['enable_two_factor'],
            ]);

            Auth::logout();

            return to_route('login')->with('success', 'Enable Two Factor Authentication successfully, Please login.');
        } else {
            $request->user()->update([
                'enable_two_factor' => null,
            ]);

            return redirect()->back()->with('success', 'Disable Two Factor Authentication successfully.');
        }
    }
}
