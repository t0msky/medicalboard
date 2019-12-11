<?php

namespace App\Http\Controllers\Medical\MedicalServices;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class InvestigationAppointmentController extends Controller
{
    public function index()
    {
        return view('medical.MedicalServices.Investigation.ABPPP_INTERNAL.set_appointment');
    }

   
    public function postAppointment(Request $request)
    {
 
        foreach($request->ms_mia_date as $idx=>$lists) //idx tu simpan number
        {
            $array_list[]=[
                "ms_mia_caserefno"=>"201909230111",
                "ms_mia_morefno"=>"EI006/2019",
                "ms_mia_idno"=>"950221115432",
                "ms_mia_date"=>$request->ms_mia_date[$idx],
                "ms_mia_time"=>$request->ms_mia_time[$idx],
                "ms_mia_place"=>$request->ms_mia_place[$idx],
                "ms_mia_docname"=>$request->ms_mia_docname[$idx],
                "ms_mia_createby"=>"abu",
                "ms_mia_status"=>"1"
            ];
        }
        // dd($array_list);
        // $ms_mia_id="1";
        // dd($list);
        // $ms_mia_date = strlen($request->ms_mia_date);
        $url = config('services.endpoint.url');
        // $token= session('API_token');
		// $endpoint ='http://127.0.0.1:8000/api/letter';
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                // 'Authorization' => $token
			],
            'json' => [
                'list'=>$array_list
            

            ],
        ];
        // dd($options);
        $client = new Client();
        try {
            $response = $client->post($url.'/medicalservices/InvAppt',$options)->getBody()->getContents();
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

        // return $jsondecode;

    }

    
}
