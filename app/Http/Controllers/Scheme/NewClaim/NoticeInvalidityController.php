<?php

namespace App\Http\Controllers\scheme\NewClaim;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use PDF;
use App\Letter;
use App\Http\Resources\LetterRe as LetterReResource;



class NoticeInvalidityController extends CommonController
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

        $preview='ilatpreview';

        $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
        'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
        'gender','doc_sts','docsrc','doc_type_oc','f34submitby','ivattendees','correspaddtype','intvloc',];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        if(empty($ref_table)||$ref_table==null)
        {
            toast(' Reftable Not Found', 'error');
            return redirect()->route('logout');
        }
        
      
        $remark = $this->sendRequest('remarks','GET', 'common/remarks',['caserefno' => $caserefno]);
        $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype]);
        $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall');
        $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno ]);
        $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);
     
        $obprofile = $this->sendRequest('Ob Information','GET', 'scheme/obprofile', [], ['caserefno'=>$caserefno ]);
        $ilatinfo=$this->sendRequest('Ilat Information','GET','scheme/ilatInfo/'.$caserefno);
        
        $emphistory = $this->sendRequest('Employment History','GET', 'scheme/emphistory',[],['caserefno' => $caserefno]);
        $wages = $this->sendRequest('Wages','GET', 'scheme/getspiwages',[],['caserefno' => $caserefno]);
        $socso = $this->sendRequest('Socso','GET', 'scheme/socso', [], ['caserefno' => $caserefno ]);
        $certificate = $this->sendRequest('Certificate','GET', 'scheme/certificate', [], ['caserefno' => $caserefno ]);
        $bankinfo = $this->sendRequest('Bank Information','GET', 'scheme/bankinfo', [], ['caserefno' => $caserefno ]);
        $confirmation = $this->sendRequest('Confirmation','GET', 'scheme/getconfirmation',[], ['caserefno' => $caserefno ]);
        $ioappt = $this->sendRequest('Appointment','GET', 'scheme/ioappointment',['ia_caserefno' => $caserefno ]);
        $tag_case_info = $this->sendRequest('Tag Case Info','GET', 'common/tag_case_info/'.$caserefno);
        
      
        $doclist=$this->Checking($doclist);
        $doclist_select=$this->Checking($doclist_select);
        $tag_case_info=$this->Checking($tag_case_info);
        
        $docinfo=$this->Checking($docinfo);
        $remark=$this->Checking($remark);
        $ioappt=$this->Checking($ioappt);
       
        $bankinfo =$this->Checkingerrorcode($bankinfo);
        $socso=$this->Checkingerrorcode($socso);
        $certificate=$this->Checkingerrorcode($certificate);

        $obprofile=$this->CheckingRecord($obprofile);
        $emphistory=$this->CheckingRecord($emphistory);
        $confirmation=$this->CheckingRecord($confirmation);
        $wages=$this->CheckingRecord($wages);

		if(!empty($state)||$state!=null){
			$state=$state->state_branch;
		} else {
			$state=null;
        }
        $ilatinfo=(isset($ilatinfo->message))?$ilatinfo->message :null;
        if($ilatinfo=="Record not found!"||$ilatinfo==null)
        {
            $ilatinfo=null;
        }
        else{
            $ilatinfo=$ilatinfo->data;
        }
      
        
      
 
        $this->getWrongNoticeType($jsonWrongNoticeType);
        $this->getSendNotification($jsonSendNotification);
        $sendnotification=$jsonSendNotification;
        $this->getqueryOpinion($jsonQueryOpinion, $caserefno);
    
        //hardcode
        $this->getCaseInfo($getcaseinfo);
        $this->getCreditPeriod($getCreditPeriod);
        $this->getSchemeQualifying($schemeQualifying);
        $this->getWagesInfo($getwages);

        $datablade=['ref_table','doclist_select','doclist','obprofile', 'bankinfo','docinfo','ilatinfo','confirmation','remark',
        'socso','contrinfo','wages','wagesinfo','state','sendnotification','certificate','preview','emphistory','branch','casetype',
        'getcaseinfo','schemeQualifying','getCreditPeriod','getwages','ioappt','tag_case_info'];
        if ($req->action == 'Preview')
        {
            return view('scheme.noticeInvalidity.newClaim.PK.preview.main',compact($datablade));
        }

        return view('scheme.noticeInvalidity.newClaim.PK.index',compact($datablade));

        // return view('scheme.noticeInvalidity.newClaim.pk.index',
        //   [ 'ref_table'=>$ref_table,'doclist_select'=>$alldoclist,'doclist'=>$doclist,
        //     'obprofile'=>$obprofile,'contribution'=>$contrinfo,'wagesinfo' => $wagesinfo,
        //     'bankinfo'=>$bankinfo,'docinfo'=>$jsondocument,'empinfo'=>$empinfo,'ilatinfo'=>$jsonIlatInfo,'confirmation'=>$confirmation,
        //     'wrong_notice'=>$jsonWrongNoticeType,'getCreditPeriod'=>$jsonCreditPeriod,'getwages'=>$jsonWagesInfo,'query_opinion'=>$jsonQueryOpinion,
        //     'getcaseinfo'=>$jsonCaseInfo,'getSchemeQualifying'=>$jsonSchemeQualifying,'sendnotification'=>$jsonSendNotification,'remark'=>$remark
        //     ]
        // );
    }

    public function postIlat_info(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $options =  [
                'caserefno' => $caserefno,
                'morbiddesc' => $req->descriptionmorbidity,
                'morbidyear' => $req->year_morbidity,
                'inemployment' => $req->engage,
                'endempdate' =>$req->dafe_of_cessation,
                ];
        $content = $this->sendRequest('Invalidity Information','POST', 'scheme/ilatInfo',$options);

       if(!empty($content)||$content!=null)
       {
            if($content->success == true)
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
    public function postWages(Request $req)
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        foreach($req->wages_rm as $idx=>$wages)
        {
            if($wages!=null){
                $wagesinfo[]=[
                    'year'=>$req->wages_year[$idx],
                    'month'=>$req->wages_month[$idx],
                    'empcode'=>$req->wages_empcode[$idx],
                    'wages'=>$wages
                ];
            }

        }
        $content = $this->sendRequest('Wages','POST', 'scheme/updspiwages',['caserefno'=>$caserefno,'wagesinfo'=>$wagesinfo]);

        if(!empty($content)||$content!=null)
        {
            if($content->errorcode == 0)
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
    public function postWrongNoticeType(Request $req)
    {
        $caserefno = session('caserefno');
        $recnotice = $req->dd_recommendation;
        $justification = $req->justification;

        $dataSet = [
            'caserefno' => $caserefno,
            'recnotice' =>$recnotice,
            'justification' =>$justification,
        ];
        toast('Save successful', 'success');
        return redirect()->back();
    }

    public function getWagesInfo(&$getwages)
    {
        $no1 = array( 'emp_code' => "0001",'emp_name' =>"Iqmal Johar",'year' =>"2018",'month' =>"Descember"
        , 'wages' => "2 000",'assume_wages' => "2 300",'contribution_paid' =>"500",'contribution_payable' =>"200",'contribution_surplusDeficit'=>"Nothing Is Posbile"  );
        $no2 = array( 'emp_code' => "0004",'emp_name' =>"Ahmad Najmi",'year' =>"2013",'month' =>"January"
        , 'wages' => "4 000",'assume_wages' => "2 700",'contribution_paid' =>"1000",'contribution_payable' =>"2100",'contribution_surplusDeficit'=>"Coding Is The Best"  );
        $no3 =array( 'emp_code' => "0012",'emp_name' =>"Shauqi Shazwan",'year' =>"2010",'month' =>"March"
        , 'wages' => "7 000",'assume_wages' => "3 700",'contribution_paid' =>"2000",'contribution_payable' =>"2700",'contribution_surplusDeficit'=>"Chill With Starbuck"  );

        $getwages =
        [
           $no1,$no2,$no3
        ];
    }
    public function getCreditPeriod(&$getCreditPeriod)
    {
        $no1 = array( 'benefit_no' => "0001",'accident_date' =>"20/01/2019",'year' =>"2018",'month' =>"Descember"
        , 'paid_start' => "01/02/2019",'paid_end' => "05/03/2019",'contri_paid'=>"3 000");
        $no2 = array( 'benefit_no' => "0012",'accident_date' =>"17/07/2017",'year' =>"2017",'month' =>"August"
        , 'paid_start' => "03/03/2019",'paid_end' => "08/03/2019",'contri_paid'=>"3 400");
        $no3 = array( 'benefit_no' => "0009",'accident_date' =>"17/06/2011",'year' =>"2011",'month' =>"September"
        , 'paid_start' => "07/03/2019",'paid_end' => "11/03/2019",'contri_paid'=>"11 700");

        $getCreditPeriod =
        [
           $no1,$no2,$no3
        ];
    }

    public function getCaseInfo(&$getcaseinfo)
    {
        $getcaseinfo =[
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
    public function getContributionSection(&$jsonContributionSection)
    {
        $add_employer = array( 'year' => "2015",'month' =>"December",'wages' =>"1 000",'sources'=>"epf",'emp_recommended'=>'Yes');
        $add_employer1 = array( 'year' => "2010",'month' =>"November",'wages' =>"4300",'sources'=>"socso",'emp_recommended'=>'Yes');
        $add_employer2 = array( 'year' => "2012",'month' =>"March",'wages' =>"4 500",'sources'=>"epf",'emp_recommended'=>'Yes');
        $add_employer3 = array( 'year' => "2019",'month' =>"Appril",'wages' =>"1 700",'sources'=>"socso",'emp_recommended'=>'Yes');

        $no2 = array( 'emp_code' => "009",'emp_name' =>"Mohammad Iqmal",'emp_start_date' =>"20/07/2015",'emp_end_date' =>"27/07/2015",'add_employer'=>$add_employer,'recommend_status' =>"Yes");
        $no3 = array( 'emp_code' => "012",'emp_name' =>"Nana mona",'emp_start_date' =>"10/05/2015",'emp_end_date' =>"17/09/2015",'recommend_status' =>"No");
        $no4 = array( 'emp_code' => "064",'emp_name' =>"Ustazah Mastura",'emp_start_date' =>"10/02/2016",'emp_end_date' =>"27/07/2019",'recommend_status' =>"No");

        $jsonCaseInfo =[$no2,$no3,$no4];
    }
    public function getSchemeQualifying(&$schemeQualifying)
    {
        $schemeQualifying =
        [
          'scheme_entry_date' => "20/01/2019",
          'age_notice_date' =>"18",
          'age_scheme_data' =>"20/09/2019",
          'eligibility_scheme' =>"Eligible",
           'statutory_body' => "Yes",
           'type_statutory_body'=>"Private Statutory Body",
           'emp_start_date' => "05/03/2011",
           'emp_end_date'=>"07/06/2018",
           'total_months'=>"12",
           'total_months_contributed'=>'19',
            'qualifying_condition'=>"Perfect",
            'suffering_condition'=>"Yes",
            'capable_engaging'=>"Yes",
            'gainfully_employed' =>"No"
        ];
    }
    
  
}
