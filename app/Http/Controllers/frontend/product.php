<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class product extends Controller
{
    public function productView($id) {

            $pdt = DB::table('product')->where('id' , $id)->first();
            $sm = DB::table('product')->where('catId' , $pdt->catId)->limit(5)->get();
            return view('frontend.product.productview' , compact('pdt' , 'sm'));

    }


    public function searchProduct(Request $req){

        $pdts = DB::table('product')
       ->where('title','LIKE',"%$req->id%")
       ->orwhere('tag','LIKE',"%$req->id%")
       ->get(['id' , 'photo' , 'title' , 'price' , 'discount']);

       if (count($pdts) > 0) {
            return view('frontend.product.productSearchTamplate' , compact('pdts'));
       }else{
        echo "<h6 style='color:red'> <center> No Data Found Like <b style='color:blue'>".'"'. $req->id .'"'."</b> </center> </h6>";
       }



    }


}
