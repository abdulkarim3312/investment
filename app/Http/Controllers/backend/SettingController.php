<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\View\View;
use File;

class SettingController extends Controller
{
    public $user;


    public function settingPage()
    {
        $settingData = Setting::first();
        return view('backend.dashboard.settings.settings', compact('settingData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'site_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $setting = Setting::first();
        if($setting){
            $imageName = $setting->site_logo;
            if($request->hasFile('site_logo')){

                if ($setting->site_logo != null) {
                    if (File::exists('upload/site_logo/'.$setting->site_logo))
                        File::delete('upload/site_logo/'.$setting->site_logo);
                }
                $imageName = time().'.'.$request->site_logo->extension();
                $request->site_logo->move(public_path('upload/site_logo'), $imageName);
            }
            $imageNameTwo = $setting->admin_logo;
            if($request->hasFile('admin_logo')){
                // if (file_exists('upload/site_logo/'.$setting->admin_logo)) {
                //     unlink('upload/site_logo/'.$setting->admin_logo);
                // }
                if ($setting->admin_logo != null) {
                    if (File::exists('upload/site_logo/'.$setting->admin_logo))
                        File::delete('upload/site_logo/'.$setting->admin_logo);
                }
                $imageNameTwo = time().'.'.$request->admin_logo->extension();
                $request->admin_logo->move(public_path('upload/site_logo'), $imageNameTwo);
            }

            $setting->update([
                'site_logo' => $imageName,
                'admin_logo' => $imageNameTwo
            ]);
       }else{
            $imageName = '';
            if($request->hasFile('site_logo')){
                $imageName = time().'.'.$request->site_logo->extension();
                $request->site_logo->move(public_path('upload/site_logo'), $imageName);
            }
            $imageNameTwo = '';
            if($request->hasFile('admin_logo')){
                $imageNameTwo = time().'.'.$request->admin_logo->extension();
                $request->admin_logo->move(public_path('upload/site_logo'), $imageNameTwo);
            }
            Setting::create([
                'site_logo' => $imageName,
                'admin_logo' => $imageNameTwo,
            ]);
       }

        return response()->json(['success' => true, 'message' => 'Logo uploaded successfully !!'], 200);
    }

    public function compose(View $view)
    {
        $setting = Setting::first();
        $view->with('site_logo', ($setting && $setting->site_logo ? asset('upload/site_logo/'.$setting->site_logo) : asset('logo.svg')));
    }

}
