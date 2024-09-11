<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class product extends Controller
{
    public function manageProducts(){

        $pdt = DB::table('product')->get();
        return view('backend.product.view' , compact('pdt'));

    }


    public function addProduct() {
        $cats = DB::table('category')->get();
        return view('backend.product.add' , compact('cats'));
    }


    public function uploadProduct(Request $req){

        $src = $req->photo;
        $path = '/data/backend/product/';
        $name = time() . '.' . $src->extension();
        $src->move(public_path($path), $name);

        $filePath = $path.$name;

        $add = DB::table('product')->insert([
            'auth_id' => session()->get('authId'),
            'title' => $req->title,
            'photo' => $filePath,
            'catId' => $req->catId,
            'sku' => $req->sku,
            'tag' => $req->tag,
            'short_desk' => $req->sDsk,
            'long_desk' => $req->lDsk,
            'stock' => $req->stock,
            'price' => $req->price,
            'discount' => $req->discount,
        ]);

        if ($add) {
            return redirect('/manageProducts');
        }else{
            return back();
        }

    }



    public function editProduct($id) {

        $cats = DB::table('category')->get();
        $pdt = DB::table('product')->where('id' , $id)->first();
        return view('backend.product.edit' , compact('cats' , 'pdt'));

    }



    public function updateProduct(Request $req) {

        $data = DB::table('product')->where('id', $req->id)->first();
        if (empty($req->photo)) {
            $filePath = $data->photo;
        }else{
            unlink(public_path().$data->photo);
            $src = $req->photo;
            $path = '/data/backend/product/';
            $name = time() . '.' . $src->extension();
            $src->move(public_path($path), $name);
            $filePath = $path.$name;
        }

        $add = DB::table('product')->where('id' , $req->id)
        ->update([
            'auth_id' => session()->get('authId'),
            'title' => $req->title,
            'photo' => $filePath,
            'catId' => $req->catId,
            'sku' => $req->sku,
            'tag' => $req->tag,
            'short_desk' => $req->sDsk,
            'long_desk' => $req->lDsk,
            'stock' => $req->stock,
            'price' => $req->price,
            'discount' => $req->discount,
        ]);


        if ($add) {
            return redirect('/manageProducts');
        }else{
            return back();
        }

    }



    public function deleteProduct($id) {
        $dlt = DB::table('product')->where('id', $id)->first();
        unlink(public_path().$dlt->photo);
        DB::table('product')->where('id', $id)->delete();
        return redirect('manageProducts');
    }


}
