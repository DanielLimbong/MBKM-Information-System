<?php

namespace App\Http\Controllers\Api\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\WeeklyReport;

class TheWeeklyReport extends Controller
{
    //
     public function postReport(Request $request){
        $validator = Validator::make($request->all(), [
            'waktu_pelaporan' => ['required'],
            'isi_laporan' => ['required'],
            'file_laporan' => [],
        ]);

        $dokumen = $request->file('file_laporan');
        $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('file_laporan')->getClientOriginalExtension();

        // $directory = '\public\assets\file_dokumen';
        $dokumen->move('public\assets\file_dokumen/', $nama_dokumen);
        $ValidatedData['file_laporan'] = $nama_dokumen;
        $request->file_laporan = $nama_dokumen;


        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()
            ], 422);
        }

        $weekly_report = WeeklyReport::create([
            'waktu_pelaporan' => $request->waktu_pelaporan,
            'isi_laporan' => $request->isi_laporan,
            'file_laporan' => $request->file_laporan,
        ]);

       return response()->json([
        'status' => true,
        'message' => 'Weekly Report created successfully',
        'weekly_report' => $weekly_report,
       ]);
    }
}
