<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;
use App\Models\WeeklyReport;
use Illuminate\Http\Request;

class WeeklyReportController extends Controller
{
    public function get(){
        return view("fitur.weeklyreport");
    }
     public function postReport(Request $request){
        $ValidatedData = $request->validate([
            'waktu_pelaporan' => ['required'],
            'isi_laporan' => ['required'],
            'file_laporan' => ['mimes:pdf, doc, docx'],
        ]);

        $dokumen = $request->file('file_laporan');
        $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('file_laporan')->getClientOriginalExtension();

        $dokumen->move('\public\assets\file_dokumen/', $nama_dokumen);
        $ValidatedData['file_laporan'] = $nama_dokumen;

        // dd($ValidatedData);
        WeeklyReport::create($ValidatedData);

        $request= session();
        $request->flash('created', 'Weekly Report Created');

        return redirect()->route("getWeeklyReport");
    }
}
