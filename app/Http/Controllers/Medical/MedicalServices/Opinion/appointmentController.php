<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Scheme\NewClaim\CommonController;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class appointmentController extends Controller
{
    public function index(Request $req)
    { 
        //Supporting Document
        //need to review back by Najmi and Iqmal.
       $casetype=null;
       $caserefno='20191018001';

       $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
       'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
       'gender','doc_sts','docsrc','doc_type_oc','f34submitby','ms_reqspdoc'];

       $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
       $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype])->data;
       $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall')->data;
       $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno])->data;

        return view('medical.MedicalServices.opinion.abppp.appointment.index', compact ('doclist','doclist_select','docinfo','casetype','ref_table'));
    }

    
}