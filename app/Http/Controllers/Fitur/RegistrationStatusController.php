<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;

class RegistrationStatusController extends Controller
{
    public function get(){
        return view("fitur.registrationstatus");
    }
}
