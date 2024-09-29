<?php

namespace App\Http\Controllers\backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\AgreementProcedure;
use App\Models\AgreementType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgreementProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = AgreementProcedure::get();
        return view('backend.dashboard.agreement_procedure.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = AgreementType::get();
        return view('backend.dashboard.agreement_procedure.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        try {
            DB::beginTransaction();
                $type = new AgreementProcedure();
                $type->type_id = $request->type_id;
                $type->description = $request->description;
                $type->status = $request->status;
                if (!is_null($request->image)) {
                    $type->image = UploadHelper::upload('agreement_image', $request->image, Str::random(15), 'upload/agreement_image/');
                }
                $type->save();

            DB::commit();
            session()->flash('success', 'Agreement Procedure Inserted successfully !!');
            return redirect()->route('agreement-procedure.index');
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
        $agreement = AgreementProcedure::find($id);
        return view('backend.dashboard.agreement_procedure.show', compact('agreement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type = AgreementType::get();
        $editType = AgreementProcedure::find($id);
        return view('backend.dashboard.agreement_procedure.edit', compact('type','editType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type_id' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        try {
            DB::beginTransaction();
                $type = AgreementProcedure::find($id);
                $type->type_id = $request->type_id;
                $type->description = $request->description;
                $type->status = $request->status;
                if (!is_null($request->image)) {
                    $type->image = UploadHelper::update('agreement_image', $request->image, Str::random(15), 'upload/agreement_image/', $type->image);
                }
                $type->save();

            DB::commit();
            session()->flash('success', 'Agreement Procedure Updated successfully !!');
            return redirect()->route('agreement-procedure.index');
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
        $type = AgreementProcedure::find($id);
        if (is_null($type)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('agreement.index');
        }
        $type->delete();
        session()->flash('success', 'Agreement Procedure deleted successfully!!');
        return redirect()->route('agreement.index');
    }
}
