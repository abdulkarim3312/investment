<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\SliderSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sliderSectionAdd(){
        $sliderTitle = SliderSection::first();
        return view('backend.dashboard.pages.index', compact('sliderTitle'));
    }

    public function sliderSectionStore(Request $request){
        $request->validate([
            'title' => 'required'
        ]);

        $check = SliderSection::first();
        if($check){
            $check->update([
                'title' => $request->title,
            ]);
        }else{
            SliderSection::create([
                'title' => $request->title,
            ]);
        }
        session()->flash('success', 'Slider Section has been updated successfully !!');
        return redirect()->back();
    }

    public function aboutUsAdd(){
        $aboutUs = AboutUs::first();
        return view('backend.dashboard.about_us.add', compact('aboutUs'));
    }

    public function aboutUsAddStore(Request $request){

        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
        ]);

        $check = AboutUs::first();
        if($check){
            $imageName = $check->image;
            if($request->hasFile('image')){
                if (file_exists('upload/about_us/'.$check->image)) {
                    unlink('upload/about_us/'.$check->image);
                }
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('upload/about_us'), $imageName);
            }
            $check->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'image' => $imageName,
            ]);
        }else{
            $imageName = '';
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('upload/about_us'), $imageName);
            }
            AboutUs::create([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'image' => $imageName,
            ]);
        }
        session()->flash('success', 'About Us has been updated successfully !!');
        return redirect()->back();
    }
}
