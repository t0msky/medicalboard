<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use DB;
use Cookie;
use Response;
use Mail;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class RecommendController extends Controller
{
    //
    public function index(){
        return view('medical.MedicalServices.noticeAccident.medical_opinion');
    }

    public function postRecommend(Request $request){


        // dd($request->all());

        $ms_rc_id = "6";
        $ms_rc_caserefno = "x";
        $ms_rc_morefno = "x";
        $ms_rc_idno = "x";
        $ms_rc_ESSA = "y";
        $ms_rc_status = "1";
        $ms_rc_requestor = "1";
        // $endpoint ='http://127.0.0.1:8000/api/letter';

      

        foreach($request->ms_rc_diagnosis as $idx=>$diagnosis)
        {
            $ms[]=[
                'ms_rc_diagnosis'=>$diagnosis
            ];
        }
        
        $options = [
			
                'ms_rc_id' => $ms_rc_id,
                'ms_rc_caserefno' => $ms_rc_caserefno,
                'ms_rc_morefno'=> $ms_rc_morefno,
                'ms_rc_idno'=> $ms_rc_idno,
                'diagnosis'=>$ms,
                'ms_rc_ESSA'=> $ms_rc_ESSA,
                'ms_rc_justification'=>$request->ms_rc_justification,
                'ms_rc_recommend'=>$request->ms_rc_recommend,
                'ms_rc_requestor'=>$ms_rc_requestor,
                'ms_rc_status'=>$ms_rc_status
        ];

        $content = $this->sendRequest('Recommend','POST', 'medicalservices/Recommend',$options);
        if(!empty($content)||$content!=null)
       {
            if($content->data != null)
            {
                toast('Save successful', 'success');
                return redirect()->back();
            }
            else
            {
                toast('Save unsuccessful', 'error');
                return redirect()->back();
            }
       }
       else{
        return redirect()->back();
       }
    }
}
