<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class home extends Controller
{
    public function home() {

        // $slider = DB::table('slider')->get();
        // $cats = DB::table('category')->limit(7)->get();
        // $productCat = DB::table('category')->get();
        return view('frontend.home.homepage');

    }
}
