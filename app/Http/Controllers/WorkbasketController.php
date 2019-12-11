<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use DB;
use Cookie;
use Response;
use Mail;
use Carbon\Carbon;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class WorkbasketController extends Controller
{
    public function workbasket_list(Request $req)
    {
        $module = [];

        $data_reftable = ['task_code', 'case_type', 'actvt_code'];
        $data_dynamic = ['status'];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
        $opt = $this->sendRequest('Dynamic','GET', 'dynamic_options', [], ['fields' => $data_dynamic ]);
        $content = $this->sendRequest('Dynamic','GET', 'common/workbasket_list', [], []);
        // dd($content);


        // if ($req->action == 'filter')
        // {
        //     $module = [
        //         'headers' => [
        //             'Authorization' => $token
        //         ],
        //         'query' => [
        //             'module' => $req->module,
        //             'refno' => $req->ref_no,
        //             'ref_type' => $req->ref_type

        //         ]

        //     ];

        //     $respond = $client->get($url.'/common/workbasket_list', $options)->getBody();
        //     $jsonfilter = json_decode($respond->getContents());
        //     // dd($jsonfilter);

        // }

        $data = $content->{'data'};

        if(!empty($data))
        {
            foreach ($data as $case)
            {
                $casetype = $case->case_info->casetype;
                $caserefno = $case->caserefno;
                // dd($caserefno);
            }
        }
        else
        {
            $casetype = null;
            $caserefno = null;
        }

        $status = $opt->{'status'};

        $userroles=session('user_roles');

        return view('general.workbasket', ['workbasket'=>$content->data, 'taskcode'=>$ref_table, 'casetype'=>$casetype,'case_type'=>$ref_table, 'actcode'=>$ref_table, 'status'=>$status, 'caserefno'=>$caserefno]);
    }

    public function get_notice(Request $req)
    {
        $caserefno = $req->caserefno;
        // $substatus_id = $req->substatus_id;
        // dd($substatus_id);

        $data_dynamic = ['status'];

        $content = $this->sendRequest('Case Information','GET', 'common/case_info/'.$caserefno, [], []);
        $opt = $this->sendRequest('Dynamic','GET', 'dynamic_options', [], ['fields' => $data_dynamic ]);
        // dd($content);

        $data = $content->{'data'};
        $status = $opt->{'status'};

        $statusSubName = null;

        if(!empty($status)) {

            foreach($status as $sts)
            {
                if($sts->id == $data->status){

                    foreach ($sts->status_sub as $status_sub)
                    {
                        if($status_sub->id == $data->substatus) $statusSubName = $status_sub->name;

                    }
                }
            }
        }
        // dd($roleCode);

        $casetype = $data->casetype;
        $module = $data->workbasket->module;

        $getRoles = session('user_roles');
        // dd($getRoles);

        if ($module == 'Scheme')
        {
            if ($casetype == '1')
            {
                session(['ids' => [
                    'caserefno' => $data->caserefno ? $data->caserefno : null,
                    'idtype' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idtype : null,
                    'idno' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idno : null,
                    'empcode' => $data->case_employer->caserefno ? $data->case_employer->empcode : null,
                    'accident' => $data->accident_info->caserefno ? $data->accident_info->id : null,
                    'accdtime' => $data->accident_info->caserefno ? $data->accident_info->accdtime : null,
                    'accddate' => $data->accident_info->caserefno ? $data->accident_info->accddate : null,
                    'casetype' =>$data->casetype,
                    'substatus' =>$data->substatus,
                    'uniquerefno'=> $data->case_ob_profile->caserefno ? $data->case_ob_profile->uniquerefno : null
                ]]);

                // dd(session('ids'));
                return redirect('/scheme/noticeaccident');
            }

            elseif ($casetype == '2')
            {

                $employment = session('in_employment');

                if($employment == 'Yes'){

                    $ids = array(
                        'caserefno' => $data->caserefno ? $data->caserefno : null,
                        'idtype' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idtype : null,
                        'idno' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idno : null,
                        'empcode' => $data->case_employer->caserefno ? $data->case_employer->empcode : null,
                        'casetype' =>$data->casetype,
                        'uniquerefno'=>$data->case_ob_profile->caserefno ? $data->case_ob_profile->uniquerefno : null
                    );
                }

                else {

                    $ids = array(
                        'caserefno' => $data->caserefno ? $data->caserefno : null,
                        'idtype' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idtype : null,
                        'idno' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idno : null,
                        'casetype' =>$data->casetype,
                        'uniquerefno'=>$data->case_ob_profile->caserefno ? $data->case_ob_profile->uniquerefno : null
                    );
                }

                session(['ids' =>$ids]);

                $pkRoles = ['PK','PKI'];
                $comparePK = array_intersect($pkRoles, $getRoles);

                $resultPK = collect($comparePK)->isEmpty() ? false : true;

                if ($resultPK) {
                    return redirect()->route('noticeod');
                }

                $scoRoles = ['SCO'];
                $compareSCO = array_intersect($scoRoles, $getRoles);

                $resultSCO = collect($compareSCO)->isEmpty() ? false : true;

                if ($resultSCO) {
                    return redirect('/scheme/noticeod_sco');
                }

                $ioRoles = ['IO'];
                $compareIO = array_intersect($ioRoles, $getRoles);

                $resultIO = collect($compareIO)->isEmpty() ? false : true;

                if ($resultIO) {
                    return redirect('/scheme/noticeod_io');
                }

                $saoRoles = ['SAO'];
                $compareSAO = array_intersect($saoRoles, $getRoles);

                $resultSAO = collect($compareSAO)->isEmpty() ? false : true;

                if ($resultSAO) {
                    return redirect('/scheme/noticeod_sao');
                }

            }

            elseif ($casetype == '3')
            {
                $ids = array(
                    'caserefno' => $data->caserefno ? $data->caserefno : null,
                    'idtype' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idtype : null,
                    'idno' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idno : null,
                    'casetype' =>$data->casetype,
                    'uniquerefno'=>$data->case_ob_profile->caserefno ? $data->case_ob_profile->uniquerefno : null
                );

                session(['ids' =>$ids]);

                $pkRoles = ['PK','PKI'];
                $comparePK = array_intersect($pkRoles, $getRoles);

                $resultPK = collect($comparePK)->isEmpty() ? false : true;

                if ($resultPK) {
                    return redirect('/scheme/noticeinvalidity');
                }

                $scoRoles = ['SCO'];
                $compareSCO = array_intersect($scoRoles, $getRoles);

                $resultSCO = collect($compareSCO)->isEmpty() ? false : true;

                if ($resultSCO) {
                    return redirect('/scheme/noticeinvalidity_sco');
                }

                $ioRoles = ['IO'];
                $compareIO = array_intersect($ioRoles, $getRoles);

                $resultIO = collect($compareIO)->isEmpty() ? false : true;

                if ($resultIO) {
                    return redirect('/scheme/noticeinvalidity_io');
                }

                $saoRoles = ['SAO'];
                $compareSAO = array_intersect($saoRoles, $getRoles);

                $resultSAO = collect($compareSAO)->isEmpty() ? false : true;

                if ($resultSAO) {
                    return redirect('/scheme/noticeinvalidity_sao');
                }

            }

            else
            {
                $employment = session('in_employment');

                if($employment == 'Yes'){

                    $ids = array(
                        'caserefno' => $data->caserefno ? $data->caserefno : null,
                        'idtype' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idtype : null,
                        'idno' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idno : null,
                        'empcode' => $data->case_employer->caserefno ? $data->case_employer->empcode : null,
                        'casetype' =>$data->casetype,
                        'uniquerefno'=>$data->case_ob_profile->caserefno ? $data->case_ob_profile->uniquerefno : null,
                        'substatus' =>$data->substatus,
                    );
                }

                else {

                    $ids = array(
                        'caserefno' => $data->caserefno ? $data->caserefno : null,
                        'idtype' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idtype : null,
                        'idno' => $data->case_ob_profile->caserefno ? $data->case_ob_profile->idno : null,
                        'casetype' =>$data->casetype,
                        'uniquerefno'=>$data->case_ob_profile->caserefno ? $data->case_ob_profile->uniquerefno : null,
                        'substatus' =>$data->substatus,
                    );
                }

                session(['ids' =>$ids]);

                $pkRoles = ['PK','PKI'];
                $comparePK = array_intersect($pkRoles, $getRoles);

                $resultPK = collect($comparePK)->isEmpty() ? false : true;

                if ($resultPK) {
                    return redirect('/scheme/noticedeath');
                }

                $scoRoles = ['SCO'];
                $compareSCO = array_intersect($scoRoles, $getRoles);

                $resultSCO = collect($compareSCO)->isEmpty() ? false : true;

                if ($resultSCO) {
                    return redirect('/scheme/noticedeath');
                }

                $ioRoles = ['IO'];
                $compareIO = array_intersect($ioRoles, $getRoles);

                $resultIO = collect($compareIO)->isEmpty() ? false : true;

                if ($resultIO) {
                    return redirect('/scheme/noticedeath');
                }

                $saoRoles = ['SAO'];
                $compareSAO = array_intersect($saoRoles, $getRoles);

                $resultSAO = collect($compareSAO)->isEmpty() ? false : true;

                if ($resultSAO) {
                    return redirect('/scheme/noticedeath');
                }

            }

        }

        elseif($module == 'Medical Board')
        {
            if ($casetype == '1')
            {
                $ids = array(
                    'caserefno' => $data->caserefno,
                    'morefno' => $data->workbasket->morefno,
                    'mbrefno' => $data->workbasket->mbrefno,
                    'rtwrefno' => $data->workbasket->rtwrefno,
                    'schemerefno' => $data->schemerefno,
                    'assigned_date' => $data->workbasket->assigned_date,
                    'casetype' => $data->casetype,
                    'current_branch_id' => $data->current_branch_id,
                    'f34recvdate' => $data->f34recvdate,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno,
                    'accident' => $data->accident_info->id, 
                    'idtype' => $data->case_ob_profile->idtype, 
                    'idno' => $data->case_ob_profile->idno,
                );

                session(['ids' =>$ids]);

                $roloRoles = ['ROLOMB','ROLOMAB','PNL','SECT'];
                $compareRolo = array_intersect($roloRoles, $getRoles);

                $resultRolo = collect($compareRolo)->isEmpty() ? false : true;

                if ($resultRolo) {
                    return redirect('/medical/information/huk');
                }
            }

            elseif ($casetype == '2')
            {
                $ids = array(
                    'caserefno' => $data->caserefno,
                    'morefno' => $data->workbasket->morefno,
                    'mbrefno' => $data->workbasket->mbrefno,
                    'rtwrefno' => $data->workbasket->rtwrefno,
                    'schemerefno' => $data->schemerefno,
                    'assigned_date' => $data->workbasket->assigned_date,
                    'casetype' => $data->casetype,
                    'current_branch_id' => $data->current_branch_id,
                    'f34recvdate' => $data->f34recvdate,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno,
                    'idtype' => $data->case_ob_profile->idtype, 
                    'idno' => $data->case_ob_profile->idno,
                );

                session(['ids' =>$ids]);

                $rolosRoles = ['ROLOSMB','ROLOSMAB','PNL','SECT'];
                $compareRolos = array_intersect($rolosRoles, $getRoles);

                $resultRolos = collect($compareRolos)->isEmpty() ? false : true;

                if ($resultRolos) {
                    return redirect('/medical/information/od');
                }
            }

            else
            {
                $ids = array(
                    'caserefno' => $data->caserefno,
                    'morefno' => $data->workbasket->morefno,
                    'mbrefno' => $data->workbasket->mbrefno,
                    'rtwrefno' => $data->workbasket->rtwrefno,
                    'schemerefno' => $data->schemerefno,
                    'assigned_date' => $data->workbasket->assigned_date,
                    'casetype' => $data->casetype,
                    'current_branch_id' => $data->current_branch_id,
                    'f34recvdate' => $data->f34recvdate,
                    'uniquerefno'=>$data->case_ob_profile->uniquerefno,
                    'idtype' => $data->case_ob_profile->idtype, 
                    'idno' => $data->case_ob_profile->idno,
                );

                session(['ids' =>$ids]);

                $roloRoles = ['ROLOMB','ROLOMAB','PNL','SECT'];
                $compareRolo = array_intersect($roloRoles, $getRoles);

                $resultRolo = collect($compareRolo)->isEmpty() ? false : true;

                if ($resultRolo) {
                    return redirect('/medical/information/ilat');
                }
            }
        }

        elseif ($module == 'Medical Services')
        {
            if ($casetype == '1') //accident
            {

                if ($statusSubName == 'Medical Opinion MOEI') return redirect()->route('allNotice');

                if ($statusSubName == 'Medical Investigation MOEI') return redirect()->route('internaldocmoeimoinv');

                if ($statusSubName == 'Medical Opinion ABPPP') return redirect()->route('feedback');

                if ($statusSubName == 'Medical Investigation : Internal Doctor') return redirect()->route('internaldocabppp');

                if ($statusSubName == 'Medical Investigation(ABPPP) : Special Report') return redirect()->route('specialreportabppp');

                if ($statusSubName == 'Medical Investigation(AOBPPP) : Special Report') return redirect()->route('specialreportaobppp');

                if ($statusSubName == 'Medical Investigation(ACPP) : Clarification') return redirect()->route('clarificationacpp');

                if ($statusSubName == 'Medical Investigation(AOCPP) : Clarification') return redirect()->route('clarificationacpp');

            }

            if ($casetype == '2' || $casetype == '3') //od and ilat
            {

                if ($statusSubName == 'Medical Opinion MOINV') return redirect()->route('allNotice');

                if ($statusSubName == 'Medical Investigation MOINV') return redirect()->route('internaldocmoeimoinv');

                if ($statusSubName == 'Medical Opinion ABPPP') return redirect()->route('feedback');

                if ($statusSubName == 'Medical Investigation : Internal Doctor') return redirect()->route('internaldocabppp');

                if ($statusSubName == 'Medical Investigation(ABPPP) : Special Report') return redirect()->route('specialreportabppp');

                if ($statusSubName == 'Medical Investigation(AOBPPP) : Special Report') return redirect()->route('specialreportaobppp');

                if ($statusSubName == 'Medical Investigation(ACPP) : Clarification') return redirect()->route('clarificationacpp');

                if ($statusSubName == 'Medical Investigation(AOCPP) : Clarification') return redirect()->route('clarificationacpp');

            }
        }

        else
        {
            return redirect('workbasket');
        }

    }

}
