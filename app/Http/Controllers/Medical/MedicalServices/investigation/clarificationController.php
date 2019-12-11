<?php

namespace App\Http\Controllers\Medical\MedicalServices\investigation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Scheme\NewClaim\CommonController;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class clarificationController extends Controller
{
   public function acppaocpp(){

      $ids=session('ids');

      $caserefno = "201909230111";
      $casetype = 1;
      $userroles = session('user_roles');
      $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
      'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
      'gender','doc_sts','docsrc','doc_type_oc','f34submitby'];

      $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);

      $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
      $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype])->data;
      $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall')->data;
      $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno])->data;
      $invoice = $this->sendRequest('invoice','GET', 'medicalservices/invoices',['ms_inv_caserefno' => $caserefno])->data;

      $datablade=['ref_table','doclist','doclist_select','docinfo','invoice'];

      if($userroles [0] == 'AOCPPP'){
         return view('medical.MedicalServices.Investigation.clarification.aocpp.index',compact($datablade));
      }elseif ($userroles [0] == 'ACPP'){
         return view('medical.MedicalServices.Investigation.clarification.acpp.index');
      }else{
         toast('You dont have access.','error');
      return redirect()->route('workbasket');
     }
   }

}