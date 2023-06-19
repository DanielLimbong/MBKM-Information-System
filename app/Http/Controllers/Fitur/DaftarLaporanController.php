<?php

namespace App\Http\Controllers\Fitur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WeeklyReport;

class DaftarLaporanController extends Controller
{
    //
        public function daftarlaporan(){
            $data_laporan = WeeklyReport::all();

        return view("fitur.daftarlaporan", ['data_laporan' => $data_laporan]);
    }
        public function editlaporan($id){
//        $data = WeeklyReport::where('isi_laporan', $id)->first();
            $data = WeeklyReport::find($id);
            // dd($data);
       return view("fitur.editlaporan", compact('data'));
    }

//        public function updateLaporan(Request $request, $id){
////            $data = WeeklyReport::where('isi_laporan', $id)->first();
//            $data = WeeklyReport::find($id);
//            $data->waktu_pelaporan = $request->waktu_pelaporan;
//            $data->isi_laporan = $request->isi_laporan;
//            $data->file_laporan = $request->file_laporan;
//            $dokumen = $request->file('file_laporan');
//            $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('file_laporan')->getClientOriginalExtension();
//
//            $dokumen->move('\public\assets\file_dokumen/', $nama_dokumen);
//            $data->file_laporan = $nama_dokumen;
//        $data->save();
//
//        $request= session();
//        $request->flash('updated', 'Weekly Report Updated');
//
//        return redirect()->route("getDaftarLaporan");
//    }
}
