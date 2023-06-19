<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    //
    public function getProfile(){
        return view("fitur.profileuser");
    }
}
