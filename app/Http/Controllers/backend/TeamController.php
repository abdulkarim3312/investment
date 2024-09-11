<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Helpers\UploadHelper;
use Illuminate\Support\Str;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('backend.dashboard.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ]);
        try {
            DB::beginTransaction();
                $team = new Team();
                $team->name = $request->name;
                $team->designation = $request->designation;
                $team->status = $request->status;
                if (!is_null($request->image)) {
                    $team->image = UploadHelper::upload('team_image', $request->image, Str::random(15), 'upload/team_image/');
                }
                $team->save();

            DB::commit();
            session()->flash('success', 'Team has been Inserted successfully !!');
            return redirect()->route('team.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('backend.dashboard.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ]);
        try {
            DB::beginTransaction();
                $team = Team::find($id);
                $team->name = $request->name;
                $team->designation = $request->designation;
                $team->status = $request->status;
                if (!is_null($request->image)) {
                    $team->image = UploadHelper::update('team_image', $request->image, Str::random(15), 'upload/team_image/', $team->image);
                }
                $team->save();

            DB::commit();
            session()->flash('success', 'Team has been Updated successfully !!');
            return redirect()->route('team.index');
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
        $team = Team::find($id);
        if (is_null($team)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('team.index');
        }
        if($team->image){
            UploadHelper::deleteFile('upload/team_image/' . $team->image);
        }

        $team->delete();

        session()->flash('success', 'Team has been deleted successfully!!');
        return redirect()->route('team.index');
    }
}
