<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
{
    //
    public function profileEdit(Request $request)
    {
        $user = Auth::user();

        $user->fName = $request->input('fName');
        $user->lName = $request->input('lName');
        $user->email = $request->input('email');
        // Update other fields as needed

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}

