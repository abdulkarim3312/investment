<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqHeaderSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        session()->flash('success', 'Faq has been Inserted successfully !!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Faq::find($id);
        return view('backend.dashboard.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq = Faq::find($id);
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        session()->flash('success', 'Faq has been Updated successfully !!');
        return redirect()->route('faq_add');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function faqHeaderAdd(){
        $faqHeader = FaqHeaderSection::first();
        $faqs = Faq::orderBy('id', 'desc')->get();
        return view('backend.dashboard.faq.header.add', compact('faqHeader','faqs'));
    }
    public function faqHeaderUpdate(Request $request){

        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
        ]);

        $check = FaqHeaderSection::first();
        if($check){
            $imageName = $check->image;
            if($request->hasFile('image')){
                if (file_exists('upload/faq_header/'.$check->image)) {
                    unlink('upload/faq_header/'.$check->image);
                }
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('upload/faq_header'), $imageName);
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
                $request->image->move(public_path('upload/faq_header'), $imageName);
            }
            FaqHeaderSection::create([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'image' => $imageName,
            ]);
        }
        session()->flash('success', 'Faqs Header updated successfully !!');
        return redirect()->back();
    }
}
