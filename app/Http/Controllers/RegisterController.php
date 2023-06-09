<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate the registration form data
        $request->validate([
            'fName' => 'required|string|max:255',
            'lName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'passwordConf' => 'required|same:password',
            
        ]);
        


        // Create a new user in the database
        $user = User::create([
            'fName' => $request->fName,
            'lName' => $request->lName,
            'email' => $request->email,
            'password' => bcrypt($request->password),  
        ]);
        

        // TODO: Perform any additional actions after user registration, such as sending a welcome email

        // Redirect the user to the desired page
        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');

    }
}
