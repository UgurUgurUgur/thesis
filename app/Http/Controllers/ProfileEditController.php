<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
{
    //

    public function showProfileEditForm()
    {
        $user = Auth::user();
        return view('profileEdit', compact('user'));
    }
    public function profileEdit(Request $request)
{
    // Validate the login form data
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = Auth::user();

    $user->fName = $request->input('fName');
    $user->lName = $request->input('lName');
    $user->email = $request->input('email');
    // Update other fields as needed

    $user->save();  

    return redirect()->route('profile')->with('success', 'Profile updated successfully.');
}

}

