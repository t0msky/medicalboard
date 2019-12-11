<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;


class noticeController extends Controller
{
    public function index(Request $req)
    {
        $casetype=$req->noticetype;
        $caserefno="201909200003";
        $query = ['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
            'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
            'gender','doc_sts','docsrc','doc_type_oc', 'mc_sts','transport','accdplace','acc_when','optionbank','accd_place',
            'causative','acc_code','indus_code','prof_code','work_sts','caserefno','accdrefno','hus_sts','occupation','ms_reqspdoc'
        ];

        $ref_table = $this->sendRequest('reftable','GET', 'static_options', [], ['ref_code' => $query ]);
        $sendnotification = $this->sendRequest('sendnotification','GET', 'scheme/notification', [], ['caserefno' => $caserefno ])->data;
        $op_category = $this->sendRequest('op_category','GET', 'scheme/OpinionType/'.$caserefno)->data;
        $doclist = $this->sendRequest('doclist','GET', 'common/getdoc', [], ['noticetype' =>$casetype])->data;
        $doclist_select = $this->sendRequest('doclist_select','GET', 'common/getdocall')->data;
        $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno ])->data;
        
        //$op_factcase = $this->sendRequest('GET', 'medicalservices/FactCase/201910230001/1');

        if(!empty($jsoncategory)){

            $jsoncategory=$jsoncategory->data;
        }
       else{
            $jsoncategory=null;
        }

        if(!empty($jsonGetFactCase)){
            $jsonGetFactCase = $jsonGetFactCase->data;
        }
        else{
            $jsonGetFactCase=NULL;
        }

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
        'socso','contrinfo','wages','wagesinfo','state','sendnotification','certificate','preview','emphistory','branch','casetype','infotype','op_category'];

        return view('medical.general.allNotice.index', compact ($datablade));
    
  }

}
