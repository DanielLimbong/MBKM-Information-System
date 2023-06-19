<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use session;

class TheLoginController extends Controller
{
public function login()
    {
        if (Auth::check()) {
            return redirect('welcome');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
      $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required']
      ]);

      if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/d');
      }

      return back()-> with('loginError', 'Login Failed!');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function get(){
        return view("auth.login");
    }
}
