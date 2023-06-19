<?php

namespace App\Http\Controllers\Fitur;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function get(){
        return view("fitur.dashboard");
    }

    public function getName(){
        // $users = User::all();
        // return $users['username'];
        $data = DB::table('User')->get();
        
        return view('/fitur/dashboard', $data);
    }
}
