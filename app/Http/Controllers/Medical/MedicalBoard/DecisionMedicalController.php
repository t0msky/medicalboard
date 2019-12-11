<?php

namespace App\Http\Controllers\Medical\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use DB;

class DecisionMedicalController extends Controller
{
    
	public function index()
    {
    	

        $countPanel = 3;

        return view('medical.MedicalBoard.information.general.indexPanel',['countPanel' => $countPanel]);
    }

    public function jd_ilat()
    {

        return view('medical.MedicalBoard.decision.decision_JD_ilat');
    }
    public function jd_rayuan_huk()
    {

        return view('medical.MedicalBoard.decision.decision_rayuan_huk');
    }
    public function jd_rayuan_od()
    {

        return view('medical.MedicalBoard.decision.decision_rayuan_od');
    }
    //added by ayu 4-10-2019
    public function huk_seksyen32()
    {

        return view('medical.MedicalBoard.decision.disclaimerHuk');
    }

    public function preview_huk()
    {

        return view('medical.MedicalBoard.decision.preview_huk');
    }

    //added date 18-10-2019
    public function tnc_ilat()
    {

        return view('medical.MedicalBoard.decision.tnc_ilat');
    }
    public function successPK(Request $req)
    {
        //dd(session()->all());
        // $json = [
        //     'caserefno' => session('ids')['caserefno'],
        //     'casetype' => session('ids')['casetype'],
        //     'uniquerefno' => session('uniquerefno'),
        //     'flow' => (int)$req->submit,
        // ];

        // $submission = $this->sendRequest('Success', 'GET', 'common/submission', $json);

        // if (isset($submission->data) && $submission->data->Status == 0) {
        //     toast('Data Your files has been successfully added', 'success');
        // } else {
        //     toast($submission->data->Message, 'failed');
        // }

        // return redirect()->route('workbasket');
        return view('medical.MedicalBoard.decision.success');
    }



}
