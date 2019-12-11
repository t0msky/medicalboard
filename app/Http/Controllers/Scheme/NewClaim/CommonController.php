<?php

namespace App\Http\Controllers\scheme\NewClaim;

use Illuminate\Http\Request;
use App\ObProfile;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Letter\LetterController;
use Illuminate\Support\Facades\Redirect;
use Input;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class CommonController extends Controller
{
   
    public function postEmployer(Request $req)
    {
        $ids=session('ids');
        $caserefno = $ids['caserefno'];
        $empcode = $ids['empcode'];

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],
            'json' => [
                "caserefno" => $caserefno,
                "empcode"=> $empcode,
                "empname"=> $req->empname,
                "emptype"=> $req->emptype,
                "bussentity"=> $req->bussentityId,
                "subbussentity"=> $req->subbussentityId,
                "subbussentitylist"=> $req->subbussentitylistId,
                "servicetype"=> $req->servicetypeId,
                "indscode"=> $req->indscodeId,
                "subindscodelist"=> $req->subindscodelistId,
                "add1"=> $req->add1,
                "add2"=> $req->add2,
                "add3"=> $req->add3,
                "city"=> $req->city,
                "statecode"=> $req->state,
                "postcode"=> $req->postcode,
                "phoneno"=> $req->telno,
                "faxno"=> $req->faxno,
                "email"=> $req->email,
                "pobox"=> $req->pobox,
                "lockedbag"=> $req->lockedbag,
                "wdt"=> $req->wdt
            ],
        ];
        // dd($options);

        try {
            $response = $client->post($url.'/scheme/newemployer', $options)->getBody()->getContents();
            // dd($response);
            $jsondecode = json_decode($response);
            // dd($jsondecode);
          
            toast('Save successful', 'success');
            return redirect()->back();
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Save unsuccessful', 'error');
            return redirect()->back();
        }
    }
    public function postBankInfo(Request $req)
    {
        $ids = session('ids');
        $caserefno = $ids['caserefno'];
    
        $paymode= $req->paymode;

        if ($paymode=='1') {
            $reasonnoacc= $req->reasonnoacc;
            $bankloc= null;
            $bankname= null;
            $bankaccno= null;
            $bankacctype= null;
            $bankaddr = null;
            $country = null;
            $currency =null;
            $bsbcode= null;
            $swiftcode =null;
        } elseif ($paymode == '2') {
            $bankloc= $req->bankloc;
            $reasonnoacc=null;
            $bankname= $req->bankcode;
            $bankaccno= $req->localaccno;
            $bankacctype= $req->localacctype;
            $bankaddr=$req->bankaddr;

            if ($bankloc == 'L') {
                $country = null;
                $currency =null;
                $swiftcode =null;
                $bsbcode= null;
            } elseif ($bankloc =='O') {
                $country = $req->country;
                $currency =$req->currency;
                $swiftcode = $req->swiftcode;
                $bsbcode= $req->bsbcode;
            }
        }

        $options = [
            "caserefno"=>$caserefno,
            "paymode"=> $paymode,
            "reasonnoacc"=> $reasonnoacc,
            "bankloc"=>$bankloc,
            "bankname"=> $bankname,
            "accno" => $bankaccno,
            "acctype" => $bankacctype,
            "swiftcode" => $swiftcode,
            "bsbcode" => $bsbcode,
            "countrycode" =>$country,
            "bankaddr" => $bankaddr,
            "baists"=> '',
            "substsdesc"=> '',
        ];

        $bankInfo = $this->sendRequest('Bank Information', 'POST', 'scheme/bankinfo', $options);
        
        if (!empty($bankInfo)||$bankInfo!=null) {
            $errorcode=$bankInfo->errorcode;
            if ($errorcode==0) {
                toast('Successfully Updated', 'success');
                return redirect()->back();
            } else {
                toast('Unsuccessfully Update', 'error');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function postObForm(Request $req)
    {
        $ids = session('ids');
        $caserefno = $ids['caserefno'];
        $uniquerefno=$ids['uniquerefno'];
       
        foreach($req->idno as $idx=> $idno)
        {
            $idinfo[]=[
                'idtype'=>$req->idtype[$idx],
                'idno' =>$idno
            ];
        }
       
        $options = [
                "uniquerefno"=>$uniquerefno,
                "caserefno"=> $caserefno,
                "idinfo"=>$idinfo,
                "name"=> $req->name,
                "dob"=> $req->dob,
                "race"=> $req->race,
                "gender"=> $req->gender,
                "occupation"=> $req->occupation,
                "occucode"=> $req->occucode,
                "suboccucode"=> $req->sub_occucode,
                "suboccucodelist"=> $req->sub_occucode_list,
                "dodeath"=> '',
                "add1"=> $req->add1,
                "add2"=> $req->add2,
                "add3"=> $req->add3,
                "city"=> $req->city,
                "statecode"=> $req->state_code,
                "postcode"=> $req->postcode,
                "telno"=> $req->telno,
                "mobileno"=> $req->mobileno,
                "email"=> $req->email,
                "nationality"=> $req->nationality,
                "pobox"=> $req->pobox,
                "lockedbag"=> $req->locked_bag,
                "wdt"=> $req->wdt,
                "nationality" =>$req->nationality,
                "f34recvdate"=> $req->f34recvdate,
                "f34submitby"=> $req->f34submitby
        ];
       
        $content = $this->sendRequest('Ob Information','POST', 'scheme/newobprofile',$options); 
    
 
        if (!empty($content)||$content!=null) {
            $errorcode=$content->errorcode;
            if ($errorcode==0) {
                toast('Save successful', 'success');
                return redirect()->back();
            } else {
                toast('Save unsuccessful', 'error');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function getOBAssist($idno, $idtype, &$jsonOBAssist)
    {
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                "identificationType"=> $idtype,
                "identificationNo"=> $idno
            ],
        ];
        
    
        $response = $client->get($url.'/common/ip', $options)->getBody();
        $content = json_decode($response->getContents());
        // dd($content);
       
        $jsonOBAssist = (!empty($content)) ? $content->{'employeeInfoList'} : null;
        // dd($jsonOBAssist);
    }
    public function getAssist($idno, $empcode, &$jsondecodeAssistEmployer)
    {
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                "employerCode"=> $empcode,
                "employerName"=> 'c',
            ],
        ];
       
        // dd($options);
        $response = $client->get($url.'/common/employers', $options)->getBody();
        $content = json_decode($response->getContents());
        // dd($content);
        
        $jsondecodeAssistEmployer = (!empty($content)) ? $content->{'businessInfo'} : null;
        // dd($jsondecodeAssistEmployer);
    }
    public function getSelectedNotification(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        $id_notification=$req->id;

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                "caserefno"=> $caserefno,
                "id"=>$id_notification,
            ],
        ];
        
        $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);
        $jsonSelectedNotification = $client->get($url.'/scheme/shownoti/', $options)->getBody();
        // $jsonSelectedNotification = json_decode($response->getContents());
     
        // if(!empty($jsonSelectedNotification))
        // {
        //     $jsonSelectedNotification=$jsonSelectedNotification->data;
        // }
       
        return $jsonSelectedNotification;
    }
    public function getPreparerInfo(&$jsondecodepreparer, $caserefno)
    {
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ],
            'query' => [
                'caserefno' => $caserefno
            ],
        ];
        // dd($options);
        $response = $client->get($url.'/scheme/getpreparerinfo', $options)->getBody();
        $jsondecodepreparer = json_decode($response->getContents());
         
        if (empty($jsondecodepreparer)) {
            $jsondecodepreparer=null;
        }
    }
    public function postSendNotification(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $send_to = $req->send_to;
        $select_employer = $req->select_employer;
        $select_employer = "0001";
        $notification_type = $req->notification_type;
        $list_doc=$req->list_doc;
       
        $looping ="0";

        foreach ($req->list_doc as $idx => $doc) {
            $doccat[]=substr($doc, 0, 3);
            $docname[]=substr($doc, 4);
        }
        if (!empty($req->list_doc_others)) {
            foreach ($req->list_doc_others as $idx => $doc) {
                $doc_others[]=$doc;
            }
      
            foreach ($doccat as $idx => $doc) {
                if ($doc =="C16" && $docname[$idx]==false) {
                    $docname[$idx]=$doc_others[$looping];
                    $looping++;
                }
                $dataset_others[]=[
                      'nd_doctype' => $doccat[$idx],
                      'nd_docdesc' => $docname[$idx]
                        ];
            }
        } else {
            $dataset_others=null;
        }
        if (!empty($information=$req->information)) {
            foreach ($information as $info) {
                $infodesc[]=[
                    'ni_infodesc'=>$info
             ];
            }
        } else {
            $infodesc=null;
        }

        if ($send_to=="3") {
            $name_others=$req->name_others;
            $email_others=$req->email_others;
            $add1=$req->add1;
            $add2=$req->add2;
            $add3=$req->add3;
        } else {
            $name_others=null;
            $email_others=null;
            $add1=null;
            $add2=null;
            $add3=null;
        }

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
               'nt_caserefno' =>$caserefno,
               'nt_sendto' =>$send_to,
               'nt_name_others' => $name_others,
               'nt_email_others' => $email_others,
               'nt_add1' => $add1,
               'nt_add2' => $add2,
               'nt_add3' => $add3,
               'nt_empcode' => $select_employer,
               'nt_notitype' => $notification_type,
               'listdoc' => $dataset_others,
               'addinfo' => $infodesc
           ]
       ];
     
        try {
            $response = $client->post($url.'/scheme/insertnoti', $options)->getBody();
            $content = json_decode($response->getContents());
           
            //    if($notification_type == "1"){
            $this->generateletter();
            // }
            // else if($notification_type == "2"){
            // $this->generateemail();
            // }
        
            toast('Save successful', 'success');
            return redirect()->back();
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Save unsuccessful', 'error');
            return redirect()->back();
        }
    }
    public function getSendNotification(&$jsonSendNotification)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
           'headers' => [
               'Authorization' => $token
           ],
           'query' => [
               "caserefno"=> $caserefno,
           ],
       ];
       
     
        $response = $client->get($url.'/scheme/notification/', $options)->getBody();
        $jsonSendNotification = json_decode($response->getContents());
     
        if (!empty($jsonSendNotification)) {
            $jsonSendNotification=$jsonSendNotification->data;
        } else {
            $jsonSendNotification=null;
        }
    }
    public function getqueryOpinion(&$jsonQueryOpinion, $caserefno)
    {
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
           'headers' => [
               'Authorization' => $token
           ],
         
       ];

        try {
            $response = $client->get($url.'/scheme/Opinion/'.$caserefno, $options)->getBody();
            $jsonQueryOpinion = json_decode($response->getContents());

            if (!empty($jsonQueryOpinion)) {
                $jsonQueryOpinion=$jsonQueryOpinion->data;
            } else {
                $jsonQueryOpinion=null;
            }
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $jsonQueryOpinion=null;
        }
    }
    public function postqueryOpinion(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
       
        $action_query_opinion = $req->action_query_opinion;

        if ($action_query_opinion == 'query') {
            $desc=$req->desc;
            $route_to=$req->route_to;
        } elseif ($action_query_opinion == 'opinion') {
            $type_opinion=$req->type_opinion;
            $purpose_reference=$req->purpose_reference;
            $case_details=$req->case_details;
            $investigation_details=$req->investigation_details;
            $doubtful_issue=$req->doubtful_issue;
            $recommendation=$req->recommendation;
            $query_conclusion=$req->query_conclusion;
        //   dd($purpose_reference);
        } elseif ($action_query_opinion == 'opinion') {
            $type_opinion=$req->type_opinion;
            $purpose_reference=$req->purpose_reference;
            $case_details=$req->case_details;
            $investigation_details=$req->investigation_details;
            $doubtful_issue=$req->doubtful_issue;
            $recommendation=$req->recommendation;
            $query_conclusion=$req->query_conclusion;
        }

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Accept' => "application/json",
                "Content-Type" => "application/json",
                'Authorization' => $token
            ],
            'json' => [
                
                'op_caserefno' => $caserefno,
                'op_id'=>"1",
                'op_opiniontype' =>$type_opinion,
                'op_category' =>"02",
                'op_casedetails' =>$case_details,
                'op_invdetails' => $investigation_details,
                'op_issue' => $doubtful_issue,
                'op_recommend' =>$recommendation,
                'op_conclusion' =>$query_conclusion,
                "op_fromoperid"=> "1",
                "op_fromrole"=> "1",
                "op_status"=> "1",
                "op_addby"=> "1",
                "op_dateadd"=> "1",
                "op_updby"=>"1",
                "op_dateupd"=> "1"
            ],
        ];
      
        
        try {
            $response = $client->post($url.'/scheme/Opinion', $options)->getBody();
            $content = json_decode($response->getContents());

            if ($content->data != null) {
                toast('Save successful', 'success');
                return redirect()->back();
            } else {
                toast('Save unsuccessful', 'error');
                return redirect()->back();
            }
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Save unsuccessful', 'error');
            return redirect()->back();
        }
    }
    public function deletequeryOpinion($op_id)
    {
        $ids=session('ids');
       
        $caserefno=$ids['caserefno'];

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
         'headers' => [
             'Accept' => "application/json",
             "Content-Type" => "application/json",
             'Authorization' => $token
         ],
         'json' => [
             'op_caserefno' => $caserefno,
             'op_id'=>$op_id,
         ],
     ];
   
     
        try {
            $response = $client->post($url.'/scheme/OpinionDelete', $options)->getBody();
        
            $content = json_decode($response->getContents());
         
            toast('Delete successful', 'success');
            return redirect()->back();
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Delete unsuccessful', 'error');
            return redirect()->back();
        }
    }
    public function postCertificate(Request $req)
    {
        $ids=session('ids');
        
        $caserefno = $ids['caserefno'];

        $options=[
                "caserefno"=>$caserefno,
                "emprepname"=> $req->emprepname,
                "emprepdes"=> $req->emprepdes,
                "emprepdate"=> $req->emprepdate
                 ];

        $content = $this->sendRequest('Certificate', 'POST', 'scheme/certificate', $options);

        if (!empty($content)||$content!=null) {
            if ($content->errorcode == 0) {
                toast('Save successful', 'success');
                return redirect()->back();
            } else {
                toast('Save unsuccessful', 'error');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function postConfirmation(Request $req)
    {
        if ($req->action == 'Save') {
            // dd('ya');
            $ids = session('ids');
            $caserefno = $ids['caserefno'];
            $uniquerefno = $ids['uniquerefno'];
            
            $options =[
                "caserefno"=> $caserefno,
                "uniquerefno"=> $uniquerefno,
                "jrecv"=> $req->jrecv,
                "jrecvdate"=> $req->jrecvdate,
                "stampdate"=> null
            ];
            // dd($options);

            $content = $this->sendRequest('Confirmation', 'POST', 'scheme/updconfirmation', $options);
            // dd($content);
                
            if (!empty($content)||$content!=null) {
                if ($content->errorcode == 0) {
                    toast('Save successful', 'success');
                    return redirect()->back();
                } else {
                    toast('Save unsuccessful', 'error');
                    return redirect()->back();
                }
            } else {
                return redirect()->back();
            }
        }
    }
    public function postRemarks(Request $req)
    {
        $ids = session('ids');
        $caserefno=$ids['caserefno'];
        
        $options=[
                'caserefno' => $caserefno,
                'sendto' => $req->sendto,
                'status' => $req->status,
                'remark' => $req->remark
             ];
        $content = $this->sendRequest('Remarks', 'POST', 'common/addremarks', $options);
       
        if (!empty($content)||$content!=null) {
            $data=$content->data;
            if (!empty($data)||$data!=null) {
                toast('Save successful', 'success');
                return redirect()->back();
            } else {
                toast('Save successful', 'success');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    
    public function postupdateEmphistory(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
    
        if (!empty($req->emp_id)||$req->emp_id!=null) {
            $emp_id=$req->emp_id;
            $path="updemphistory";
        } else {
            $emp_id="0";
            $path="addemphistory";
        }
        $data=[
                "caserefno"=>$caserefno,
                "empid"=>$emp_id,
                "empname"=>$req->emp_name,
                "add1"=>$req->emp_add1,
                "add2"=>$req->emp_add2,
                "add3"=>$req->emp_add3,
                "postcode"=>$req->postcode,
                "city"=>$req->city,
                "statecode"=>$req->state_code,
                "designation"=>$req->occupation,
                "duration"=>$req->period_employment,
                "salary"=>$req->monthly_wages
        ];

        $content = $this->sendRequest('Employment History', 'POST', 'scheme/'.$path, $data);
      
        if (!empty($content)||$content!=null) {
            if ($content->errorcode == 0) {
                toast('Save successful', 'success');
                return redirect()->back();
            } else {
                toast('Save unsuccessful', 'error');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function deleteEmphistory($id_emp)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $data=[
            "caserefno"=>$caserefno,
            "empid"=>$id_emp,
        ];
    
        $content = $this->sendRequest('Employment History', 'POST', 'scheme/delemphistory', [], $data);
        if (!empty($content)||$content!=null) {
            if ($content->errorcode == 0) {
                toast('Delete successful', 'success');
                return redirect()->back();
            } else {
                toast('Delete unsuccessful', 'error');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function getSocsoOffice(Request $req)
    {
        $id=$req->id;
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'fields' => ['state_branch'] ,
               
            ],
        ];
        
      
        $response = $client->get($url.'/dynamic_options', $options)->getBody();
        $content = json_decode($response->getContents())->state_branch;

        foreach ($content as $branch) {
            if ($branch->id == $id) {
                $data=$branch->branch;
            }
        }
        return  $data;
    }
    public function postSocsoOffice(Request $req)
    {
        $ids = session('ids');
        $caserefno = $ids['caserefno'];
       
        $options = [
                "caserefno"=> $caserefno,
                "statecode"=>$req->state1,
                "preferredbrcode"=> $req->brname,
            ];
            // dd($options);
           
        $content = $this->sendRequest('Socso Office','POST', 'scheme/socso',$options);
        
        if(!empty($content)||$content!=null)
        {
            if($content->errorcode == 0)
            {
                toast('Save successful', 'success');
                return redirect()->back();
            } else {
                toast('Save unsuccessful', 'error');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function postFinalSubmit(Request $req)
    {
        $ids=session('ids');

        $caserefno=$ids['caserefno'];
        $casetype = $ids['casetype'];
        $uniquerefno = $ids['uniquerefno'];

        $data = [
            'caserefno' => $caserefno,
            'casetype' => $casetype,
            'uniquerefno' => $uniquerefno,
            'flow' => (int)$req->submit,
        ];


        $content = $this->sendRequest('Confirmation', 'GET', 'common/submission', $data);
        
    
        if (isset($content->data) && $content->data->Status == 0) {
            toast('Data Your files has been successfully added', 'success');
        } else {
            toast($content->data->Message, 'failed');
        }

        return redirect()->route('workbasket');
    }
    public function postAppointment(Request $req)
    {
        $ids=session('ids');

        $caserefno=$ids['caserefno'];
        
        // $req->appointment_question
        
       
        
        // $req->interview_attendess
        
       
        

        $data=[
            "ia_caserefno"=>$caserefno,
            "ia_date"=>$req->appointment_date,
            "ia_time"=>$req->appointment_time,
            "ia_correspaddtype"=>$req->correspondence_address,
            "ia_name"=>$req->appointment_name,
            "ia_add1"=> $req->appointment_address1,
            "ia_add2"=> $req->appointment_address2,
            "ia_add3"=> $req->appointment_address3,
            "ia_postcode"=>$req->appointment_postcode,
            "ia_city"=> $req->appointment_city,
            "ia_statecode"=>$req->appointment_state,
            "ia_pobox"=>$req->appointment_appointment_box,
            "ia_lockedbag"=> $req->appointment_locked_bag,
            "ia_wdt"=>$req->appointment_wdt,
            "ia_attentionto"=>$req->appointment_attentionTo,
            "ia_intvloc"=>$req->appointment_interviewLocation,
            "ia_intvadd1"=> $req->location_address1,
            "ia_intvadd2"=>$req->location_address2,
            "ia_intvadd3"=>$req->location_address3,

        ];
        dd($data);

    }
    public function getAppointmentdata(Request $req)
    {
        $ids=session('ids');

        $caserefno=$ids['caserefno'];

        $id=$req->id;
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ia_caserefno' => $caserefno 
               
            ],
        ];
        
      
        $response = $client->get($url.'/scheme/ioappointment', $options)->getBody();
        $content = json_decode($response->getContents());
       
        if($id==1){
            $data=$content->data->caseemp;
        }elseif($id==2){
            $data=$content->data->ob;
        }
        else{
            $data=null;
        }
      
        return json_encode($data);
    }
}
