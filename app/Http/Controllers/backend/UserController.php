<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id', 'desc')->get();
        return view('backend.dashboard.users.index', compact('user'));
    }

    public function create()
    {
        return view('backend.dashboard.users.create');
    }

    public function store(Request $request)
    {
        session()->flash('success', 'New User has been created successfully !!');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        return 'Edit Page';
    }

    public function update(Request $request, $id)
    {
        session()->flash('success', 'User has been Updated successfully !!');
        return redirect()->route('users.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Show Page';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->flash('success', 'User has been deleted permanently !!');
        return redirect()->back();
    }
}
