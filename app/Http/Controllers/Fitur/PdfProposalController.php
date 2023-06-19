<?php

namespace App\Http\Controllers\Fitur;

use App\Http\Controllers\Controller;
use App\Models\Proposal;

use Illuminate\Http\Request;

class PdfProposalController extends Controller
{
    public function get(){
        $data_proposal = Proposal::all();
        return view("fitur.pdfproposal", ['data_proposal' => $data_proposal]);
    }

}
