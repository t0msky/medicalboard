<?php

namespace App\Http\Controllers\medicalServices;

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

class WbmedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operid = session('loginname');
        if ($operid == '')
        {
            return redirect('/login');
        }

       

        $jsondecodems= "";
        $this->getWbMedicalServices($jsondecodems);
        
       
        $wbmedical = $jsondecodems;
        // $caserefno= $jsondecodems->{'caserefno'};
       
        //  session(['caserefno'=>$caserefno]);
          
         return view('MedicalServices.general.medical_services',['wbmedical'=>$wbmedical]);


    }


    
    
}


        
