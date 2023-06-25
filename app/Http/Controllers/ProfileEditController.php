<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileEditController extends Controller
{
    //

    public function showProfileEditForm()
    {
        $user = Auth::user();
        return view('profileEdit', compact('user'));
    }
    public function profileEdit(Request $request){
        //validation rules

        $request->validate([
            'fName' =>'required|min:4|string|max:255',
            'lName' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->fName = $request['fName'];
        $user->lName = $request['lName'];
        $user->email = $request['email'];
        $user->save();
        return redirect()->route('profile')->with('message','Profile Updated');
    }
    public function showChangePasswordForm()
    {
        $user = Auth::user();
        return view('changePassword', compact('user'));
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        $user = Auth::user();

        // Check if the current password matches the user's actual password
        if (Hash::check($request->input('current_password'), $user->password)) {
            // Update the user's password
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return redirect()->route('profile')->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    }

    // ...


}

