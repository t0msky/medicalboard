<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class MsQueryController extends Controller
{
    public function index()
    {
        
        
        return view('medical.MedicalServices.noticeAccident.decision');
    }

   
    public function postMsQuery(Request $request)
    { 
        // dd($request->all());
        $ms_que_caserefno = "201909230111";
        $ms_que_morefno = "EI006/2019";
        $ms_que_idno = "950221115432";
        $ms_que_feedback="testing";
        $ms_que_sts="1";
        $ms_que_stsOB="1";

        $originalDate=$request->ms_mcf_currdate;
        $newDate = date("Ymd", strtotime($originalDate));

        $originalDate1=$request->ms_mcf_date;
        $newDate1 = date("Ymd", strtotime($originalDate1));
        
       
        if(!empty($request->ms_que_remarks)){
        foreach($request->ms_que_remarks as $idx=>$list_que) //idx tu simpan number
        {
            // dd($request->ms_que_remarks[$idx]);
            $array_que[]=[ 
                "ms_que_remarks"=>$request->ms_que_remarks[$idx],
                "ms_que_to"=>$request->ms_que_to[$idx]
            ];
        }
    }   else{
        $array_que[]=[   
            "ms_que_remarks"=>null,
            "ms_que_to"=>null
        ];

    }

        //  dd($request->ms_info_answer);
        if(!empty($request->ms_info_req)){
        foreach($request->ms_info_req as $idx=>$list_mcinfo)
        {
            $array_mcinfo[]=[   
                "ms_info_req"=>$request->ms_info_req[$idx],
                "ms_info_answer"=>$request->ms_info_answer[$idx]

            ];
        }
    } else{
        $array_mcinfo[]=[   
            "ms_info_req"=>null,
            "ms_info_answer"=>null

        ];

    }
        // dd($request->ms_rspd_code_id);

        if(!empty($request->ms_rspd_code_id)){
        foreach($request->ms_rspd_code_id as $idx=>$list_doc){
            $array_doc[]=[
                 "ms_rspd_code"=>$request->ms_rspd_code_id[$idx],
                
            ];
        }
    }
    else{
        $array_doc[]=[   
            "ms_rspd_code"=>null

        ];

    }
        // dd($array_doc);
         

        $url = config('services.endpoint.url');
        $token= session('API_token');
		// $endpoint ='http://127.0.0.1:8000/api/letter';
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
			],
            'json' => [
                'ms_que_caserefno' => $ms_que_caserefno,
                'ms_que_morefno' => $ms_que_morefno,
                'ms_que_idno' => $ms_que_idno,
                'ms_que_feedback'=>$ms_que_feedback,
                'ms_que_sts'=>$ms_que_sts,
                'ms_que_stsOB'=>$ms_que_stsOB,
                'ms_mcf_currdate'=>$newDate,
                'ms_mcf_doctor'=>$request->ms_mcf_doctor,
                'ms_mcf_place'=>$request->ms_mcf_place,
                'ms_mcf_contact'=>$request->ms_mcf_contact,
                'ms_mcf_date'=>$newDate1,
                'ms_que' => $array_que,
                'mc_info' => $array_mcinfo,
                'ms_doc' => $array_doc
            ]
        ];
        // dd($options);

        $client = new Client();
        try {
            $response = $client->post($url.'/medicalservices/querycreate',$options)->getBody()->getContents();
            $jsondecode = json_decode($response);

            // dd($jsondecode);
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
