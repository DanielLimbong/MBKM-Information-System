<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function get(){
        return view("fitur.program");
    }
}
