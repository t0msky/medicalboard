<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;


class specialreportabpppController extends Controller
{
    public function index()
    {
         //Supporting Document
         //need to review back by Najmi and Iqmal.
        $casetype=1;
        $caserefno='20191018001';
        $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
        'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
        'gender','doc_sts','docsrc','doc_type_oc','f34submitby'];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype])->data;
        $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall')->data;
        $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno])->data;

        $casetype="1";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');

        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
                'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
                'gender','doc_sts','docsrc','doc_type_oc', 'mc_sts','transport','accdplace','acc_when','optionbank','accd_place',
                'causative','acc_code','indus_code','prof_code','work_sts','caserefno','accdrefno','hus_sts','occupation']

            ]
            
        ];

        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());
        $jsonquotation = $this->getQuotation();
        // dd(explode(",",$jsonquotation->ms_quo_place));
        return view('medical.MedicalServices.investigation.specialReport.abppp.index', compact ('jsonquotation','quotation','doclist','doclist_select','docinfo','casetype','ref_table'));

    }

    //INVOICE SPECIAL REPORT ABPPP

    public function indexSpecialReportAbppp(Request $req){

        $jsonquotation = $this->getQuotation();

        if ($req->action == 'Preview')
        {
            return view('medical.MedicalServices.Investigation.specialReport.abppp.preview',['quotation'=>$jsonquotation,]);
        }
        return view('medical.MedicalServices.Investigation.specialReport.abppp.index');

    }

    //INVESTIGATION INTERNAL ABPPP
    public function indexInternalAbppp()
    {
        return view('medical.MedicalServices.Investigation.internalDocument.abppp.index');
    }

    public function postQuotation(Request $req){

        $caserefno = '201909230091';
        $morefno = '2020202';
        $indo = '78787';
        // $currdate = '20/2/19';
        // $recommend = 'hahahahhhhhhhhhhhhhhhhhhhh';
        // $justification = 'aaaaaaaaaaaaaaaaaaa';
        // $action = 'y';
        // $create_by = 'ssssssssssss';
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
// dd($options);
        try {
            $response = $client->post($url.'/medicalservices/quotation', $options)->getBody();
            $content = json_decode($response->getContents());
// dd($content);

            toast('Successfully Insert','success');
            return redirect()->back();
        } 
        catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Unsuccessfully Insert','error');
            return redirect()->back();
        }
        
    }

    public function getQuotation(){

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
