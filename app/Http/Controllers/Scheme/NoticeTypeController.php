<?php

namespace App\Http\Controllers\scheme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class NoticeTypeController extends NewClaim\CommonController
{
    public function index()
    {

        $data_reftable = ['case_type','id_type'];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        
        return view('scheme.general.notice_type', compact('ref_table'));

    }

    public function noticeType(Request $request)
    {
        $id_type = isset($request->idtype) ? $request->idtype : null;
        $id_no = isset($request->idno) ? $request->idno : null;
        $empcode = isset($request->empcode) ? $request->empcode : null;
        $casetype = isset($request->notice_type) ? $request->notice_type : null;
        $in_employment = isset($request->in_employment) ? $request->in_employment : null;
        $select_death_accident = isset($request->select_death_accident) ? $request->select_death_accident : null;
        $accident_date = isset($request->accdate) ? $request->accdate :null;
        $accident_time = isset($request->acctime) ? $request->acctime :null;
        // dd($select_death_accident);

        $data_reftable = ['case_type','id_type'];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);

        session(['empcode' => $empcode, 'noticetype' => $casetype, 'accddate' => $accident_date, 'accdtime' => $accident_time, 'select_death' => $select_death_accident, 'in_employment' => $in_employment]);

        
        if (!empty($empcode) && !empty($id_no))
        {
            $employerAssist = $this->sendRequest('Employer ASSIST','GET', 'common/employers', [], ['employerCode' => $empcode, 'employerName' => 'c']);

            $jsondecodeAssistEmployer = (!empty($employerAssist)) ? $employerAssist->{'businessInfo'} : null;

        }
        else
        {
            $jsondecodeAssistEmployer = null;
        }

        if (!empty($id_type) && !empty($id_no))
        {
            $obAssist = $this->sendRequest('Ob ASSIST','GET', 'common/ip', [], ['identificationType' => $id_type, 'identificationNo' => $id_no]);

            $jsonOBAssist = (!empty($obAssist)) ? $obAssist->{'employeeInfoList'} : null;
        }
        else
        {
           $jsonOBAssist = null;
        }


        if ($request->action == 'search')
        {
            
            if ($casetype != '2'||$casetype != '4') //1,3
            {
                is_null($in_employment);
            }
            if ($casetype != '4') //1,2,3
            {
                is_null($select_death_accident);
            }
            if ($casetype != '1') //2,3,4
            {
                is_null($accident_date);
                is_null($accident_time);

            }

            if (is_null($jsonOBAssist))
            {
                $idnoassist=null;
                $nameassist=null;
            }
            else
            {
                foreach ($jsonOBAssist as $obassist)
                {
                    $idnoassist = $obassist->{'identificationInfoList'};
                    $nameassist = $obassist->{'name'};
                }
            }

            return view('scheme.general.notice_type', ['ref_table' => $ref_table, 'empinfo'=>$jsondecodeAssistEmployer, 'obassist'=>$idnoassist,'empcode'=>$empcode,'idno'=>$id_no,'selectidtype'=>$id_type,'selectnoticetype'=>$casetype,'name'=>$nameassist, 'accddate' => $accident_date, 'accdtime' => $accident_time, 'select_death' => $select_death_accident, 'in_employment' => $in_employment]);
        }

        $name = isset($request->name) ? $request->name :null;

        if ($casetype == "1") { //accident

            if ($empcode == '') {
                toast('Please fill in employer code','error');
                return redirect()->back();
            }

            if ($id_no == '') {
                toast('Please fill in Identification No.','error');
                return redirect()->back();
            }

            if (!$jsondecodeAssistEmployer) {
                toast('Employer record not found','error');
                return redirect()->back();
            }

            if (!is_null($id_type) && !is_null($id_no)) 


            $accident = $this->sendRequest('Check Accident','GET', 'common/check_accident_date', [], ['idno' => $id_no, 'idtype' => $id_type]);

            $record = $accident->{'record'};

            if($record == '1')
            {
                $data = $accident->{'data'}->{'case_info'};

                $ids = array(
                    'caserefno' => $data->caserefno,
                    'idtype' => $data->case_ob_profile->idtype,
                    'idno' => $data->case_ob_profile->idno,
                    'empcode' => $data->case_employer->empcode,
                    'accident' => $data->accident_info->id,
                    'casetype' =>$data->casetype,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno
                );
                session(['ids' => $ids]);

                return redirect('/scheme/noticeaccident');
            }

            else
            {
                $module = config('services.module.scheme');

                $noticedraft = $this->sendRequest('Create Draft','POST', 'common/create_draft', [], ['casetype' => $casetype, 'idtype' => $id_type, 'idno' => $id_no, 'name' => $name, 'empcode' => $empcode, 'accddate' => $accident_date, 'accdtime' => $accident_time, 'module' => $module]);

                $data = $noticedraft->{'data'}->{'case_info'};

                $ids = array(
                    'caserefno' => $data->caserefno,
                    'idtype' => $data->case_ob_profile->idtype,
                    'idno' => $data->case_ob_profile->idno,
                    'empcode' => $data->case_employer->empcode,
                    'accident' => $data->accident_info->id,
                    'casetype' =>$data->casetype,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno
                );

                session(['ids' => $ids]);

                return redirect('/scheme/noticeaccident');
            }

        }

