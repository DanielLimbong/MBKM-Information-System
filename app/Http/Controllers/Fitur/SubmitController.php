<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;

class SubmitController extends Controller
{
    public function get(){
        return view("fitur.submit");
    }
}
