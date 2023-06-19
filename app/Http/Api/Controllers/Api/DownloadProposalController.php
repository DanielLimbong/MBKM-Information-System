<?php

 namespace App\Http\Api\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DownloadProposalController extends Controller
{
    public function postProposal(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
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

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()
            ], 422);
        }

        $proposal = Proposal::create([
            'name' => $request->name,
            'email' => $request->email,
            'nama_kegiatan' => $request->nama_kegiatan,
            'bentuk_kegiatan' => $request->bentuk_kegiatan,
            'penyelenggara' => $request->penyelenggara,
            'kredit' => $request->kredit,
            'kedudukan_penyelenggara' => $request->kedudukan_penyelenggara,
            'deskripsi_umum' => $request->deskripsi_umum,
            'rekognisi' => $request->rekognisi,
            'batas_akhir_pendaftaran' => $request->batas_akhir_pendaftaran,
            'tanggal_mulai_pelaksanaan' => $request->tanggal_mulai_pelaksanaan,
            'tanggal_akhir_pelaksanaan' => $request->tanggal_akhir_pelaksanaan,
            'model_pelaksanaan' => $request->model_pelaksanaan,
            'metode_pelaksanaan' => $request->metode_pelaksanaan,
            'persyaratan' => $request->persyaratan,
        ]);
        // $token = Auth::login($user);
        return response()->json([
            'status' => true,
            'message' => 'Proposal created successfully',
            'proposal' => $proposal,
            'authorisation' => [
                // 'token' => $token,
                'type' => 'bearer',
            ]
            ]);
    }
}
