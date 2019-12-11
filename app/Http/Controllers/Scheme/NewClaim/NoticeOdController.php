<?php

namespace App\Http\Controllers\scheme\NewClaim;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class NoticeOdController extends CommonController
{
    
    public function index(Request $req)
    {
        $ids = session('ids');

        $caserefno = $ids['caserefno'];
        // dd($caserefno);
        $empcode = $ids['empcode'];
        $idtype = $ids['idtype'];
        $idno = $ids['idno'];
        $casetype = $ids['casetype'];
        $uniquerefno = $ids['uniquerefno'];

        $time=strtotime('2019-10-04');
        $month=date("n", $time);
        $year=date("Y", $time);
        $count = '6';

        if ($month == '') {
            $month = date('m');
        }
        if ($year == '') {
            $year = date('Y');
        }

        $data_reftable = ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','doc_type','doc_cat','state','national','pay_mode','occupation', 'work_sts','indus_code', 'doc_sts','docsrc','doc_type_oc','f34submitby'];

        $data_reftable2 = ['subbusslist', 'industrycode', 'svctype','buss_entity', 'sub_bus_ent','subindustry'];


        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        $ref_table2 = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable2 ]);
        // dd($ref_table2);

        if(empty($ref_table)||$ref_table==null)
        {
            toast(' Reftable Not Found', 'error');
            return redirect()->route('logout');
        }

        if(empty($ref_table2)||$ref_table2==null)
        {
            toast(' Reftable Not Found', 'error');
            return redirect()->route('logout');
        }


        $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype]);
        $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall');
        $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno ]);
        $remark = $this->sendRequest('Remarks','GET', 'common/remarks',['caserefno' => $caserefno]);
        $obprofile = $this->sendRequest('Insured Pereson Information', 'GET', 'scheme/obprofile', [], ['caserefno'=>$caserefno ]);
        $empinfo = $this->sendRequest('Employer Information','GET', 'scheme/getemployer', [], ['caserefno' => $caserefno ]);
        $oddata = $this->sendRequest('Occupational Disease Information','GET', 'scheme/OdInfo/'.$caserefno, [], []);
        $emphistory = $this->sendRequest('Employment History','GET', 'scheme/emphistory',[],['caserefno' => $caserefno]);
        $wages = $this->sendRequest('Wages', 'GET', 'scheme/wages', [], ['caserefno'=> $caserefno,'month'=>$month,'year'=>$year,'count'=>$count ]);
        $bankinfo = $this->sendRequest('Bank Information','GET', 'scheme/bankinfo', [], ['caserefno' => $caserefno]);
        $socso = $this->sendRequest('Socso','GET', 'scheme/socso', [], ['caserefno' => $caserefno ]);
        $certificate = $this->sendRequest('Certificate','GET', 'scheme/certificate', [], ['caserefno' => $caserefno ]);
        $confirmation = $this->sendRequest('Confirmation','GET', 'scheme/getconfirmation',[], ['caserefno' => $caserefno ]);
        $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);
        $husinfo = $this->sendRequest('Medical Certificate', 'GET', 'scheme/gethusinfo', [], ['caserefno' => $caserefno ]);
        $clinicname = $this->sendRequest('Clinic Name', 'GET', 'scheme/getclinicname', [], ['caserefno' => $caserefno ]);
       
        $clinicname=$this->Checking($clinicname);
        $doclist=$this->Checking($doclist);
        $doclist_select=$this->Checking($doclist_select);
        $docinfo=$this->Checking($docinfo);
        $remark=$this->Checking($remark);
        $obprofile=$this->CheckingRecord($obprofile);
        $empinfo=$this->CheckingRecord($empinfo);
        $oddata=$this->Checking($oddata);
        // dd($oddata);
        $emphistory=$this->CheckingRecord($emphistory);
        $bankinfo =$this->Checkingerrorcode($bankinfo);
        $socso=$this->Checkingerrorcode($socso);
        $certificate=$this->Checkingerrorcode($certificate);
        $confirmation=$this->CheckingRecord($confirmation);

        if(!empty($state)||$state!=null)
        {
            $state=$state->state_branch;
        }
        else
        {
            $state=null;
        }

        $preview = 'odpreview';

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

        $contrinfo = array();
        $data = array();
        // $this->getWages($contrinfo,$wagesinfo);

        if ($req->action == 'Preview')
        {
            return view('scheme.noticeOd.newClaim.PK.previewPK', compact('ref_table', 'state', 'obprofile', 'empinfo', 'oddata', 'emphistory', 'wages', 'socso', 'certificate', 'preview', 'caserefno', 'bankinfo', 'remark','doclist_select','doclist', 'docinfo', 'casetype', 'confirmation', 'husinfo', 'clinicname'));
        }


        return view('scheme.noticeOd.newClaim.PK.index', compact('ref_table', 'state', 'obprofile','empinfo', 'oddata', 'emphistory', 'wages', 'socso', 'certificate', 'preview', 'caserefno', 'bankinfo', 'remark','doclist_select','doclist', 'docinfo', 'casetype', 'confirmation', 'husinfo', 'clinicname'));

    }


    private function Checking($data)
    {

        if(!empty($data)|| $data!=null)
        {
             $data=$data->data;

        }
        else{
            $data= null;
        }

          return $data;
    }

    private function Checkingerrorcode($data)
    {
        if(!empty($data)||$data!=null)
        {

            $errorcode=$data->errorcode;
            if($errorcode==0)
            {
                $data_errorcode=$data->data;
            }
            else{
                $data_errorcode=null;

            }

        }
        else{
            $data_errorcode=null;
        }

        return $data_errorcode;
    }

    private function CheckingRecord($data)
    {
        if(!empty($data)|| $data!=null)
        {
           $record=isset($data->record) ? $data->record : null;

           if($record==1|| $record>0)
           {
               $data=$data->data;
           }
           else
           {
               $data=null;
           }
        }
       else{
           $data=null;
       }

       return $data;

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

    public function postOdEmphistory(Request $req)
    {
        $caserefno = session('ids')['caserefno'];

        $data = array();
        foreach ($req->input('empname') as $idx =>$name)
        {
            $empname= $req->empname[$idx];
            $empadd= $req->empadd[$idx];
            $duration= $req->duration[$idx];
            $designation= $req->designation[$idx];

            if ($empname == '' && $empadd == '' && $duration == '' && $designation == '')
            {
                continue;
            }

            $data[$idx] = ['empname'=>$empname, 'empadd'=>$empadd, 'duration'=>$duration, 'designation'=>$designation];
        }

        $option = ["data" => $data, "caserefno"=> $caserefno];

        $odempinfo = $this->sendRequest('POST', 'scheme/odemphistory/create', $option);

        if($odempinfo->data->Status == 0){
            toast('Save successfully','success');
        } else {
            toast('Save unsuccessful','error');
        }

        return redirect()->back();

    }


    public function postOdinfo(Request $req)
    {
        $ids=session('ids');

        $caserefno = $ids['caserefno'];

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
                "caserefno"=>$caserefno,
                "oddesc" => $req->oddesc,
                "emprelated"=> $req->emprelated,
                "dutydesc"=> $req->dutydesc,
                "symptom"=> $req->symptom,
                "clinicinfo"=>$req->clinicinfo,
                "oddate"=>$req->oddate,
                "causative"=>$req->causative
            ],

        ];
        // dd($options);
        try {

            $response = $client->post($url.'/scheme/OdInfo',$options)->getBody()->getContents();
            $content = json_decode($response);
            // dd($content);

            toast('Save Successful','success');
            return redirect()->back();

        }

        catch (GuzzleHttp\Exception\BadResponseException $e)
        {
            toast('Save unsuccessful', 'error');
            return redirect()->back();

        }

    }

    public function postConfirmation(Request $req)
    {
        //dd(session()->all());
        $json = [
            'caserefno' => session('ids')['caserefno'],
            'casetype' => session('ids')['casetype'],
            'uniquerefno' => session('ids')['uniquerefno'],
            'flow' => (int)$req->submit,
        ];

        $submission = $this->sendRequest('GET', 'common/submission', $json);
        // dd($submission);

        if(isset($submission->data) && $submission->data->Status == 0){
            toast('Data Your files has been successfully added','success');
        } else {
            toast($submission->data->Message, 'failed');
        }

        return redirect()->route('workbasket');

    }

}