<?php

namespace App\Http\Controllers\Admin\Dashboard\Advertisements;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisement;
use Illuminate\Http\Request;

class HomeAdvertisementController extends Controller
{
    public function show()
    {
        return view('dashboard.advertisements.home_advertisement.show', [
            "homeAdvertisement" => HomeAdvertisement::first()
        ]);
    }

    public function update(Request $request)
    {
        $homeAdvertisement=HomeAdvertisement::where("id", 1)->first();


        $homeAdvertisementFormData=$request->validate([
            "top_advertisement_url"=>[],
            "top_advertisement_status"=>["required"],
            "middle_advertisement_url"=>[],
            "middle_advertisement_status"=>["required"],
            "bottom_advertisement_url"=>[],
            "bottom_advertisement_status"=>["required"]
        ]);


        if ($request->hasFile("top_advertisement_photo")) {
            $topAdvertisementFormData=$request->validate([
                 "top_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
             ]);


            if (!empty($homeAdvertisement->top_advertisement_photo) && file_exists(public_path("storage/advertisements/$homeAdvertisement->top_advertisement_photo"))) {
                unlink(public_path("storage/advertisements/$homeAdvertisement->top_advertisement_photo"));
            }

            $extension=$request->file("top_advertisement_photo")->extension();
            $finalName="home-top-advertisement-photo.$extension";
            $request->file("top_advertisement_photo")->storeAs("advertisements", $finalName);
            $topAdvertisementFormData["top_advertisement_photo"]=$finalName;

            $homeAdvertisement->update($topAdvertisementFormData);
        }

        if ($request->hasFile("middle_advertisement_photo")) {
            $middleAdvertisementFormData=$request->validate([
                 "middle_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
             ]);


            if (!empty($homeAdvertisement->middle_advertisement_photo) && file_exists(public_path("storage/advertisements/$homeAdvertisement->middle_advertisement_photo"))) {
                unlink(public_path("storage/advertisements/$homeAdvertisement->middle_advertisement_photo"));
            }

            $extension=$request->file("middle_advertisement_photo")->extension();
            $finalName="home-middle-advertisement-photo.$extension";
            $request->file("middle_advertisement_photo")->storeAs("advertisements", $finalName);
            $middleAdvertisementFormData["middle_advertisement_photo"]=$finalName;

            $homeAdvertisement->update($middleAdvertisementFormData);
        }

        if ($request->hasFile("bottom_advertisement_photo")) {
            $bottomAdvertisementFormData=$request->validate([
                 "bottom_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
             ]);


            if (!empty($homeAdvertisement->bottom_advertisement_photo) && file_exists(public_path("storage/advertisements/$homeAdvertisement->bottom_advertisement_photo"))) {
                unlink(public_path("storage/advertisements/$homeAdvertisement->bottom_advertisement_photo"));
            }

            $extension=$request->file("bottom_advertisement_photo")->extension();
            $finalName="home-bottom-advertisement-photo.$extension";
            $request->file("bottom_advertisement_photo")->storeAs("advertisements", $finalName);
            $bottomAdvertisementFormData["bottom_advertisement_photo"]=$finalName;

            $homeAdvertisement->update($bottomAdvertisementFormData);
        }

        $homeAdvertisement->update($homeAdvertisementFormData);

        return redirect()->back()->with("success", "Home advertisements is updated successfully");
    }
}
