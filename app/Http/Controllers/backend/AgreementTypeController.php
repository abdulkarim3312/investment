<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AgreementType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgreementTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = AgreementType::get();
        return view('backend.dashboard.agreement_type.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.agreement_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        try {
            DB::beginTransaction();
                $type = new AgreementType();
                $type->name = $request->name;
                $type->status = $request->status;
                $type->save();

            DB::commit();
            session()->flash('success', 'Agreement Type Inserted successfully !!');
            return redirect()->route('agreement.index');
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
        $editType = AgreementType::find($id);
        return view('backend.dashboard.agreement_type.edit', compact('editType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        try {
            DB::beginTransaction();
                $type = AgreementType::find($id);
                $type->name = $request->name;
                $type->status = $request->status;
                $type->save();

            DB::commit();
            session()->flash('success', 'Agreement Type Updated successfully !!');
            return redirect()->route('agreement.index');
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
        $type = AgreementType::find($id);
        if (is_null($type)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('agreement.index');
        }
        $type->delete();
        session()->flash('success', 'Agreement Type deleted successfully!!');
        return redirect()->route('agreement.index');
    }
}
