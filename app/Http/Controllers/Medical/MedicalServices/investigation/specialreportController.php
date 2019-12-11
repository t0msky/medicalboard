<?php

namespace App\Http\Controllers\Medical\MedicalServices\investigation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Scheme\NewClaim\CommonController;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class specialreportController extends Controller
{

    public function abpppaobppp()
    {

        //Supporting Document
         //need to review back by Najmi and Iqmal.
         $casetype=1;
         $caserefno='20191018001';
        $userroles=session('user_roles');
         $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
         'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
         'gender','doc_sts','docsrc','doc_type_oc','f34submitby'];
 
         $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
         $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype])->data;
         $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall')->data;
         $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno])->data;

        $quotation = $this->getQuotation();

        if($userroles [0] == 'ABPPP'){
            return view('medical.MedicalServices.Investigation.specialReport.abppp.index', compact ('doclist','doclist_select','docinfo','casetype','ref_table','quotation'));
        }elseif($userroles [0] == 'AOBPPP'){
            return view('medical.MedicalServices.Investigation.specialReport.aobppp.index');
        }else{
            toast('You dont have access.','error');
			return redirect()->route('workbasket');
        }
        
    }

      public function postQuotation(Request $req)
      {

        $caserefno = '201909230091';
        $morefno = 'EI001/2019';
        $indo = '790120053243';
        $currdate = '14112019';
        // $recommend = 'hahahahhhhhhhhhhhhhhhhhhhh';
        // $justification = 'aaaaaaaaaaaaaaaaaaa';
        // $action = 'y';
        $create_by = 'MOEI';
        // $update_date = 'lklklklk';
        // $status = 'w';
        
        $client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
                'Authorization' => $token,
                'Accept'=>'application/json',
                'Content-type'=>'application/json'
            ],   
            'json' => [
				'ms_quo_caserefno' =>$caserefno,
				'ms_quo_morefno' =>$morefno,
				'ms_quo_idno' => $indo,
                'ms_quo_invtype' => $req->invtype,
                'ms_quo_currdate' => $req->currdate,
                'ms_quo_place' => $req->place1.','.$req->place2.','.$req->place3,
                'ms_quo_state' => $req->state,
                'ms_quo_city' => $req->city,
                'ms_quo_postcode' => $req->postcode,
                'ms_quo_recommend' => $req->recommend,
                'ms_quo_remark' => $req->remark,
                'ms_quo_justification' => $req->justification,
                'ms_quo_action' => $req->action,
                'ms_quo_createby' => $req->create_by,
                'ms_quo_updateby' => $req->update_date,
                'ms_quo_status' => $req->status,
			]
        ];

        try {
            $response = $client->post($url.'/medicalservices/quotation', $options)->getBody();
            $content = json_decode($response->getContents());

            toast('Successfully Insert','success');
            return redirect()->back();
        } 
        catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Unsuccessfully Insert','error');
            return redirect()->back();
        }
        
      }

      public function getQuotation()
      {

        $caserefno='20103928172';
       
        $client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $token
            ],   
          
        ];
        
        $response = $client->get($url.'/medicalservices/quotationShow/'.$caserefno, $options)->getBody();
        // dd($response);
        $jsonquotation = json_decode($response->getContents());
        
        // dd($jsonquotation->data[0]);
        if(!empty($jsonquotation)){
            
            $jsonquotation=$jsonquotation;
            
            return $jsonquotation->data[0];
        }
        else{
            $jsonquotation=null;
            return $jsonquotation;
        }
        }
      }
