<?php

 namespace App\Http\Api\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proposal;

class PdfProposalController extends Controller
{
    public function get(){
        $data_proposal = Proposal::all();
        return response()->json([
            'status' => true,
            'message' => 'Proposal showed',
            'proposal' => $data_proposal,
        ]);
    }
}
