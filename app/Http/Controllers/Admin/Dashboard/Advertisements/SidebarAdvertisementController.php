<?php

namespace App\Http\Controllers\Admin\Dashboard\Advertisements;

use App\Http\Controllers\Controller;
use App\Models\SidebarAdvertisement;
use Illuminate\Http\Request;

class SidebarAdvertisementController extends Controller
{
    public function show()
    {
        return view('dashboard.advertisements.sidebar_advertisement.show', [
            "sidebarAdvertisement" => SidebarAdvertisement::first()
        ]);
    }

    public function update(Request $request)
    {
        $sidebarAdvertisement=SidebarAdvertisement::where("id", 1)->first();

        $sidebarAdvertisementFormData=$request->validate([
            "top_advertisement_url"=>[],
            "top_advertisement_status"=>["required"],
            "bottom_advertisement_url"=>[],
            "bottom_advertisement_status"=>["required"]
        ]);

        if ($request->hasFile("top_advertisement_photo")) {
            $topAdvertisementFormData=$request->validate([
                 "top_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
             ]);


            if (!empty($sidebarAdvertisement->top_advertisement_photo) && file_exists(public_path("storage/advertisements/$sidebarAdvertisement->top_advertisement_photo"))) {
                unlink(public_path("storage/advertisements/$sidebarAdvertisement->top_advertisement_photo"));
            }

            $extension=$request->file("top_advertisement_photo")->extension();
            $finalName="sidebar-top-advertisement-photo.$extension";
            $request->file("top_advertisement_photo")->storeAs("advertisements", $finalName);
            $topAdvertisementFormData["top_advertisement_photo"]=$finalName;

            $sidebarAdvertisement->update($topAdvertisementFormData);
        }


        if ($request->hasFile("bottom_advertisement_photo")) {
            $bottomAdvertisementFormData=$request->validate([
                 "bottom_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
             ]);


            if (!empty($sidebarAdvertisement->bottom_advertisement_photo) && file_exists(public_path("storage/advertisements/$sidebarAdvertisement->bottom_advertisement_photo"))) {
                unlink(public_path("storage/advertisements/$sidebarAdvertisement->bottom_advertisement_photo"));
            }

            $extension=$request->file("bottom_advertisement_photo")->extension();
            $finalName="sidebar-bottom-advertisement-photo.$extension";
            $request->file("bottom_advertisement_photo")->storeAs("advertisements", $finalName);
            $bottomAdvertisementFormData["bottom_advertisement_photo"]=$finalName;

            $sidebarAdvertisement->update($bottomAdvertisementFormData);
        }
        $sidebarAdvertisement->update($sidebarAdvertisementFormData);

        return redirect()->back()->with("success", "Sidebar advertisements is updated successfully");
    }
}
