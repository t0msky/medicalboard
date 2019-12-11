<?php

namespace App\Http\Controllers\scheme\NewClaim;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use Log;//asma

class NoticeAccidentController extends CommonController
{
    public function index(Request $req)
    {
        $ids=session('ids');
      
        $caserefno = $ids['caserefno'];
        $empcode = $ids['empcode'];
        $idtype = $ids['idtype'];
        $idno = $ids['idno'];
        $casetype = $ids['casetype'];
        $uniquerefno = $ids['uniquerefno'];
        $accident_id = $ids['accident'];
        
        // $month = $ids['accdmonth'];
        // $year = $ids['accdyear'];
        $preview = 'accidentpreview';
        
        $time=strtotime('2019-10-04');
        $month=date("n", $time);
        $year=date("Y", $time);
        $count = '6';
   
        $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
        'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
        'gender','doc_sts','docsrc','doc_type_oc','f34submitby', 'accd_place', 'acc_when', 'hus_sts', 'mc_sts'];
        $data_branch = ['branchs'];

        $branchs = $this->sendRequest('Branch', 'GET', 'dynamic_options', [], ['fields' => $data_branch ]);
        if (empty($branchs)||$branchs==null) {
            toast(' Branchs Not Found', 'error');
            return redirect()->route('workbasket');
        }
        
        $ref_table = $this->sendRequest('Reftable', 'GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        if (empty($ref_table)||$ref_table==null) {
            toast('Reftable Not Found', 'error');
            return redirect()->route('logout');
        }
        
