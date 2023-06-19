<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;
use App\Models\WeeklyReport;
use Illuminate\Http\Request;

class MyactivityController extends Controller
{
    public function get(){
        return view("fitur.myactivity");
    }
}
