<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proposal;

class DownloadProposalController extends Controller
{
    public function get(){
        return view("fitur.downloadproposal");
    }

    public function postProposal(Request $request){
        $ValidatedData = $request->validate([
            // 'name' => ['{{ auth()->user()->name }}'],
            'name' => ['required'],
            // 'email' => ['{{ auth()->user()->email }}'],
            'email' => ['required'],
            'nama_kegiatan' => ['required'],
            'bentuk_kegiatan' => ['required'],
            'penyelenggara' => ['required'],
            'kredit' => ['required'],
            'kedudukan_penyelenggara' => ['required'],
            'deskripsi_umum' => ['required'],
            'rekognisi' => ['required'],
            'batas_akhir_pendaftaran' => ['required'],
            'tanggal_mulai_pelaksanaan' => ['required'],
            'tanggal_akhir_pelaksanaan' => ['required'],
            'model_pelaksanaan' => ['required'],
            'metode_pelaksanaan' => ['required'],
            'persyaratan' => ['required'],
        ]);

        // dd($ValidatedData);
        Proposal::create($ValidatedData);

        $request= session();
        $request->flash('created', 'Proposal Created');

        return redirect()->route("getDownloadProposal");
    }

    public function editProposal(Request $request, $id){
        $data = Proposal::where('nama_kegiatan', $id)->first();

        return view('editProposal', compact('data'));
    }

    // public function updateProposal(Request $request, $id){
    //     $data = Proposal::where('nama_kegiatan', $id)->first();
    //         $data->name = $request->name;
    //         $data->email = $request->email;
    //         $data->nama_kegiatan = $request->nama_kegiatan;
    //         $data->bentuk_kegiatan = $request->bentuk_kegiatan;
    //         $data->penyelenggara = $request->penyelenggara;
    //         $data->kredit = $request->kredit;
    //         $data->kedudukan_penyelenggara = $request->kedudukan_penyelenggara;
    //         $data->deskripsi_umum = $request->deskripsi_umum;
    //         $data->rekognisi = $request->rekognisi;
    //         $data->batas_akhir_pendaftaran = $request->batas_akhir_pendaftaran;
    //         $data->tanggal_mulai_pelaksanaan = $request->tanggal_mulai_pelaksanaan;
    //         $data->tanggal_akhir_pelaksanaan = $request->tanggal_akhir_pelaksanaan;
    //         $data->model_pelaksanaan = $request->model_pelaksanaan;
    //         $data->metode_pelaksanaan = $request->metode_pelaksanaan;
    //         $data->persyaratan = $request->persyaratan;
    //     $data->save();
    // }
}