        $doclist = $this->sendRequest('Document List', 'GET', 'common/getdoc', [], ['noticetype' =>$casetype]);
        $doclist_select = $this->sendRequest('Document List', 'GET', 'common/getdocall');
        $docinfo = $this->sendRequest('Document Information', 'GET', 'common/download', [], ['caserefno' => $caserefno ]);
        $remark = $this->sendRequest('Remarks', 'GET', 'common/remarks', ['caserefno' => $caserefno]);
        $obprofile = $this->sendRequest('Ob Information', 'GET', 'scheme/obprofile', [], ['caserefno'=>$caserefno ]);
        $empinfo = $this->sendRequest('Employer Information', 'GET', 'scheme/getemployer', [], ['caserefno' => $caserefno ]);
        $accinfo=$this->sendRequest('Accident Info', 'GET', 'common/accident_info/'.$accident_id)->data;
        $bankinfo = $this->sendRequest('Bank Info', 'GET', 'scheme/bankinfo', [], ['caserefno' => $caserefno ]);
        $socso = $this->sendRequest('Socso', 'GET', 'scheme/socso', [], ['caserefno' => $caserefno ]);
        $certificate = $this->sendRequest('Certificate', 'GET', 'scheme/certificate', [], ['caserefno' => $caserefno ]);
        $confirmation = $this->sendRequest('Confirmation', 'GET', 'scheme/getconfirmation', [], ['caserefno' => $caserefno ]);
        $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);
        $husinfo = $this->sendRequest('Medical Certificate', 'GET', 'scheme/gethusinfo', [], ['caserefno' => $caserefno ]);
        // dd($husinfo);
        $clinicname = $this->sendRequest('Clinic Name', 'GET', 'scheme/getclinicname', [], ['caserefno' => $caserefno ]);
        $wages = $this->sendRequest('Wages', 'GET', 'scheme/wages', [], ['caserefno'=> $caserefno,'month'=>$month,'year'=>$year,'count'=>$count ]);
    
        $doclist=$this->Checking($doclist);
        $doclist_select=$this->Checking($doclist_select);
        $docinfo=$this->Checking($docinfo);
        $remark=$this->Checking($remark);
        $obprofile=$this->CheckingRecord($obprofile);
        $empinfo=$this->CheckingRecord($empinfo);
        // $accinfo=$this->CheckingRecord($accinfo);
        $bankinfo =$this->Checkingerrorcode($bankinfo);
        $socso=$this->Checkingerrorcode($socso);
        $certificate=$this->Checkingerrorcode($certificate);
        $confirmation=$this->CheckingRecord($confirmation);
        $clinicname=$this->Checking($clinicname);
        
        if (!empty($state)||$state!=null) {
            $state=$state->state_branch;
        } else {
            $state=null;
        }
        
        if ($month == '') {
            $month = date('m');
        }
        if ($year == '') {
            $year = date('Y');
        }

        if ($branchs && $branchs!='') {
            $branch = $branchs->{'branchs'};
        }
        
        // $confirmation=null;
       
        
        // if (empty($husinfo)|| $husinfo == null || $husinfo->record == '0') {
        //     // dd($husinfo);
        //     $husinfo=null;
        // }
      
        $contribution[0][0] = array("month"=>6,"year"=>"2013","wages"=>"2750.00","contrpayable"=>"61.90","contrpaid"=>"61.90","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[0][1] = array("month"=>5,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[0][2] = array("month"=>4,"year"=>"2013","wages"=>"2950.00","contrpayable"=>"66.40","contrpaid"=>"66.40","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[0][3] = array("month"=>3,"year"=>"2013","wages"=>"3450.00","contrpayable"=>"77.60","contrpaid"=>"77.60","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[0][4] = array("month"=>2,"year"=>"2013","wages"=>"2950.00","contrpayable"=>"66.40","contrpaid"=>"66.40","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[0][5] = array("month"=>1,"year"=>"2013","wages"=>"3150.00","contrpayable"=>"70.90","contrpaid"=>"70.90","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[0][6] = array("month"=>12,"year"=>"2012","wages"=>"3150.00","contrpayable"=>"70.90","contrpaid"=>"70.90","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $data[0] = array("empcode"=>"F9100000003Z6","empname"=>"Hyper Market Sdn Bhd","startdate"=>"20130115","enddate"=>"20130615","wagespaid"=>"","contribution"=>$contribution[0]);
        
        $contribution[1][0] = array("month"=>6,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[1][1] = array("month"=>5,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[1][2] = array("month"=>4,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[1][3] = array("month"=>3,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[1][4] = array("month"=>2,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[1][5] = array("month"=>1,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[1][6] = array("month"=>12,"year"=>"2012","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $data[1] = array("empcode"=>"F9100000003Z7","empname"=>"Advance Marketing Sdn Bhd","startdate"=>"20130110","enddate"=>"20130624","wagespaid"=>"","contribution"=>$contribution[1]);

        $contribution[2][0] = array("month"=>6,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"N");
        $contribution[2][1] = array("month"=>5,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[2][2] = array("month"=>4,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[2][3] = array("month"=>3,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[2][4] = array("month"=>2,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[2][5] = array("month"=>1,"year"=>"2013","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $contribution[2][6] = array("month"=>12,"year"=>"2012","wages"=>"0.00","contrpayable"=>"0.00","contrpaid"=>"0.00","surplus"=>"0.00","recommended"=>"","remarks"=>"","reason"=>"","partial"=>"Y");
        $data[2] = array("empcode"=>"F9100000003Z7","empname"=>"Advance Marketing Sdn Bhd","startdate"=>"20130110","enddate"=>"20130124","wagespaid"=>"","contribution"=>$contribution[1]);
        
        $wages = $data;
        // dd($wages);
        // $this->getAccidentinfo($jsonAccidentInfo, $accident_id);
        
        //sco
        $this->getWrongNoticeType($jsonWrongNoticeType);
        $this->getPreparerInfo($jsondecodepreparer, $caserefno);
        $this->getSendNotification($jsonSendNotification);
        $sendnotification=$jsonSendNotification;
        // $this->getqueryOpinion($jsonQueryOpinion, $caserefno);
        $this->getCaseInfo($jsonCaseInfo);

        $datablade=['ref_table', 'empinfo', 'branch', 'casetype', 
        'doclist_select', 'doclist', 'obprofile', 'bankinfo', 'docinfo', 
        'accinfo', 'remark', 'husinfo', 'clinicname', 'wages', 'socso', 
        'confirmation', 'certificate', 'preview', 'state'];
        if ($req->action == 'Preview') {
            return view('scheme.noticeAccident.newClaim.PK.preview.main',compact($datablade));
        }
        return view('scheme.noticeAccident.newClaim.PK.index',compact($datablade));
    }
    public function getEmployment_info(&$jsondecodeEmployer)
    {
        $employer =
        '{"record":1,
            "data":
            {"empcode":"F9100000003Z6",
            "empname":"SINORA SDN BHD",
            "add1":"11KM,JALAN SINORA,BATU SAPI,",
            "add2":"W D T 79",
            "add3":"SANDAKAN",
            "postcode":"90009",
            "city":"SANDAKAN",
            "state_code":"13",
            "telno":"6012312312312312",
            "faxno":"039988776",
            "email":"hr@sinora.com.my",
            "pobox":null,
            "locked_bag":null,
            "wdt":null,
            "bussentity":"1",
            "subbussentity":"3",
            "subbussentitylist":"3",
            "servicetype":"2",
            "indscode":"14",
            "subindscodelist":"1185"}
        }';

        // dd($employer);
        $jsondecodeEmployer = json_decode($employer);

        if (!empty($jsondecodeEmployer) || $jsondecodeEmployer !=null) {
            if ($jsondecodeEmployer->record>0) {
                $jsondecodeEmployer=$jsondecodeEmployer->data;
            } else {
                $jsondecodeEmployer=null;
            }
        } else {
            $jsondecodeEmployer=null;
        }
        
        // dd($jsondecodeEmployer);
    }
  
    public function getWagesContrpayable(Request $request)
    {
        $wages = $_GET['wages'];

        $client = new Client();
        $url = config('services.endpoint.url');
        $options = [
            'headers' => [
                'Authorization' => session('API_token'),
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'exceptions' => false
            ],
            'query' => ['wages'=> $wages]
        ];

        try {
            // $response = $this->sendRequest('GET', 'scheme/getWagesContrpayable', [], ['wages' => $wages ]);
            $response = $client->get($url.'/scheme/getWagesContrpayable', $options)->getBody();
            return $response;
        } catch (RequestException $e) {
            toast('Web Service Problem', 'error');
            return null;
        }
    }
    public function postWages(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        
        $data = array();
        $cntdata = 0;
        foreach ($req->empcode as $index => $empcodefld)
        {
            $empcode = $empcodefld;
            $empname = $req->empname[$index];
            $startdate = $req->startdate[$index];
            $startdate = str_replace('-', '', $startdate);
            $enddate = $req->enddate[$index];
            $enddate = str_replace('-', '', $enddate);
            $wagesinfo = array();
            $cnt = 0;
            
            foreach($req->month[$index] as $idx => $monthfld)
            {
                $month = $monthfld;
                $year = $req->year[$index][$idx];
                $wages = $req->wages[$index][$idx];
                $contr = $req->contrpaid[$index][$idx];
                
                $wagesinfo[$cnt] = ['month'=>$month, 'year'=>$year, 'wages'=>$wages, 'contrpaid'=>$contr, 'assumedwages'=>'',
                    'contrpayable'=>'','contrdiff'=>'', 'contrsts'=>'','recommended'=>'', 'reason'=>'', 'wageremarks'=>'']; 
                
                $cnt++;
            }
            
            $data[$cntdata] = ['empcode'=>$empcode, 'empname'=>$empname, 'startdate'=>$startdate, 'enddate'=>$enddate, 'wagesinfo'=>$wagesinfo];
            $cntdata++;
            
        }
        

        $response = $this->sendRequest('POST WAGES ', 'POST', 'scheme/newwages', [], ['caserefno'=>$caserefno, 'data'=>$data]);
          
        $errorcode = $response->{'errorcode'};
        if ($errorcode == 0)
        {
            toast('Successfully Saved','success');
            return redirect()->back()->withInput(['tab'=>'wages']);
        }
        else
        {
            toast('Failed to Save!','error');
            return redirect()->back()->withInput(['tab'=>'waes']);
        }
        
    }
    public function getAccidentinfo(&$jsonAccidentInfo, $accident_id)
    {
        $client = new Client();

        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ]
        ];
    
        $response = $client->get($url.'/common/accident_info/'.$accident_id, $options)->getBody();
        $jsonAccidentInfo = json_decode($response->getContents());
        // dd($jsonAccidentInfo);
        if (!empty($jsonAccidentInfo)) {
            $jsonAccidentInfo=$jsonAccidentInfo->data;
        } else {
            $jsonAccidentInfo=null;
        }
    }
    public function postAccident(Request $req)
    {
        $ids=session('ids');
        // dd($ids);
        $accident_id = $ids['accident'];

        // dd($accident_id);
        
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
                "accddate"=> $req->accddate,
                "accdtime"=> $req->accdtime,
                "acc_code"=>$req->acc_code,
                "place"=> $req->accdplace,
                "accdwhen"=> $req->accdwhen,
                "whendesc"=> $req->whendesc,
                "how"=> $req->how,
                "transport"=> $req->transport,
                "transportothers"=> $req->transportothers,
                "causative"=> $req->causative,
                "reasontravel"=> $req->reasontravel,
                "injurydesc"=> $req->injurydesc,
                "injurytype"=> $req->injurytype,
                "injury_loc" => $req->injury_loc,
                "accwork"=> $req->accwork,
                "startworktime"=> $req->startworktime,
                "restperiod"=> $req->restperiod,
                "endworktime"=> $req->endworktime,
                "witnessname"=> $req->witnessname,
                "witnesscontact"=> $req->witnesscontact,
                "clinicinfo"=> $req->clinicinfo,
                "id" => $accident_id
            ],
        ];
        // dd($options);
        try {
            $response = $client->post($url.'/common/accident_info/'.$accident_id, $options)->getBody()->getContents();
            $jsondecode = json_decode($response);

            toast('Save successful', 'success');
            return redirect()->back();
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Save unsuccessful', 'error');
            return redirect()->back();
        }
    }
    public function getClinicName(&$jsondecodeclinicname, $caserefno)
    {
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ],
            'json' => [
                'caserefno' => $caserefno
            ],
        ];
        
        $response = $client->get($url.'/scheme/getclinicname', $options)->getBody();
        $jsondecodeclinicname = json_decode($response->getContents());
        //  dd($jsondecodeclinicname);
        if (empty($jsondecodeclinicname)|| $jsondecodeclinicname == null || $jsondecodeclinicname->record == '0') {
            $jsondecodeclinicname=null;
        }
    }
    public function getHusInfo(&$jsondecodehus, $caserefno)
    {
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ],
            'json' => [
                'caserefno' => $caserefno
            ],
        ];
        // dd($options);
        
        $response = $client->get($url.'/scheme/gethusinfo', $options)->getBody();
        dd($response);
        $jsondecodehus = json_decode($response->getContents());
         
        if (empty($jsondecodehus)|| $jsondecodehus == null || $jsondecodehus->record == '0') {
            $jsondecodehus=null;
        }
    }
    public function postHusInfo(Request $req)
    {
        // dd($req->input('hussts')[1]);
        // dd($req->all());
        $ids=session('ids');
        $caserefno = $ids['caserefno'];
        // dd($caserefno);
        if ($req->action== 'Submit') {
            if ($req) {
                $mcitem = [];
                $mcinfo = [];
 
                //$parent = count($req->hussts);
 
                //for ($i=0;$i<$parent;$i++)
                foreach ($req->value_parent as $i) {
                    $hussts = $req->input('hussts')[$i];
                    $clinicinfo = $req->input('clinicinfo')[$i];
                    $startdate = $req->input('startdate')[$i];
                    $startdate =  str_replace('-', '', $startdate);
                    $enddate = $req->input('enddate')[$i];
                    $enddate = str_replace('-', '', $enddate);
                    $totalmc = $req->input('totalmc')[$i];
                    // $scorecommend = $req->input('scorecommend')[$i];
 
                    if (isset($req->mcitemstartdate[$i])) {
                        $child = count($req->mcitemstartdate[$i]);
                        for ($j=0;$j<$child;$j++) {
                            $mcitemstartdate = $req->input('mcitemstartdate')[$i][$j];
                            $mcitemstartdate = str_replace('-', '', $mcitemstartdate);
                            $mcitemenddate = $req->input('mcitemenddate')[$i][$j];
                            $mcitemenddate = str_replace('-', '', $mcitemenddate);
                            $totalmcitem = $req->input('totalmcitem')[$i][$j];
                            $approvalsts = $req->input('approvalsts')[$i][$j];
                            $mcitem[$i][$j]=['mcitemstartdate'=>$mcitemstartdate,'mcitemenddate'=>$mcitemenddate,'totalmcitem'=>$totalmcitem,'approvalsts'=>$approvalsts];
                        }
                    }
                    $mcinfo[$i] = ['husstatus'=>$hussts,'clinicinfo'=>$clinicinfo,'startdate'=>$startdate,'enddate'=>$enddate,'totalmc'=>$totalmc];
                }
                
                $client = new Client();

                $url = config('services.endpoint.url');
                $token = session('API_token');
                 
                $options = [
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                        'Authorization' => $token
                        ],
                    'json' => ['mcinfo'=>$mcinfo, 'mcitem'=>$mcitem, 'caserefno'=>$caserefno ]
                ];
                return $options;
                try {
                    $response = $client->post($url.'/scheme/husinfo', $options)->getBody()->getContents();
                        
                    $jsondecode = json_decode($response);
                    // dd($jsondecode);
                    $errorcode = $jsondecode->{'errorcode'};
                    if ($errorcode == 0) {
                        toast('Save Successful', 'success');
                        return redirect()->back();
                    } else {
                        toast('Data is Empty', 'error');
                        return redirect()->back();
                    }
                } catch (GuzzleHttp\Exception\BadResponseException $e) {
                    toast('Save Unsuccessful', 'error');
                    return redirect()->back();
                }
            }
        }
    }
    public function updateHusInfo($op_id, Request $req)
    {
        dd($op_id);
        $modal_clinicinfo =$req->modal_clinicinfo;
        $modal_startdate = $req->modal_startdate;
        $modal_enddate =$req->modal_enddate;
        $modal_totalmc =$req->modal_totalmc;
        $hussts=$req->hussts;
    }
    public function getCaseInfo(&$jsonCaseInfo)
    {
        $jsonCaseInfo =[
            'prepare_by' => "Ikmal Johar",
            'prepare_date' =>"20/01/2019",
            'case_category' =>"Notice Invalidity",
            'scheme_ref_no' =>"17DDT16F1025",
             'type_scheme' => "SBPK",
             'sp_legigable' => "nona",
             'notice_type'=>"Notice Invalidity",
             'notice_date'=>"20/01/2019",
             'form_34_date'=>"27/9/2019",
             'reg_date'=>"09/09/2019",
             'in_employment'=>"Yes",
             'accident_potential'=>"Yes",
             'registration_office'=>"Heitech Village 2",
             'soscoOffice'=>"Heitech Padu Berhad"

        ];
    }
    public function getWrongNoticeType(&$jsonWrongNoticeType)
    {
        // $caserefno = session('caserefno');

        // $client = new Client();
        // $url = config('services.endpoint.url');
        // $token = session('API_token');
        // $options = [
        // 	'headers' => [
        // 		'Authorization' => $token
        //     ],
        //     'query' => [
        //         "caserefno"=> $caserefno,
               
        // 	],
        // ];
        
      
        // $response = $client->get($url.'/wsmotion/bankinfo/', $options)->getBody();
        //$jsonWrongNoticeType = json_decode($response->getContents());
        $jsonWrongNoticeType = [
            'recnotice' => "Testing",
            'justification' =>"justifcate",
        ];
    }
}