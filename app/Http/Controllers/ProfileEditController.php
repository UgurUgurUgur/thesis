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

}

