<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;


class NewCaseController extends Controller
{
    public function index()
    {
         //Supporting Document
         //need to review back by Najmi and Iqmal.
        $casetype=null;
        $caserefno='20191018001';
        $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
        'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
        'gender','doc_sts','docsrc','doc_type_oc','f34submitby'];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype])->data;
        $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall')->data;
        $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno])->data;

       
        return view('medical.MedicalServices.general.opinion.newCase.index', compact ('doclist','doclist_select','docinfo','casetype','ref_table'));
    }

    public function postNewCase(Request $request)
    {

        $ms_nc_id = "7";
        $caserefno = "CASEREFNO12121";
        $morefno = "E12019/07";
        $ms_nc_idno = "2232323232323";
        $ms_nc_createby = "AHMAD";
        $ms_nc_updatedate = "20191015";
        $ms_nc_status = "1";
        $ms_nc_spstatus = "1";
        
        
        $url = config('services.endpoint.url');

		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                // 'Authorization' => $token
			],
            'json' => [
               
                "ms_nc_caserefno" => $caserefno,
                "ms_nc_morefno"=> $morefno,
                "ms_nc_idno"=> $ms_nc_idno,
                "ms_nc_reqrefno"=>$request->ms_nc_reqrefno,
                "ms_nc_reqdate"=>$request->ms_nc_reqdate,
                "ms_nc_reqname"=>$request->ms_nc_reqname,
                "ms_nc_reqdesignation"=>$request->ms_nc_reqdesignation,
                "ms_nc_reqemail"=>$request->ms_nc_reqemail,
                "ms_nc_source"=>$request->ms_nc_source,
                "ms_nc_remarks"=>$request->ms_nc_remarks,
                "ms_nc_createby"=>$ms_nc_createby,
                "ms_nc_updatedate"=>$ms_nc_updatedate,
                "ms_nc_status"=>$ms_nc_status,
                "ms_nc_spstatus"=>$ms_nc_spstatus

            ],
        ];
        
        $client = new Client();
        try {
            $response = $client->post($url.'/medicalservices/NewCase',$options)->getBody()->getContents();
            $jsondecode = json_decode($response);

            toast('Successfully created','success');
            return redirect()->back();
        }

        catch (GuzzleHttp\Exception\BadResponseException $e)
        {
            toast('Unsuccessfully created','error');
            return redirect()->back();
        }

    }

    
}
