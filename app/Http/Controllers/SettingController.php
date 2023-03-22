<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use App\Models\Setting;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    // addSettings
    public function addSettings(Request $request)
    {
        $settings = Setting::all();
        $arrivals = Arrival::all();

        $addSettings = new Setting();
        $addSettings->associate_country = $request->associate_country;
        $addSettings->associate_id = $request->associate_id;
        $addSettings->store_country = $request->store_country;
        $addSettings->quantity = $request->quantity;

        $country = $settings[0]['associate_country'];
        $id = $settings['associate_id'];
        $amazon = "https://www.amazon.".$country."/gp/aws/cart/add.html?AssociateTag=".$id."&ASIN.1=".$arrivals[0]['asin']."&Quantity.1=1";

        $addSettings->link = $amazon;

        $addSettings->save();
        return redirect()->back()->with('success', 'Settings Added Successfully');
    }

     // editSetting
     function editSetting($id){
        $settings = Setting::find($id);
        return view('backend.settings.settings',compact('settings'));
    }

    // updateSetting
    function updateSetting(Request $request, $id){
        $updateSetting = Setting::find($id);
        $updateSetting->associate_country = $request->associate_country;
        $updateSetting->associate_id = $request->associate_id;
        $updateSetting->store_country = $request->store_country;
        $updateSetting->quantity = $request->quantity;
        $updateSetting->update();
        return redirect()->route('settings')->with('success', 'Setting updated Successfully');
    }

    // deleteSetting
    function deleteSetting($id){
        $deleteSetting = Setting::find($id);
        $deleteSetting->delete();
        return redirect()->route('settings')->with('success', 'Settings Deleted Successfully');
    }
}