        elseif ($casetype == "2") { //od

            if ($empcode == '')
            {
                toast('Please fill in employer code','error');
                return redirect()->back();
            }

            if (!$jsondecodeAssistEmployer)
            {
                toast('Employer record not found','error');
                return redirect()->back();
            }

            $od = $this->sendRequest('Check OD Record Exist','GET', 'scheme/odrecordexist', [], ['idno' => $id_no, 'idtype' => $id_type]);

            $record = $od->{'record'};

            if ($record=='0') {

                $module = config('services.module.scheme');

                $noticedraft = $this->sendRequest('Create Draft','POST', 'common/create_draft', [], ['casetype' => $casetype, 'idtype' => $id_type, 'idno' => $id_no, 'name' => $name, 'empcode' => $empcode, 'module' => $module]);

                $data = $noticedraft->{'data'}->{'case_info'};

                $ids = array(
                    'caserefno' => $data->caserefno,
                    'idtype' => $data->case_ob_profile->idtype,
                    'idno' => $data->case_ob_profile->idno,
                    'empcode' => $data->case_employer->empcode,
                    'casetype' =>$data->casetype,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno
                );

                session(['ids' => $ids]);

                toast('Successfully created notice draft','success');
                return redirect('/scheme/noticeod');
            }

            else
            {
                $schemerefno = $od->{'schemerefno'};

                if ($schemerefno != '') {

                    $ids = array(
                    'caserefno' => $od->{'caserefno'},
                    'idtype' => $od->{'caserefno'},
                    'idno' => $od->{'idno'},
                    'empcode' => $od->{'empcode'},
                    'casetype' => $od->{'casetype'},
                    'uniquerefno' => $od->{'uniquerefno'}

                    );

                    session(['ids' => $ids]);

                    return redirect('/scheme/noticeod');
                }
                else {

                    toast('Draft has been created','error');
                    return redirect()->back();

                }
            }   

        }

        elseif ($casetype == "3") { //invalidity


            if ($jsonOBAssist < 0) {
                toast('Insured Person\'s profile not found','error');
                return redirect()->back();
            }

            $invalidity = $this->sendRequest('Check Invalidity Record Exist','GET', 'scheme/ilatrecordexist', [], ['idno' => $id_no, 'idtype' => $id_type]);

            $record = $invalidity->{'record'};
            
            if ($record=='0') {

                $module = config('services.module.scheme');

                $noticedraft = $this->sendRequest('Create Draft','POST', 'common/create_draft', [], ['casetype' => $casetype, 'idtype' => $id_type, 'idno' => $id_no, 'name' => $name, 'empcode' => $empcode, 'module' => $module]);

                $data = $noticedraft->{'data'}->{'case_info'};

                $ids = array(
                    'caserefno' => $data->caserefno,
                    'idtype' => $data->case_ob_profile->idtype,
                    'idno' => $data->case_ob_profile->idno,
                    'empcode' => $data->case_employer->empcode,
                    'casetype' =>$data->casetype,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno
                );

                session(['ids' => $ids]);

                toast('Successfully created notice draft','success');
                return redirect('/scheme/noticeinvalidity');
            }

            else
            {
                $schemerefno = $invalidity->{'schemerefno'};

                if ($schemerefno != '') {

                    toast('Invalidity notice application for this Insured Person is already exist. Scheme Ref No: '.$schemerefno, 'info');
                    return redirect()->back();
                }

                else {

                    toast('Draft has been created','error');
                    return redirect()->back();

                }
            }   

        }

        elseif ($casetype == "4") { //death

            $death = $this->sendRequest('Check Death Record Exist','GET', 'scheme/deathrecordexist', [], ['idno' => $id_no, 'idtype' => $id_type]);

            $record = $death->{'record'};

            if ($record=='0') {

                $module = config('services.module.scheme');

                $noticedraft = $this->sendRequest('Create Draft','POST', 'common/create_draft', [], ['casetype' => $casetype, 'idtype' => $id_type, 'idno' => $id_no, 'name' => $name, 'empcode' => $empcode, 'module' => $module]);

                $data = $noticedraft->{'data'}->{'case_info'};

                $ids = array(
                    'caserefno' => $data->caserefno,
                    'idtype' => $data->case_ob_profile->idtype,
                    'idno' => $data->case_ob_profile->idno,
                    'empcode' => $data->case_employer->empcode,
                    'casetype' =>$data->casetype,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno
                );

                session(['ids' => $ids]);

                toast('Successfully created notice draft','success');
                return redirect('/scheme/noticedeath');
            }

            else
            {
                $schemerefno = $death->{'schemerefno'};

                if ($schemerefno != '') {

                    toast('Death notice application for this Insured Person is already exist. Scheme Ref No: '.$schemerefno, 'info');
                    return redirect()->back();
                }

                else {

                    toast('Draft has been created','error');
                    return redirect()->back();

                }
            }   

        }

    }

}
