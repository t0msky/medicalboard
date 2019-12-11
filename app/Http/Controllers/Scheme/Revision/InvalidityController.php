<?php

namespace App\Http\Controllers\scheme\revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class InvalidityController extends Controller
{
    public function index_PK()
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        $ob_id=$ids['obprofile'];
        $employer_id=$ids['employer'];
        $idtype=$ids['idtype'];
        $idno=$ids['idno'];
        $empcode=$ids['empcode'];
        $this->getOBAssist($idno, $idtype, $jsonOBAssist);

        $client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
                'ref_code' => ['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','gender']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());
        
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $uniquerefno = "2019070001";
        $caserefno = "201907240008";
        $noticetype="03";
        $doclist = DB::select($sql, [$noticetype]);
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        $docinfo =DB::select('Select  r.notes,r.docid,r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        return view('scheme.noticeInvalidity.Revision.Invalidity.PK.index', 

        ['idtype'=>$idtype,'doclist'=>$doclist,'docinfo'=>$docinfo,'doclist_select'=>$alldoclist, 'month' => $month,'obformassist' => $jsonOBAssist,
        'gender'=>$content->gender,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code, 
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state,
        'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$content->emp_type,'docinfo'=>$docinfo,
        'occucode'=>$content->occupation,'state'=>$content->state, 
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national,
        ]);
    }

    public function index_SCO()
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        $ob_id=$ids['obprofile'];
        $employer_id=$ids['employer'];
        $idtype=$ids['idtype'];
        $idno=$ids['idno'];
        $empcode=$ids['empcode'];
        $this->getOBAssist($idno, $idtype, $jsonOBAssist);

        $client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
                'ref_code' => ['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','gender']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $uniquerefno = "2019070001";
        $caserefno = "201907240008";
        $noticetype="03";
        $doclist = DB::select($sql, [$noticetype]);
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        // $docinfo =DB::select('Select  r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
        $docinfo =DB::select('Select r.notes, r.docid, r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        // dd($docinfo);
        return view('scheme.noticeInvalidity.Revision.Invalidity.SCO.index', 

        ['idtype'=>$idtype,'doclist'=>$doclist,'docinfo'=>$docinfo,'doclist_select'=>$alldoclist, 'month' => $month,'obformassist' => $jsonOBAssist,
         'gender'=>$content->gender,
         'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code, 
         'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state,
         'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$content->emp_type,'docinfo'=>$docinfo,
         'occucode'=>$content->occupation,'state'=>$content->state, 
         'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national,

         ]);
    }

    public function index_SAO()
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        $ob_id=$ids['obprofile'];
        $employer_id=$ids['employer'];
        $idtype=$ids['idtype'];
        $idno=$ids['idno'];
        $empcode=$ids['empcode'];
        $this->getOBAssist($idno, $idtype, $jsonOBAssist);

        $client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
                'ref_code' => ['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','gender']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());
       

        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $uniquerefno = "2019070001";
        $caserefno = "201907240008";
        $noticetype="03";
        $doclist = DB::select($sql, [$noticetype]);
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        // $docinfo =DB::select('Select  r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
        $docinfo =DB::select('Select r.notes, r.docid, r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        return view('scheme.noticeInvalidity.Revision.Invalidity.SAO.index',

         ['idtype'=>$idtype,'doclist'=>$doclist,'docinfo'=>$docinfo,'doclist_select'=>$alldoclist, 'month' => $month,'obformassist' => $jsonOBAssist,
         'gender'=>$content->gender,
         'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code, 
         'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state,
         'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$content->emp_type,'docinfo'=>$docinfo,
         'occucode'=>$content->occupation,'state'=>$content->state, 
         'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national,

         ]);
    }

    public function getOBAssist($idno, $idtype, &$jsonOBAssist)
    {

        $client = new Client();
        $url = config('services.kaksu_endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],   
            'query' => [
                "identificationType"=> $idtype,
                "identificationNo"=> $idno,
            ],
        ];
        
      
        $response = $client->get($url.'/common/ip/', $options)->getBody();
        $content = json_decode($response->getContents());
        
        $jsonOBAssist = (!empty($content)) ? $content->{'employeeInfoList'} : null;  
       
        
    }
}