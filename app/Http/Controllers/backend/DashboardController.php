<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public $user;

    public function dashboard(){
        return view('backend.dashboard.index');
    }

    public function profilePage()
    {
        $userData = User::first();
        return view('backend.common.profiles.index', compact('userData'));
    }

    public function updateUserDetails(Request $request)
    {
        $request->validate([
            'email'  => 'required|email',
            'name' => 'required|string|max:255',
        ]);
        $this->user = DB::table('users')->first();
        $user = User::find($this->user->id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        session()->flash('success', 'Details has been updated successfully !!');
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password'  => 'required|min:8',
            'password' => 'confirmed|min:6|different:old_password'
        ]);

        $this->user = DB::table('users')->first();
        if (Hash::check($request->old_password, $this->user->password)) {
            $user = User::find($this->user->id);
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json(['success' => true, 'message' => 'Password has been updated successfully !!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Old Password is incorrect !!'], 200);
        }
    }
}
