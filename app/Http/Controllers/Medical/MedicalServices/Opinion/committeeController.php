<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class committeeController extends Controller
{
    public function index(Request $req)
    {
          //Supporting Document
         //need to review back by Najmi and Iqmal.
         $casetype=1;
         $caserefno='20191018001';
         $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
         'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','opinion_type',
         'gender','doc_sts','docsrc','doc_type_oc','f34submitby','ivattendees'];
 
         $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
         $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype]);
         $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall');
         $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno]);
 
        $casetype=$req->noticetype;

        //Preview Scheme
        $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);

        $obprofile = $this->sendRequest('Ob Information','GET', 'scheme/obprofile', [], ['caserefno'=>$caserefno ]);
        $ilatinfo=$this->sendRequest('Ilat Information','GET','scheme/ilatInfo/'.$caserefno);
        $emphistory = $this->sendRequest('Employment History','GET', 'scheme/emphistory',[],['caserefno' => $caserefno]);
        $wages = $this->sendRequest('Wages','GET', 'scheme/getspiwages',[],['caserefno' => $caserefno]);
        $socso = $this->sendRequest('Socso','GET', 'scheme/socso', [], ['caserefno' => $caserefno ]);
        $certificate = $this->sendRequest('Certificate','GET', 'scheme/certificate', [], ['caserefno' => $caserefno ]);
        $bankinfo = $this->sendRequest('Bank Information','GET', 'scheme/bankinfo', [], ['caserefno' => $caserefno ]);
        $confirmation = $this->sendRequest('Confirmation','GET', 'scheme/getconfirmation',[], ['caserefno' => $caserefno ]);
       
        $doclist=$this->Checking($doclist);
        $doclist_select=$this->Checking($doclist_select);
        $docinfo=$this->Checking($docinfo);
        $ilatinfo=$this->Checking($ilatinfo);
        
        $bankinfo =$this->Checkingerrorcode($bankinfo);
        $obprofile=$this->CheckingRecord($obprofile);
        $socso=$this->Checkingerrorcode($socso);
        $ilatinfo=null;
        $emphistory=$this->CheckingRecord($emphistory);
        $certificate=$this->Checkingerrorcode($certificate);
        $confirmation=$this->CheckingRecord($confirmation);
        $wages=$this->CheckingRecord($wages);

		if(!empty($state)||$state!=null){
			$state=$state->state_branch;
		} else {
			$state=null;
		}
    
        $datablade=['ref_table','doclist_select','doclist','obprofile', 'bankinfo','docinfo','ilatinfo','confirmation','remark',
        'socso','contrinfo','wages','wagesinfo','state','sendnotification','certificate','preview','emphistory','branch','casetype','infotype'];
        return view('medical.MedicalServices.general.committee.index', compact ($datablade));
    }

   

}
