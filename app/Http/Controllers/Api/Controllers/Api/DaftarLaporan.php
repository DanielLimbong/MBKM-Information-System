<?php

namespace App\Http\Controllers\Api\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WeeklyReport;
use Illuminate\Http\Request;

class DaftarLaporan extends Controller
{
    //
        public function daftarlaporan(){
        $data_laporan = WeeklyReport::all();
        return response()->json([
            'status' => true,
            'message' => 'Proposal showed',
            'proposal' => $data_laporan,
        ]);
    }
}
