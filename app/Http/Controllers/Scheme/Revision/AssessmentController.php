<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use DB;
// use App\ObForm;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class AssessmentController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function indexRevisionSAO() {
       
       
        return view('scheme.noticeOd.revision.assessment.SAO.index');
    }

    public function indexRevisionSCO(){
        return view('scheme.noticeOd.revision.assessment.SCO.index');
    }

    public function upload(Request $request)
    {

        $idno = session('idno');
        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $dataSet = array();
        
        $cnt = 0;
        $a = '';
        $doccount="1";
            $doctype_select = $request->doccat;
             
            $values_array= array_count_values($doctype_select);
        
        foreach ($request->pdf as $index => $pdf)
        {
            
            $date = date('Ymd');
            $docall = $request->doccat[$index];
            // $coun_array= count(in_array($docall, $doctype_select));
            $doccat=substr($docall,4);
            $doctype=substr($docall,0,3);
      
            if($values_array[$docall]==$doccount){
                $doccount="1";
                // return $values_array[$docall];
            }
            else{
                $doccount++;
            }
            
            if ($doccat == 'O')
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => '',
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>1

                ];

               
            }
            else if ($doccat == 'C')
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>1

                ];
               
            }
            
          
            
            $pdf->storeAs('documents', $docname);
        }
        
        $docrepo = ['operid'=>$operid, 'brcode'=>$brcode, 'docinfo'=>$dataSet];
        
        
        $jsondata = json_encode($docrepo);
        //return $jsondata;

        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddoc';

        // $ch = curl_init();
        
        // curl_setopt($ch,CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        // curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        // curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // curl_close($ch);
        
        // $jsondecode = json_decode($result);
        
        
        // $errorcode = $jsondecode->{'errorcode'};
        // if ($errorcode == 0)
        // {
        //     return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload successful');
        // }
        // else
        // {
        //     return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload unsuccessful');
        // }
        return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload successful');
        
        
        //return $a;
        // DB::table('docrepository')->insert($dataSet);

        // return redirect()->back();


        
    }
}