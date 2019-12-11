<?php

namespace App\Http\Controllers\Scheme\NewClaim;

use Illuminate\Http\Request;
use DB;
use App\ObForm;
use Illuminate\Support\Facades\Input;
use Log;//asma

use GuzzleHttp\Psr7; //atikah
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class NoticeDeathController extends CommonController
{
    
    public function index(Request $req)
    {
        $ids=session('ids');
       
        $caserefno=$ids['caserefno'];
        $empcode=$ids['empcode'];
        $idtype=$ids['idtype'];
        $idno=$ids['idno'];
        $casetype=$ids['casetype'];
        $uniquerefno=$ids['uniquerefno'];
        $data_branch = ['branchs'];   
        $preview = 'deathpreview';
        
        $time=strtotime('2019-10-04');
        $month=date("n", $time);
        $year=date("Y", $time);
        $count = '6';

        $data_reftable=['case_type','id_type','race','month','acc_type','indus_code','prof_code','work_sts',
        'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
        'gender','doc_sts','docsrc','doc_type_oc','mc_sts','transport','accd_place','acc_when','marital_sts','f34submitby','hus_sts','bank_loc',
        ];
       

        $data_reftable2 =['causative','acc_code','bank_loc','rsn_no_acc','bai_sts','bank_code','pay_mode',
        'ot_sts','relation','disable','study_sts','edu_lvl','app_relation',
        ];
        
        $branchs = $this->sendRequest('Branch','GET', 'dynamic_options', [], ['fields' => $data_branch ]);
        if (empty($branchs)||$branchs==null) {
            toast(' Branchs Not Found', 'error');
            return redirect()->route('workbasket');
        }
        
        $ref_table = $this->sendRequest('Refer Table ','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        if (empty($ref_table)||$ref_table==null) {
            toast('Reftable Not Found', 'error');
            return redirect()->route('logout');
        }
        
        $ref_table2 = $this->sendRequest('Refer Table','GET', 'static_options', [], ['ref_code' => $data_reftable2 ]);
        // dd($ref_table2->pay_mode);
        if (empty($ref_table2)||$ref_table2==null) {
            toast('Reftable Not Found', 'error');
            return redirect()->route('logout');
        }
        // dd($ref_table2);
        
        $obprofile = $this->sendRequest('Ob Profile','GET', 'scheme/obprofile', [], ['caserefno'=>$caserefno ]);
        $docinfo = $this->sendRequest('Document Info','GET', 'common/download', [], ['caserefno' => $caserefno ]);
        $remark = $this->sendRequest('remarks','GET', 'common/remarks',['caserefno' => $caserefno]);
        $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype]);
        $doclist_select = $this->sendRequest('Document List Select','GET', 'common/getdocall');
        $certificate = $this->sendRequest('Certificate','GET', 'scheme/certificate', [], ['caserefno' => $caserefno ]);
        $socso = $this->sendRequest('Socso','GET', 'scheme/socso', [], ['caserefno' => $caserefno ]);
        $employer = $this->sendRequest('Employer','GET', 'scheme/getemployer', [], ['caserefno' => $caserefno ]);
        $otinfo = $this->sendRequest('OT Info','GET', 'scheme/noticedeath_getOT', [], ['caserefno' => $caserefno ]);
        $guardianinfo = $this->sendRequest('Guardian Info','GET', 'scheme/getGuardianInfo', [], ['caserefno' => $caserefno ]);
       // $applicantinfo = $this->sendRequest('Fpm Info','GET', 'scheme/getFpmInfo',[], ['caserefno' => $caserefno]);
       

        $empinfo = $this->sendRequest('Employer Information', 'GET', 'scheme/getemployer', [], ['caserefno' => $caserefno ]);
        $bankinfo = $this->sendRequest('Bank Information','GET', 'scheme/bankinfo', [], ['caserefno' => $caserefno]);
        // $wages = $this->sendRequest('Wages', 'GET', 'scheme/wages', [], ['caserefno'=> $caserefno,'month'=>$month,'year'=>$year,'count'=>$count ]);
        $wages = $this->sendRequest('Wages', 'GET', 'scheme/getwages', [], ['caserefno'=> '201910170002']);
        $confirmation = $this->sendRequest('Confirmation', 'GET', 'scheme/getconfirmation', [], ['caserefno' => $caserefno ]);
        $deathdetail = $this->sendRequest('Death Detail', 'GET', 'scheme/getdeathinfo', [], ['caserefno' => $caserefno ]);
        $husinfo = $this->sendRequest('Medical Certificate', 'GET', 'scheme/gethusinfo', [], ['caserefno' => $caserefno ]);
        $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);
        $tag_case_info = $this->sendRequest('Tag Case Info','GET', 'common/tag_case_info/'.$caserefno);

        $tag_case_info=$this->Checking($tag_case_info);
        $doclist=$this->Checking($doclist);
        $doclist_select=$this->Checking($doclist_select);
        $docinfo=$this->Checking($docinfo);
        $remark=$this->Checking($remark);
        $obprofile=$this->CheckingRecord($obprofile);
        $empinfo=$this->CheckingRecord($empinfo);
        $socso=$this->Checkingerrorcode($socso);
        $certificate=$this->Checkingerrorcode($certificate);
        $deathdetail=$this->Checkingerrorcode($deathdetail);
        $bankinfo =$this->Checkingerrorcode($bankinfo);
        $otinfo =$this->CheckingRecord($otinfo);
        $guardianinfo =$this->CheckingRecord($guardianinfo);
        $wages =$this->CheckingRecord($wages);
        // dd($wages);


        if ($branchs && $branchs!='') {
            $branch = $branchs->{'branchs'};
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
        
        if(!empty($state)||$state!=null){
			$state=$state->state_branch;
		} else {
			$state=null;
        }
        
        //zik fpminfo
        // $this->getFpmInfo();
        $jsondecodeFpmInfo = $this->getFpmInfo();
        // if ($jsondecodeFpmInfo && $jsondecodeFpmInfo!='')
        // {
        //     $applicantinfo = $jsondecodeFpmInfo;
        // }
        // else 
        // {
        //     $applicantinfo = "";
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

        // $wages = $data;

        $contrinfo = array();
        $data = array();

        if ($req->action == 'Preview') {
            return view(
                'scheme.noticeDeath.newClaim.PK.preview.main',
                compact('ref_table', 'empinfo', 'branch', 'doclist_select', 'doclist', 'obprofile','tag_case_info',
                'casetype', 'ref_table2', 'bankinfo', 'docinfo', 'remark', 'husinfo', 'wages', 'deathdetail', 'socso', 'state', 'confirmation', 'certificate', 'preview')
            );
        }
            
        return view(
            'scheme.noticeDeath.newClaim.PK.index',
            compact('ref_table', 'empinfo', 'branch', 'doclist_select', 'doclist', 'confirmation', 'obprofile', 'bankinfo', 'docinfo', 'remark', 'wages', 'husinfo', 'socso', 
            'deathdetail', 'state', 'applicantinfo','confirmation', 'certificate', 'ref_table2', 'preview','otinfo','guardianinfo','tag_case_info','casetype')
        );

    }

    //Get getOtGuardianBankInfo From DB //anis baru
    public function getOtGuardianotbankinfo(Request $request)
    {    
  
            $otid = $_GET['otid'];
            $caserefno = session('caserefno');

            $client = new Client();
            $url = config('services.endpoint.url');

            $token = session('API_token');
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => $token
                ],
                'query' => [
                    "caserefno"=> $caserefno,
                    "otid"=> $otid,
                ],
            ];
            
            try{

                $response = $client->get($url.'/scheme/getOtGuardianotbankinfo',$options)->getBody();
                return $response;

            } catch (GuzzleHttp\Exception\BadResponseException $e){
                
                return 'error';
            }
    }
  
     //anis baru
     public function getGuardian(Request $request)
     {    
        $ids=session('ids');
       
        $caserefno=$ids['caserefno'];
        $otid = $request['otid'];

 
        $client = new Client();
        $url = config('services.endpoint.url');

        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                "caserefno"=> $caserefno,
                "otid"=> $otid,
            ],
        ];
         
         try{
 
             $response = $client->get($url.'/scheme/getGuardian',$options)->getBody();
             return $response;
 
         } catch (GuzzleHttp\Exception\BadResponseException $e){
             
             return 'error';
         }
 
     }
  
    //anis baru
    public function delete_ot(Request $request)
    {    
        $otid = $request->id;
        // dd($otid);
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $response = $this->sendRequest('Delete OT', 'POST', 'scheme/delete_ot', [], ['caserefno'=>$caserefno,'otid'=>$otid]);
          
        $errorcode = $response->{'errorcode'};
        if ($errorcode == 0)
        {
            toast('Successfully Deleted','success');
            return redirect()->back()->withInput(['tab'=>'dependant_profiles']);
        }
        else
        {
            toast('Failed to delete!','error');
            return redirect()->back()->withInput(['tab'=>'dependant_profiles']);
        }
    }
  
   
    //anis baru
    public function postOtInfo(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $otinfo = array();
        $guardianinfo = array();
        $bankinfo = array();


            //--DEPENDENT--//
            $name = $req->name;
            $idtype = $req->idtype;
            $idno = $req->idno;

            $uniquerefno = $req->uniquerefno;
            $passportno = $req->passportno;
            $passportexp = $req->passportexp;
            $passportexp = str_replace('-', '', $passportexp);
            $oldpassportno = $req->oldpassportno;
            $dob = $req->dob;
            $dob = str_replace('-', '', $dob);
            $relationship = $req->relationship;    
            $marriedobdate = $req->marriedobdate;
            $marriedobdate = str_replace('-', '', $marriedobdate);
            $otsts = $req->otsts; 
            $dodeath = $req->dodeath;
            $dodeath = str_replace('-', '', $dodeath);
        
            $disablewhen = $req->disablewhen;
            $marrieddate = $req->marrieddate;
            $marrieddate = str_replace('-', '', $marrieddate);
            $remarrieddate = $req->remarrieddate;
            $remarrieddate = str_replace('-', '', $remarrieddate);
            $add1 = $req->add1;
            $add2 = $req->add2;
            $add3 = $req->add3;
            $postcode = $req->postcode;
            $city = $req->city;
            $statecode = $req->statecode;
            $pobox = $req->pobox;
            $lockedbag = $req->lockedbag;
            $wdt = $req->wdt;
            $telno = $req->telno;
            $mobileno = $req->mobileno;
            $email = $req->email;
            $guardian = $req->guardian;
          
            $studystartdate = $req->studystartdate;
            $studystartdate = str_replace('-', '', $studystartdate);
            $studyenddate = $req->studyenddate;
            $studyenddate = str_replace('-', '', $studyenddate);
            $studysts = $req->studysts;
            $edulvl = $req->edulvl;
            $eduothers = $req->eduothers;
            $coursename = $req->coursename;
            $uniname = $req->uniname;
            $adoptdate = $req->adoptdate;

            //---GUARDIAN--//

            $guardianid = $req->guardianid;

            $g_name = $req->guardian_name;
            $g_idtype = $req->guardian_idtype;
            $g_idno = $req->guardian_idno;
            $g_add1 = $req->guardian_add1;
            $g_add2 = $req->guardian_add2;
            $g_add3 = $req->guardian_add3;
            $g_postcode = $req->guardian_postcode;
            $g_city = $req->guardian_city;
            $g_statecode = $req->guardian_statecode;
            $g_pobox = $req->guardian_pobox;
            $g_lockedbag = $req->guardian_lockedbag;
            $g_wdt = $req->guardian_wdt;
            $g_telno = $req->guardian_telno;
            $g_mobileno = $req->guardian_mobileno;
            $g_email = $req->guardian_email;

              //--BANK INFO--//

            // $accexist= $req->accexist;
            $paymode= $req->paymode;
            $bankloc= $req->bankloc;
            $reasonnoacc= $req->reasonnoacc;

           
            $country = $req->country;
            $currency = $req->currency;
            $swiftcode = $req->swiftcode;
            $bsbcode = $req->bsbcode;


            if($bankloc == 'L'){
                $accno= $req->localaccno;
                $acctype= $req->localacctype;
                $bankaddr= $req->localbankaddr;
                $bankname= $req->localbankname;

            }else if($bankloc == 'O'){
                $accno = $req->ovaccno;
                $acctype = $req->ovacctype;
                $bankaddr = $req->ovbankaddr;
                $bankname= $req->ovbankname;

            }else{
                $accno= '';
                $acctype= '';
                $bankaddr= '';
                $bankname='';

            }

            if ($otsts == '6') {

                $disability = 'Y';
            }else{
                $disability = 'N';
            }

                $profile['OT'] = ['uniquerefno'=>$uniquerefno, 'idno'=>$idno, 'idtype'=>$idtype, 'name'=>$name,
                'relationship'=>$relationship, 'dob'=>$dob, 'passportno'=>$passportno, 'passportexp'=>$passportexp, 'oldpassportno'=>$oldpassportno, 'otsts'=>$otsts, 'dodeath'=>$dodeath,
                'add1'=>$add1, 'add2'=>$add2, 'add3'=>$add3, 'postcode'=>$postcode, 'city'=>$city, 'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'statecode'=>$statecode,
                'wdt'=>$wdt, 'telno'=>$telno, 'mobileno'=>$mobileno, 'email'=>$email, 'guardian'=>$guardian,
                
                'marrieddate'=>$marrieddate, 'remarrieddate'=>$remarrieddate, 'marriedobdate'=>$marriedobdate,
                'disability'=> $disability, 'disablewhen'=>$disablewhen, 
                'studystartdate'=>$studystartdate, 'studyenddate'=>$studyenddate, 'studysts'=>$studysts, 'edulvl'=>$edulvl, 'eduothers'=>$eduothers, 'coursename'=>$coursename,
                'uniname'=>$uniname, 'adoptdate'=>$adoptdate];

                $profile['GD'] = ['uniquerefno'=>$guardianid, 'idno'=>$g_idno, 'idtype'=>$g_idtype, 'name'=>$g_name,
                'add1'=>$g_add1, 'add2'=>$g_add2, 'add3'=>$g_add3, 'postcode'=>$g_postcode, 'city'=>$g_city, 'pobox'=>$g_pobox, 'lockedbag'=>$g_lockedbag, 'statecode'=>$g_statecode,
                'wdt'=>$g_wdt, 'telno'=>$g_telno, 'mobileno'=>$g_mobileno, 'email'=>$g_email];
       
        $url = config('services.endpoint.url');
		$token = session('API_token');
        
        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],
            'json' =>  [
                'caserefno'=>$caserefno,
                'idno'=>$idno, 
                'idtype'=>$idtype,
                'profile'=>$profile,
                'reasonnoacc'=>$reasonnoacc,
                'paymode'=>$paymode, 
                'bankloc'=>$bankloc, 
                'currency'=>$currency,
                'bankname'=>$bankname, 
                'swiftcode'=>$swiftcode, 
                'bsbcode'=>$bsbcode, 
                'accno'=>$accno, 
                'bankaddr'=>$bankaddr, 
                'acctype'=>$acctype, 
                'country'=>$country
                ]
            ];

        
        $client = new Client();

        try{

            $response = $client->post($url.'/scheme/UpdOTInfoPK', $options)->getBody();
            $json = $response->getContents();
            toast('Successfully Created','success');
            return $json;
			

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Get','error');
        }
        
        
        
     }

    //POST APPLICANT AT DB //zik
    public function postFpmInfo(Request $req)
    {

        $ids=session('ids');
        $caserefno = $ids['caserefno'];
        //$uniquerefno = $ids['uniquerefno'];
        // dd($uniquerefno);

        //applicant info
        $otid = $req->otid;
        $uniquerefno = $req->uniquerefno;
        $name = $req->name;
        $relation = $req->relation;
        $idtype = $req->idtype;
        $idno = $req->idno;
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $statecode = $req->statecode;
        $dob = $req->dob;
        $city = $req->city;
        $postcode = $req->postcode;
        $pobox = $req->pobox;
        $lockedbag = $req->lockedbag;
        $wdt = $req->wdt;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $amount = $req->amount;

        //bank info

        $paymode = $req->paymode;
        $bankloc= $req->bankloc;
        if($bankloc == 'L'){
            $bankname= $req->bankcode;
            $bankaddr= $req->bankaddr;
            $accno= $req->localaccno;
            $acctype= $req->localacctype;

        }else if($bankloc == 'O'){
            $bankname = $req->ovbankname;
            $bankaddr = $req->ovbankaddr;
            $accno = $req->ovaccno;
            $acctype= $req->ovacctype;
        }
        else
        {
            $bankname= '';
            $bankaddr= '';
            $accno= '';
            $acctype='';
        }
        $reasonnoacc = $req->reasonnoacc;
        $country = $req->country;
        $currency = $req->currency;
        $swiftcode = $req->swiftcode;
        $bsbcode = $req->bsbcode;
        
        $applicantinfo['FPM'] = [       'name'=>$name,
                                        'uniquerefno'=>$uniquerefno,
                                        'otid'=>$otid,
                                        'relation'=>$relation, 
                                        'add1'=>$add1, 
                                        'add2'=>$add2,
                                        'add3'=>$add3,
                                        'statecode'=>$statecode,
                                        'dob'=>$dob,
                                        'city'=>$city, 
                                        'postcode'=>$postcode, 
                                        'pobox'=>$pobox,
                                        'lockedbag'=>$lockedbag,
                                        'wdt'=>$wdt,
                                        'telno'=>$telno, 
                                        'mobileno'=>$mobileno,
                                        'email'=>$email, 
                                        'amount'=>$amount, 
                                ];


        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
		$options = [
            'exceptions' => false,
			'headers' => [
                
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
                'Authorization' => $token
            ], 
                'json' => [
        
                    'profile'=>$applicantinfo, 
                    'paymode'=>$paymode, 
                    'bankloc'=>$bankloc, 
                    'reasonnoacc'=>$reasonnoacc, 
                    'bankname'=>$bankname, 
                    'bankaddr'=>$bankaddr, 
                    'accno'=>$accno,
                    'acctype'=>$acctype,
                    'countrycode'=>$country, 
                    'currency'=>$currency, 
                    'swiftcode'=>$swiftcode, 
                    'bsbcode'=>$bsbcode, 
                    'caserefno'=>$caserefno,
                    'idtype'=>$idtype, 
                    'idno'=>$idno,
                ]
            ];
            // return $options;

        try {
            $response = $client->post($url.'/scheme/postfpminfo', $options)->getBody()->getContents();
            //return $response;

            $jsondecode = json_decode($response);
             //dd($jsondecode);
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


    //zik getFpmInfo
    public function getFpmInfo()
    {    
        $ids=session('ids');
        $caserefno = $ids['caserefno'];
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
       
        $response = $client->get($url.'/scheme/getfpminfo', $options)->getBody();
        $content = $response->getContents();
        $jsondecodeFpmInfo = $content;
        return $jsondecodeFpmInfo;
       
    }

    //zik delete fpminfo
    public function deleteFpmInfo(Request $req)
    {   
        $ids=session('ids');
        $caserefno = $ids['caserefno'];
        $otid = $req->id;
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ],
            'json' => [
                'caserefno' => $caserefno,
                'fpm_id' => $otid
            ],
        ];
        $response = $client->post($url.'/scheme/deleteFpmInfo',$options)->getBody();
		$content = $response->getContents();
        return $content;
    }

    //zik updatefpminfo
    public function updatefpminfo(Request $req)
    {  
        $ids=session('ids');
        $caserefno = $ids['caserefno'];
        $fpm_uniquerefno = $req->fpm_edit;
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ],
            'json' => [
                'fpm_caserefno' => $caserefno,
                'fpm_uniquerefno' => $fpm_uniquerefno
            ],
        ];
        $response = $client->get($url.'/scheme/updatefpminfo', $options)->getBody();
        $content = $response->getContents();
        return $content;
    }
     
    public function getEmployer(&$emprecord)
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

        $jsondecodeEmployer = json_decode($employer);
        // dd($jsondecodeEmployer);

        if ($jsondecodeEmployer && $jsondecodeEmployer!='')
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'data'};
            }
            else
            {
                $emprecord = null;
            }
        }

    }    

    //POST DEATH DETAILS AT DB 
    public function postDeath(Request $req) //Afiqah
    {
        $ids=session('ids');
        // dd($ids);
        $death_id = $ids['caserefno'];
        
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
                "deathcause"=> $req->deathcause,
                "accdeath"=> $req->accdeath,
                "obsts"=>$req->obsts,
                "dodeath"=> $req->dodeath,
                "caserefno" => $death_id
            ],
        ];
        // dd($options);
        try {
            $response = $client->post($url.'/scheme/upddeathinfo', $options)->getBody()->getContents();
            $jsondecode = json_decode($response);

            toast('Save successful', 'success');
            return redirect()->back();
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            toast('Save unsuccessful', 'error');
            return redirect()->back();
        }
    }

    public function getDeathDetails(&$deathdetail, $death_id) //Afiqah
    {
        $client = new Client();

        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'json' => [
                "deathcause"=> $deathcause,
                "accdeath"=> $accdeath,
                "obsts"=>$obsts,
                "dodeath"=> $dodeath,
                "caserefno" => $death_id
            ],
        ];
    
        $response = $client->get($url.'/scheme/getdeathinfo?caserefno='.$death_id, $options)->getBody();
        $jsondecodeDeath = json_decode($response->getContents());
        // dd($jsondecodeDeath);
        // dd($options);
        if(!empty($jsondecodeDeath)|| $jsondecodeDeath!=null)
        {
            $errorcode = $jsondecodeDeath->{'errorcode'};
            if ($errorcode == 0)
            {
                $deathdetail = $jsondecodeDeath->{'data'};
            }
            else
            {
                $deathdetail = null;
            }
        }
    }

    // POST DEATH SEKALI DGN MC & ACCIDENT
    public function postDeathWithMC(Request $req) //Afiqah
    {
        $accdeath = $req->accdeath;

        if ($accdeath == 'Y') {

            //LETAK DEATH, ACCIDENT DGN MC PUNYA CODE

        }

        else {

            // LETAK DEATH, ACCIDENT DGN MC TAPI VALUE ACCIDENT DGN MC AKAN NULL
        }
        
    }

    //Get GUARDIAN From DB -- ANIS
    public function getGuardianInfo(&$guardianinfo,$caserefno)
    {    
        $client = new Client();
        $url = config('services.kaksu_endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                "caserefno"=> $caserefno,
            ],
        ];
        
      
        $response = $client->get($url.'/wsmotion/getguardianinfo', $options)->getBody();
        $jsondecodeGuardianInfo = json_decode($response->getContents());
       
        
        if (!empty($jsondecodeGuardianInfo) || $jsondecodeGuardianInfo!='')//anis
        {
            $record = $jsondecodeGuardianInfo->{'record'};
            if ($record > 0)
            {
                $guardianinfo = $jsondecodeGuardianInfo->{'guardianinfo'};
            }
            else
            {
                $guardianinfo = null;
            }
        }
        else
        {
            $guardianinfo =null;
        }
    }
    
    //Get CONFIRMATION From DB
    public function getConfirmation(&$jsondecodeConfirmation)
    {

        $caserefno = session('caserefno');
        $uniquerefno = session('uniquerefno');
        // $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getconfirmation?caserefno='.$caserefno;
        // return $url;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeConfirmation = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //POST CONFIRMATION AT DB 
    public function postConfirmation(Request $req)
    {
        if ($req->action== 'Save')
        {
            $no = count($req->idno);

            $jsection = array();

            $caserefno = session('caserefno');
            $operid = session('loginname');
            $brcode = session('loginbranchcode');

            $uniquerefno = $req->uniquerefno;
            $idno = $req->idno;
            $idtype = $req->idtype;
            $jrecv = $req->jrecv;
            $jrecvdate = $req->jrecvdate;
            $jrecvdate = str_replace('-', '', $jrecvdate);
            $preferedbranch = $req->brname;
            $stampdate = $req->stampdate;
            $stampdate = str_replace('-', '', $stampdate);
            $remarks = $req->remarks;
            // dd($uniquerefno);

        for($i = 0; $i<$no; $i++)    
        {

            $jsection[$i] = ['idno'=>$idno[$i], 'idtype'=>$idtype[$i], 'uniquerefno'=>$uniquerefno[$i],'jrecv'=>$jrecv[$i], 'jrecvdate'=>$jrecvdate[$i]];
           
        }
        
        $data = ['caserefno'=>$caserefno, 'operid'=>$operid, 'brcode'=>$brcode, 'applicantinfo'=>$jsection,'preferedbranch'=>$preferedbranch, 'stampdate'=>$stampdate, 'remarks'=>$remarks];
        // return $data;


        $jsondata = json_encode($data);
        // return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updconfirmation';
            

            $ch = curl_init();
            
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
            curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
            
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

            curl_close($ch);

            $jsondecodeConfirmation = json_decode($result);


            // return $jsondecodeConfirmation;
            // return $jsondata.'+'.$result;

            $errorcode = $jsondecodeConfirmation->{'errorcode'};
            if ($errorcode == 0)
            {
        
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save Successful');
            }
            else
            {
      
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save Unsuccessful');
            }
        }
        else if ($req->action== 'Submit')
        {
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno= session('caserefno');
            $wbid = session('wbid');//chg07072019

            $prevschemerefno='';


            $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'prevschemerefno'=>$prevschemerefno,
                'wbid'=>$wbid];//chg07072019


            $jsondata = json_encode($datatosend);

            //return $jsondata;


            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/submit';


            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');

            curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
            curl_setopt($ch, CURLOPT_HTTPGET, FALSE);

            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

            curl_close($ch);

            $jsondecode = json_decode($result);
            //return $result;
            $errorcode = $jsondecode->{'errorcode'};

            if ($errorcode == 0)
            {
                $schemerefno = $jsondecode->{'schemerefno'};
                $casestatus = $jsondecode->{'casests'};
                $source = $jsondecode->{'source'};
                //session(['messageconf'=>'Scheme Reference No: '.$schemerefno]);
                session(['schemerefno'=>$schemerefno]);
                session(['casestatus'=>$casestatus]);
                session(['source'=>$source]);
                return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
            }
            else
            {
                $errordesc = $jsondecode->{'errordesc'};
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Submission unsuccessful. '.$errordesc);
            }
        }

        
    }
        
    //Get APPLICANT From DB
    public function getApplicantInfo(&$applicantinfo,$caserefno)
    {    
        
        $client = new Client();
        $url = config('services.kaksu_endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                "caserefno"=> $caserefno,
            ],
        ];
        
        $response= $client->get($url.'/wsmotion/getapplicantinfo', $options)->getBody();
        $jsondecodeApplicantinfo = json_decode($response->getContents());
        if(!empty($jsondecodeApplicantinfo)|| $jsondecodeApplicantinfo!=null)
        {
            
            $record = $jsondecodeApplicantinfo->record;
            if ($record > 0)
            {
                $applicantinfo = $jsondecodeApplicantinfo->applicantinfo;
            }
            else
            {
                $applicantinfo = null;
            }
        }
    }

    public function getWages(&$contrinfo, &$wagesinfo)//&$newwages)
    {
        //     $caserefno = session('caserefno'); // get session
        //     $idno = session('idno'); // get session
        //     $month = session('accdmonth');
        //     $year = session('accdyear');

        //     if ($month == '') {
        //         $month = date('m');
        //     }
        //     if ($year == '') {
        //         $year = date('Y');
        //     }

        //     $count = '6';

        //     $client = new Client();

        //     $url = config('services.endpoint.url');//kai
        //     $token = session('API_token');

        //     $options = [
        //         'headers' => [
        //             'Authorization' => $token
        //         ],
        //         'query' => [
        //             'caserefno' => $caserefno,
        //             'month' => $month,
        //             'year' => $year,
        //             'count' => $count
        //         ],

        //     ];

        //     // dd($options);
        //     $response = $client->get($url.'wages?caserefno='.$caserefno.'&month='.$month.'&year='.$year.'&count='.$count)->getBody();
        //     $jsondecodeWages = json_decode($response->getContents());
        //     // dd($jsondecodeWages);

        //     if ($jsondecodeWages != null && $jsondecodeWages != '') {
        //         $record = $jsondecodeWages->{'record'};

        //         if ($record > 0) {
        //             $wagesinfo = $jsondecodeWages->{'data'};
        //         } else {
        //             $wagesinfo = null;
        //         }
        //     }


        //     $url = env('ASSIST_IP', 'localhost').'/wsassistsimulation/contribution/';//kai
        //     $token = session('API_token');
        //     $options = [
        //         'headers' => [
        //             'Authorization' => $token
        //         ],
        //         'query' => [
        //             'idno' => $idno
        //         ],

        //     ];

        //     // dd($options);
        //     $newwages = array();
        //     $count = 0;

        //     $response = $client->get($url.$idno)->getBody();
        //     $jsondecodeContribution = json_decode($response->getContents());
        //     // dd($jsondecodeContribution);

        //     if ($jsondecodeContribution && $jsondecodeContribution!='') {
        //         $contrinfo = $jsondecodeContribution->{'contributioninfo'};
        //     }
        // $contrinfo = null;
        // $wagesinfo = null;

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
        $result =  json_encode(array('record' => 2, 'data' => $data));

        return $result;
    }


    public function getWagesContrpayable(Request $request)
    {
        // return Input::get('orefno');

        $wages = $_GET['wages'];

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ]
        ];

        try {
            // $response = $this->sendRequest('GET', 'scheme/getWagesContrpayable', [], ['wages' => $wages ]);
            $response = $client->get($url.'/scheme/getWagesContrpayable?wages='.$wages, $options)->getBody();
            return $response;
        } catch (RequestException $e) {
            toast('Web Service Problem', 'error');
            return null;
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

        $response = $client->get($url.'/scheme/gethusinfo', $options)->getBody();
        $jsondecodehus = json_decode($response->getContents());
        //  dd($jsondecodehus);
        if (empty($jsondecodehus)|| $jsondecodehus == null || $jsondecodehus->record == '0') {
            $jsondecodehus=null;
        }
    }

    public function Submit(Request $req)
    {
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno= session('idno');
        $caserefno = $req->caserefno;//session('caserefno');
        
        $preferedbranch = $req->brname;
        
        $prevschemerefno='';
        $stampdate = $req->stampdate;
        $stampdate = str_replace('-', '', $stampdate);
        /*if (strlen($stampdate) == 10)
        {
            
            $stampdate = substr($stampdate,6,4).substr($stampdate,3,2).substr($stampdate,0,2);
        }*/
        
        //$noticedate = date('Ymd');
        $jrecv = $req->sectjrecv;
        $jrecvdate = $req->sectjrecvdate;
        $jrecvdate = str_replace('-', '', $jrecvdate);
        
        $remarks = $req->remarks;
        
        $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'idno'=>$idno, 'prevschemerefno'=>$prevschemerefno,
                        'stampdate'=>$stampdate, 'preferedbranch'=>$preferedbranch, 'caserefno'=>$caserefno,
                        'jrecv'=>$jrecv, 'jrecvdate'=>$jrecvdate, 'remarks'=>$remarks];
        
        
        $jsondata = json_encode($datatosend);
        
        //return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/accident/submit';
        

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        curl_close($ch);
        
        $res = json_decode($result);
        //return $result;
        $retcode = $res->{'errorcode'};
        
        if ($retcode == 0)
        {
            $schemerefno = $res->{'schemerefno'};
            session(['messageconf'=>'Scheme Reference No: '.$schemerefno]);
            session(['accdrefno'=>'','caserefno'=>'','idno'=>'']);
            return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
        }
        else
        {
            return redirect()->back()->with('messageconf','Save unsuccessful');
        }
        
    }

   
}