<?php

namespace App\Http\Controllers\Medical\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use DB;

class BriefcaseMedicalController extends Controller
{
    
	public function index()
    {
    	// $operid = session('loginname');
     //    if ($operid == '')
     //    {
     //        return redirect('/login');
     //    }
        
     //    $idno = session('idno');
     //    if ($idno)
     //    {
     //        return redirect('/home');
     //    }

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['state', 'mb_category','doc_special', 'sidang'],
            ]
        ];

        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

    	$hospital = DB::select('Select * from rf_hospital');
		// $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
		// $medical_board_category1 = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_mbcategory']);
		// $discipline = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_doctor_speciality']);
  //       $session = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_sidang']);

    	return view('medical.medicalboard.briefcase.index',['hospital' => $hospital, 'state' => $content->state, 'medical_board_category1' => $content->mb_category, 'discipline' => $content->doc_special, 'session' => $content->sidang]);
    }
    
}
