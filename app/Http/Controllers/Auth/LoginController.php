<?php

namespace App\Http\Controllers\Auth;
// namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function get(){
        return view("auth.register");
    }

    // public function postlogin(Request $request){
    //     // dd($request->all());
    //     if(Auth::attempt($request->only('email', 'password'))){
    //         return redirect('fitur.dashboard');
    //     }
    //     return redirect('auth.login');
    // }
}
