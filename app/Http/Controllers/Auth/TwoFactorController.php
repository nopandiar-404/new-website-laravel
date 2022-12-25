<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Notifications\TwoFactorCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwoFactorController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth","twofactor"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("auth.two-factor");
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
            "two_factor_code"=>"integer|required"
        ]);

        $user=auth()->user();

        if ($request->input("two_factor_code")==$user->two_factor_code) {
            User::find(auth()->id())->resetTwoFactorCode();
            return to_route('home');
        }

        return redirect()->back()->withErrors(["two_factor_code"=>"The two factor code you have entered does not match"]);
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


    public function resend()
    {
        User::find(auth()->id())->generateTwoFactorCode();
        User::find(auth()->id())->notify(new TwoFactorCode());

        return redirect()->back()->with("resend_code", "The two factor code has been sent again.");
    }
}
