<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Helpers\UploadHelper;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('backend.dashboard.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'image' => 'required'
        ]);

        try {
            DB::beginTransaction();
                $blog = new Blog();
                $blog->title = $request->title;
                $blog->user_id = session()->get('authId');
                $blog->slug = Str::slug($request->title);
                $blog->short_description = $request->short_description;
                $blog->description = $request->description;
                $blog->status = $request->status;
                if (!is_null($request->image)) {
                    $blog->image = UploadHelper::upload('blog_image', $request->image, Str::random(15), 'upload/blog_image/');
                }
                $blog->save();

            DB::commit();
            session()->flash('success', 'Blog has been Inserted successfully !!');
            return redirect()->route('blog.index');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::find($id);
        return view('backend.dashboard.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('backend.dashboard.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
        ]);
        try {
            DB::beginTransaction();
                $blog = Blog::find($id);
                $blog->title = $request->title;
                $blog->user_id = session()->get('authId');
                $blog->slug = Str::slug($request->title);
                $blog->short_description = $request->short_description;
                $blog->description = $request->description;
                $blog->status = $request->status;
                if (!is_null($request->image)) {
                    $blog->image = UploadHelper::update('blog_image', $request->image, Str::random(15), 'upload/blog_image/', $blog->image);
                }
                $blog->save();

            DB::commit();
            session()->flash('success', 'Blog has been Updated successfully !!');
            return redirect()->route('blog.index');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if (is_null($blog)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('blog.index');
        }
        if($blog->image){
            UploadHelper::deleteFile('upload/blog_image/' . $blog->image);
        }

        $blog->delete();

        session()->flash('success', 'Blog has been deleted successfully!!');
        return redirect()->route('blog.index');
    }
}
