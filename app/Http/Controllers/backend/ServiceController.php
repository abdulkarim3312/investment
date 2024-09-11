<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Helpers\UploadHelper;
use Illuminate\Support\Str;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('backend.dashboard.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'required',
            'icon_image' => 'required',
        ]);
        try {
            DB::beginTransaction();
                $service = new Service();
                $service->title = $request->title;
                $service->slug = Str::slug($request->title);
                $service->short_description = $request->short_description;
                $service->description = $request->description;
                if (!is_null($request->icon_image)) {
                    $service->icon_image = UploadHelper::upload('service_image', $request->icon_image, Str::random(15), 'upload/service_image/');
                }
                if (!is_null($request->image)) {
                    $service->image = UploadHelper::upload('service_image', $request->image, Str::random(15), 'upload/service_image/');
                }
                $service->save();

            DB::commit();
            session()->flash('success', 'Service has been Inserted successfully !!');
            return redirect()->route('services.index');
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
        $showService = Service::find($id);
        return view('backend.dashboard.service.show', compact('showService'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editService = Service::find($id);
        return view('backend.dashboard.service.edit', compact('editService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
        ]);
        try {
            DB::beginTransaction();
                $service = Service::find($id);
                $service->title = $request->title;
                $service->slug = Str::slug($request->title);
                $service->short_description = $request->short_description;
                $service->description = $request->description;
                if (!is_null($request->icon_image)) {
                    $service->icon_image = UploadHelper::update('service_image', $request->icon_image, Str::random(15), 'upload/service_image/', $service->icon_image);
                }
                if (!is_null($request->image)) {
                    $service->image = UploadHelper::update('service_image', $request->image, Str::random(15), 'upload/service_image/', $service->image);
                }
                $service->save();

            DB::commit();
            session()->flash('success', 'Service has been Updated successfully !!');
            return redirect()->route('services.index');
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
        $service = Service::find($id);
        if (is_null($service)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('services.index');
        }
        if($service->icon_image){
            UploadHelper::deleteFile('upload/service_image/' . $service->icon_image);
        }
        if($service->image){
            UploadHelper::deleteFile('upload/service_image/' . $service->image);
        }

        $service->delete();

        session()->flash('success', 'Service has been deleted successfully!!');
        return redirect()->route('service.index');
    }
}
