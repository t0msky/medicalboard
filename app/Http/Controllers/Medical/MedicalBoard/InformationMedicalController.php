<?php

namespace App\Http\Controllers\Medical\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use DB;

class InformationMedicalController extends Controller
{   
    public function index($status=null)
    {
        // try
        // {
            $role = session('user_roles');
            $ids = $ids=session('ids');

            $caserefno = $ids['caserefno'];
            $mbrefno = $ids['mbrefno'];
            $assigned_date = $ids['assigned_date'];
            $morefno = $ids['morefno'];
            $rtwrefno = $ids['rtwrefno'];
            $schemerefno = $ids['schemerefno'];
            $casetype = $ids['casetype'];
            $current_branch_id = $ids['current_branch_id'];
            $f34recvdate = $ids['f34recvdate'];
            $uniquerefno = $ids['uniquerefno'];
            $idtype = $ids['idtype'];
            $idno = $ids['idno'];

            $history1 = '';
            
            // dd($accid);
            // $casetype = '2';

            if($casetype == '')
                $casetype = '1';

            if($casetype == '1'){
                $accid = $ids['accident'];
            }else{
                $accid = null;
            }

            $countPanel = 3;//added by ayu 14-11-2019

            $data_reftable = ['case_type', 'id_type', 'race', 'gender', 'month', 'hus_sts', 'mc_sts', 'bank_loc','rsn_no_acc', 'bai_sts', 'bank_code', 'acc_type', 'emp_type', 'doc_type', 'doc_cat', 'state', 'national', 'pay_mode', 'occupation', 'notisendto', 'causative', 'transport', 'work_sts', 'acc_code', 'indus_code', 'prof_code', 'accdplace', 'acc_when', 'opinion_type', 'notisend_to', 'optionbank', 'accd_place', 'caserefno', 'accdrefno', 'ms_reqspdoc', 'doc_sts', 'docsrc', 'doc_type_oc', 'mb_category', 'sidang', 'doc_special', 'decision', 'distyp', 'sts','sidang'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            $state = $this->sendRequest('State Branch', 'GET', 'dynamic_options', [], ['fields' => ['state_branch'] ]);
            $ilatinfo=$this->sendRequest('Ilat Information','GET','scheme/ilatInfo/'.$caserefno);
            $emphistory = $this->sendRequest('Employment History','GET', 'scheme/emphistory',[],['caserefno' => $caserefno]);
            $wages = $this->sendRequest('Wages','GET', 'scheme/getspiwages',[],['caserefno' => $caserefno]);
            $socso = $this->sendRequest('Socso','GET', 'scheme/socso', [], ['caserefno' => $caserefno ]);

            $certificate = $this->sendRequest('Certificate','GET', 'scheme/certificate', [], ['caserefno' => $caserefno ]);
            $bankinfo = $this->sendRequest('Bank Information','GET', 'scheme/bankinfo', [], ['caserefno' => $caserefno ]);
            $confirmation = $this->sendRequest('Confirmation','GET', 'scheme/getconfirmation',[], ['caserefno' => $caserefno ]);

            $obprofile = $this->sendRequest('Ob Information','GET', 'scheme/obprofile',[], ['caserefno'=>$caserefno ]);
            $doclist = $this->sendRequest('Document List','GET', 'common/getdoc', [], ['noticetype' =>$casetype]);
            $docinfo = $this->sendRequest('Document Information','GET', 'common/download', [], ['caserefno' => $caserefno ]);
            $doclist_select = $this->sendRequest('Document List','GET', 'common/getdocall');

            $remark = $this->sendRequest('remarks','GET', 'common/remarks',['caserefno' => $caserefno]);
            $branch = $this->sendRequest('Branch List','GET', 'dynamic_options', [], ['fields' => ['branchs'] ]);
            $review_case1 = $this->sendRequest('Review Case','GET', 'medical/getreviewcase', [], ['caserefno' => $caserefno, 'schemerefno' => $schemerefno]);
            $hospital = $this->sendRequest('Hospital List', 'GET' , 'medical/gethospital_list', [], ['hospital_id' => "5", 'role' => $role]);
            $currentCase = $this->sendRequest('accdetails','GET', 'medicalservices/currentCase/'.$caserefno);
            $insuredperson = $this->sendRequest('Insured Person','GET', 'medical/getmbobinfo', [], ['caserefno' => $caserefno]);

            $history = $this->getHistory($history1);;
            if(empty($history)||$history==null)
            {
                toast(' History Not Found', 'error');
                $history = null;
            }
            // dd($history);

            $currentCase=$this->Checking($currentCase);
            $hospital = $this->Checking($hospital);
            $insuredperson = $this->Checking($insuredperson);
            $ilatinfo=$this->Checking($ilatinfo);
            $ilatinfo=null;
            $emphistory=$this->CheckingRecord($emphistory);
            $wages=$this->CheckingRecord($wages);
            $socso=$this->Checkingerrorcode($socso);

            $certificate=$this->Checkingerrorcode($certificate);
            $bankinfo =$this->Checkingerrorcode($bankinfo);
            $confirmation=$this->CheckingRecord($confirmation);

            $obprofile=$this->CheckingRecord($obprofile);
            $doclist=$this->Checking($doclist);
            $docinfo=$this->Checking($docinfo);
            $doclist_select=$this->Checking($doclist_select);

            $remark=$this->Checking($remark);
            $review_case1=$this->Checking($review_case1);

            if(!empty($state)||$state!=null){
                $state=$state->state_branch;
            } else {
                $state=null;
            }

            // $someArray = [];
            // $array = is_array($ref_table->doc_special);
            // if($array == true)
            //     $countdiscipline = count($ref_table->doc_special);
            // else{
            //     $someArray = json_decode(json_encode($ref_table->doc_special), true);
            //     $countdiscipline = count($someArray);
            // }

            $countdiscipline = 0;
            if(!empty($ref_table->doc_special))
                $countdiscipline = count($ref_table->doc_special);
            
            $countdisp = 0;
            if($countdiscipline != null && $countdiscipline != 0){
                $countdisp = round($countdiscipline/3);
            }

            $review_case = '';
            $remarks = '';
            $addby1 = '';
            $created_at = '';
            $addby = '';
            $addby2 = '';
            $socso_office = '';
            $decision_remarks = '';
            $infotype = '';

            if($review_case1 != null){
                foreach($review_case1 as $rc){
                    if($rc !=null){
                        foreach($rc as $r){
                            $review_case = $r;
                            // dd($review_case);
                        }
                    }
                }

                if($review_case != null){
                    $decision_remarks = $this->sendRequest('Remarks Review Case','GET', 'common/remarks/'.$review_case->remarks_id);
                    $decision_remarks=$this->Checking($decision_remarks);
                }
                
                // dd($decision_remarks->remark);
            }

            if($remark != null){
                foreach($remark as $r){
                    $remarks = $r->remark;
                    $addby1 = $r->addby->id;
                    $created_at1 = $r->created_at;
                    $created_at2 = preg_replace("/[^0-9]/", "", $created_at1);
                    $created_at = substr($created_at2,6,2).'/'.substr($created_at2,4,2).'/'.substr($created_at2,0,4);
                }

                $addby2 = $this->sendRequest('OB Name','GET', 'admin/staff/'.$addby1);
                foreach($addby2->data as $staff=>$sn){
                    $addby = $sn->name;
                }
            }

            if($branch->branchs != null)
            {
                foreach($branch->branchs as $b){
                    if($current_branch_id == $b->id)
                        $socso_office = $b->name;
                }
            }

            if(isset($casetype))
            {
                foreach($ref_table->mb_category as $mb){
                    if($casetype == '1' || $casetype == '3'){
                        if($mb->ref_code == '1')
                            $mbcategory = $mb->desc_en;
                    }
                    else if($casetype == '2'){
                        if($mb->ref_code == '2')
                            $mbcategory = $mb->desc_en;
                    } 
                }

                foreach($ref_table->case_type as $ct){
                    if($casetype == '1'){
                        if($ct->ref_code == '1')
                            $ctdesc = $ct->desc_en;
                    }
                    else if($casetype == '2'){
                        if($ct->ref_code == '2')
                            $ctdesc = $ct->desc_en;

                    }else if($casetype == '3'){
                        if($ct->ref_code == '3')
                            $ctdesc = $ct->desc_en;
                    }  
                }

                // dd($accid);
                if($casetype == '1'){
                    $injury = $this->sendRequest('ACCIDENT INFO', 'GET', 'common/accident_info/'.$accid,[],[]);
                    // dd($injury);
                    $injury = $this->Checking($injury);
                }elseif($casetype == '2'){
                    $injury = $this->sendRequest('OD INFO','GET', 'scheme/OdInfo/'.$caserefno, [], []);
                    $injury=$this->CheckingRecord($injury);
                }elseif($casetype == '3'){
                    $injury = $this->sendRequest('ILAT INFO','GET', '/scheme/ilatInfo/'.$caserefno, [], []);
                    $injury=$this->CheckingRecord($injury);
                }else{
                    $injury = null;
                }

            }
            // dd($review_case);    

            $datablade = ['ref_table', 'countPanel', 'remark', 'obprofile', 'doclist', 'docinfo', 'doclist_select', 'countdisp', 'caserefno', 'mbrefno', 'assigned_date', 'morefno', 'rtwrefno', 'schemerefno', 'casetype', 'socso_office', 'f34recvdate', 'mbcategory', 'remarks', 'addby', 'created_at', 'review_case', 'decision_remarks', 'ctdesc', 'ilatinfo', 'bankinfo','confirmation', 'socso','contrinfo','wages','wagesinfo','state','sendnotification','certificate','preview','emphistory','branch','op_category', 'idtype', 'idno','injury','hospital','insuredperson', 'currentCase', 'history', 'someArray'];

            if($casetype == '1')
            {
                $infotype = 'HUK';

                return view('medical.medicalboard.information.huk.index',compact($datablade, 'infotype'));
            }
            elseif($casetype == '2')
            {
                $infotype = 'OD';

                return view('medical.medicalboard.information.od.indexod',compact($datablade, 'infotype'));
            }
            elseif($casetype == '3')
            {
                $infotype = 'ILAT';

                return view('medical.medicalboard.information.ilat.index',compact($datablade, 'infotype'));
            }else
            {   
                $infotype = 'DEFAULT';

                return view('medical.medicalboard.information.huk.index',compact($datablade, 'infotype'));
            }
        // }
        // catch (\Exception $e)
        // {
        //     toast('Error', 'error');
        //     return redirect()->back();
        // }
    }

    

    public function postReviewCase(Request $req)
    {
        // try
        // {   
            $ids=session('ids');
            $caserefno=$ids['caserefno'];
            $schemerefno = $ids['schemerefno'];
            $casetype = $ids['casetype'];

            if($casetype == '1' || $casetype == '3'){
                $mbcategory = '1';
            }
            else if($casetype == '2'){
                $mbcategory = '2';
            } 

            $table = [];
            foreach($req->decision_speciality as $speciality){
                $table[] = array (
                    'td_discipline' => $speciality
                );
            }

            if($req->decision_id == null)
            {
                $options =  [
                    'caserefno' => $caserefno,
                    'schemerefno' => $schemerefno,
                    'disctype' => $req->decision_discipline,
                    'apportioment' => $req->decision_apportionment,
                    "mbcategory" => $mbcategory,
                    'remark' => $req->decision_remarks,
                    'table' =>$table,
                ];
            }else
            {
                $options =  [
                    'id' => $req->decision_id,
                    'caserefno' => $caserefno,
                    'schemerefno' => $schemerefno,
                    'disctype' => $req->decision_discipline,
                    'apportioment' => $req->decision_apportionment,
                    "mbcategory" => $mbcategory,
                    'remark' => $req->decision_remarks,
                    'table' =>$table,
                ]; 
            }

            // return $options;
            $content = $this->sendRequest('Review Case','POST', 'medical/submitreviewcase',$options, []);
            // return $content;
            if(!empty($content)||$content!=null)
            {
                if($content->data[0] == 0)
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
            else
            {
                return redirect()->back();
            }

        // }
        // catch (\Exception $e)
        // {
        //     toast('Error', 'error');
        //     return redirect()->back();
        // }
    }

    public function updateMbObdetails(Request $req)
    {
        
        try{

            $ids=session('ids');
            $caserefno=$ids['caserefno'];

            $formdata = [

                'caserefno' =>  $caserefno,
                'mailadd1'  =>  $req->mailadd1,
                'mailadd2'  =>  $req->mailadd2,
                'mailadd3'  =>  $req->mailadd3,
                'statecode_add' =>  $req->statecode_add,
                'cityadd'   =>  $req->cityadd,
                'postcodeadd'   =>  $req->postcodeadd,
                'lockedbag_add' =>  $req->lockedbag_add,
                'wdtadd'  =>    $req->wdtadd,
                'poboxadd'  =>  $req->poboxadd,
                'telnoadd'  =>  $req->telnoadd,
                'mobilenoadd'   =>  $req->mobilenoadd,
                'emailadd'  => $req->emailadd
            ];

            // dd($formdata);

            $content = $this->sendRequest('Update Mb Obdetails','POST', 'medical/updatembobdetails',$formdata, []);

            if(!empty($content)||$content!=null)
            {
                if($content->data[0] == 0)
                {
                    toast('Save/updated successful', 'success');
                    return redirect()->back();
                }
                else
                {
                    toast('Save/updated unsuccessful', 'error');
                    return redirect()->back();
                }
            }
            else
            {
                return redirect()->back();
            }

        }
        catch(\Exception $e){
            toast('Error','error');
            return redirect()->back();
        }

    }

    public function getApptDetailsPerOb($hospital_id, $mb_category,$year){

        try{

            $ids=session('ids');
            $caserefno=$ids['caserefno'];
            $mbrefno = $ids['mbrefno'];
            $schemerefno = $ids['schemerefno'];
            $uniquerefno = $ids['uniquerefno'];
            // $year = '2019';

            $senddata = [
                'year'  =>  $year,
                'hospital_id'   =>  $hospital_id,
                'mb_category'   =>  $mb_category,
                'caserefno' =>  $caserefno,
                'schemerefno'   =>  $schemerefno,
                'mbcaseno'  =>  $mbrefno,
                'uniquerefno' => $uniquerefno
            ]; 
            // return $senddata;

            $resultdata = $this->sendRequest('GetDetailsPerOb','GET', 'medical/getappdetailsperob', [], ['year'  =>  $year, 'hospital_id'   =>  $hospital_id, 'mb_category'   =>  $mb_category, 'caserefno' =>  $caserefno, 'schemerefno' =>  $schemerefno,'mbcaseno'  =>  $mbrefno, 'uniquerefno' => $uniquerefno]);
            // dd($resultdata);
            $resultdata = $this->Checking($resultdata);
            $resultdata = json_decode(json_encode($resultdata),true);
            // dd($resultdata);
            $data_reftable = ['doc_special'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            $disc_desc = $ref_table->doc_special;

            $data = [];

            // $rs = $resultdata['data'];
            if($resultdata){
                foreach($resultdata['1'] as $ld){
                    $ob = $resultdata['0']['obdetails'];
                    foreach ($ob['0'] as $rs1) {
                        if($rs1['speciality'] == $ld['discipline']){
                            foreach ($ref_table->doc_special as $disc) {
                                # code...
                                if($rs1['speciality'] == $disc->ref_code)
                                $data[]= array(
                                    // "detail" => array(
                                        "desc" =>  $disc->desc_en,
                                        "speciality" =>$rs1['speciality'],
                                        "mbsessionspeciality_id" => $rs1['mbsessionspeciality_id'],
                                        "discipline" => $ld['discipline'],
                                        "medicalboard_id"=>$ob['medicalboard_id'],
                                        "takwim"=>$ld['date']
                                    // ),
                                );
                            }
                            
                        }
                    }
                }

            }
        return json_encode($data);

        }catch(\Exception $e){
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function setApptPerob(Request $req)
    {

        try{    

            $ids=session('ids');
            $uniquerefno = $ids['uniquerefno'];

            $year = $req->year;
            $hospitalid = $req->appt_hospital;
            $mb_category = $req->appt_mb_category;

            // dd(count($req->takwim_id));

            $appointment = [];

            $takwimid = $req->takwim_id;
            $medicalboard_id = $req->medicalboard_id;
            $mbsessionspeciality_id = $req->mbsessionspeciality_id;
            $datetakwim = $req->datetakwim;

            // dd($takwimid);

            for($k=1; $k<count($req->takwim_id)+1;$k++){
                // dd($takwimid[$k]);
                $appointment[$k-1] = array(
                    "takwim_id" => $takwimid[$k],
                    "medicalboard_id" => $medicalboard_id[$k],
                    "mb_sessionspeciality_id" => $mbsessionspeciality_id[$k],
                    "date" => $datetakwim[$k]
                );
            }

            // dd($appointment);

            $apptdata = [
                'year'  =>  $year,
                'hospital_id'   =>  $hospitalid,
                'mb_category'   =>  $mb_category,
                'uniquerefno'   =>  $uniquerefno,
                'appointment'   =>  $appointment
            ]; 

            // dd($apptdata);

            $content = $this->sendRequest('Appointment Perob','POST', 'medical/setappt_perob',$apptdata, []);
            // return $content;
            if(!empty($content)||$content!=null)
            {
                if($content->data[1] == null)
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
            else
            {
                return redirect()->back();
            }
            
        }catch(\Exception $e){
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function getFeedbacknquery()
    {

        try{

            $resdata[] = array(
                "id" => 1,
                "que_id" => "1",
                "que_caserefno" => "201911210005",
                "que_sendto" => "TEST1",
                "que_spsstatus" => null,
                "que_query" => "CHANGE NAME",
                "que_feedback" => "ALREADY DONE",
                "que_sts" => null,
                "que_addby" => 1,
                "que_updby" => null,
                "que_date" => "2019-03-12",
                "created_at" => null,
                "updated_at" => null 
            );

            $content = array(
                "success" => "true",
                "data" => $resdata,
                "message" => "0"
            );

            $feedback = [];
            if(!empty($content)){
                foreach ($content['data'] as $c) {
                    $feedback[] = $c;
                    
                }
            }

            return json_encode($feedback);

        }catch(\Exception $e){
            toast('Error','error');
            return redirect()->back();
        }
        
    }

    public function getHistory(&$history)
    {

        $ids=session('ids');
        $caserefno = $ids['caserefno'];

        // $history = $this->sendRequest('History ','GET', 'medical/show_history', [], ['caserefno' => $caserefno]);
        // $history=$this->Checking($history);

        $emphistory[] = array(
            "empname" => "Me_ER005",
            "designation" => "Human Resources",
            "startdate" => "2017-06-24",
            "enddate" => "2020-06-24",
            "empcode" => "ER005",
            "indscode" => "23"
        );

        $benefit[] = array(
            "bn_noticedate" => "12/2/13\r\n",
            "bn_noticetype" => "ty",
            "bn_schemetype" => "qww",
            "bn_benefitrefno" => "hello"
        );

        $medicalboard[] = array(
            "id" => 1,
            "mb_schemerefno" => "345",
            "mb_dateassign" => "2019-12-06",
            "jdrt_final" => 2
        );

        $ms_caseinfo[] = array(
            "ms_ci_caserefno" => "2",
            "ms_ci_reqdate" => "34",
            "ms_ci_rpttype" => "we",
            "ms_ci_status" => "y"
        );

        $history = array(
            "emphistory" => $emphistory,
            "benefit" => $benefit,
            "medicalboard" => $medicalboard,
            "ms_caseinfo" => $ms_caseinfo
        );

        return $history;

    }

}
