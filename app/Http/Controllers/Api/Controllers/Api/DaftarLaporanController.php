<?php

namespace App\Http\Controllers\Api\Controllers\Api;

use App\Models\WeeklyReport;

class DaftarLaporanController 
{
         public function daftarlaporan(){
            $data_laporan = WeeklyReport::all();

        return view("fitur.daftarlaporan", ['data_laporan' => $data_laporan]);
    }
}
