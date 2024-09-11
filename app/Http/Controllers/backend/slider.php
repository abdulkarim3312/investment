<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class slider extends Controller
{
    public function manageSlider() {

        $slider = DB::table('slider')->get();
        return view('backend.slider.view' , compact('slider'));

    }


    public function addSlider(){
        
        return view('backend.slider.add');

    }


    public function uploadSlide(Request $req) {

        $src = $req->slider;
        $path = '/data/backend/slider/';
        $name = time() . '.' . $src->extension();
        $src->move(public_path($path), $name);

        $filePath = $path.$name;

        $add = DB::table('slider')->insert([
            'auth_id' => session()->get('authId'),
            'photo' => $filePath
        ]);

        if ($add) {
            return redirect('/manageSlider');
        }else{
            return back();
        }

    }


    public function deleteSlider($id){
        $dlt = DB::table('slider')->where('id', $id)->first();
        unlink(public_path().$dlt->photo);
        DB::table('slider')->where('id', $id)->delete();
        return redirect('manageSlider');
    }


}
