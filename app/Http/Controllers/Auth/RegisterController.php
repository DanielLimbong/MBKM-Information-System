<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;

class RegisterController extends Controller
{
    public function get(){
        return view("auth.register");
    }

    public function store(Request $request){
        $ValidatedData = $request->validate([
            'name' => ['required'],
            'username' => ['required', 'min:12', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);
        // dd('Account Registered!');
        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        // dd($ValidatedData);
        User::create($ValidatedData);

        $request= session();
        $request->flash('success', 'Registration Successful!');

        return redirect()->route("getLogin");
    }
}
