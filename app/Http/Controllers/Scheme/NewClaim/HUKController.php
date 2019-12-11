<?php

namespace App\Http\Controllers\scheme\NewClaim;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use PDF;
use App\Letter;
use App\Http\Resources\LetterRe as LetterReResource;

class HUKController extends CommonController
{
    public function index()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);

        $this->getHUK($jsonHUK);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }

        return view('scheme.HUK.PK.index', ['getHUK'=>$jsonHUK, 'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
            'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'ref_table'=>$content,
            'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
            'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
            'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state,
            'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
            'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }
    
    public function index_sco()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when', 'opinion_type']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);

        $this->getHUKsco($jsonHUKsco);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }

        return view('scheme.HUK.SCO.beforeMB.index', ['getHUKsco'=>$jsonHUKsco, 'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'opinion_type'=>$content->opinion_type,
        'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state, 'ref_table'=>$content,
        'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
        'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }

    public function index_sco1()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when', 'opinion_type']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);

        $this->getHUKsco($jsonHUKsco);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
      
        return view('scheme.HUK.SCO.afterMB.index', ['getHUKsco'=>$jsonHUKsco, 'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'opinion_type'=>$content->opinion_type,
        'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state,'ref_table'=>$content,
        'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
        'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }

    public function index_io()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when', 'opinion_type']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);

        $this->getHUKsco($jsonHUKsco);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }

        return view('scheme.HUK.IO.beforeMB.index', ['getHUKsco'=>$jsonHUKsco, 'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'opinion_type'=>$content->opinion_type,
        'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state,'ref_table'=>$content,
        'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
        'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }

    public function index_io1()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when', 'opinion_type']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);

        $this->getHUKsco($jsonHUKsco);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
      
        return view('scheme.HUK.IO.afterMB.index', ['getHUKsco'=>$jsonHUKsco, 'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'opinion_type'=>$content->opinion_type,
        'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state, 'ref_table'=>$content,
        'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
        'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }

    public function index_sao()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when', 'opinion_type']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);

        $this->getHUK($jsonHUK);

        $this->getHUKsao($jsonHUKsao);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }

        return view('scheme.HUK.SAO.beforeMB.index', ['getHUKsao'=>$jsonHUKsao, 'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'opinion_type'=>$content->opinion_type,
        'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state, 'ref_table'=>$content,
        'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
        'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }

    public function index_sao1()
    {
        $caserefno="201909200003";
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
                'Authorization' => $token
            ],
            'query' => [
                'ref_code' => ['case_type','id_type','race','gender','month','hus_sts','mc_sts','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type','emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisendto','causative', 'transport', 'work_sts', 'acc_code','indus_code','prof_code', 'accd_place', 'acc_when', 'opinion_type']

            ]
            
        ];
        $response = $client->get($url.'/static_options', $options)->getBody();
        $content = json_decode($response->getContents());

        $this->getObProfile($jsondecode);

        $this->getEmployer($jsondecodeEmployer);

        $this->getAccidentinfo($jsondecod3);

        $this->GetMCDetails($jsondecodemc);
        
        $this->getHUKsao($jsonHUKsao);
            
        // dd($jsondecode);
        if ($jsondecode && $jsondecode!='') {
            $data = $jsondecode->{'data'};
            if (empty($data)) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                // dd($obprofile);
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
        }

        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {
            $data = $jsondecodeEmployer->{'data'};
            if (empty($data)) {
                $emprecord = null;
            } else {
                $emprecord = $jsondecodeEmployer->{'data'};
                // dd($emprecord);
            }
        }

        $accdrefno = session('accdrefno');
        // $caserefno = session('caserefno');

           
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
       
        return view('scheme.HUK.SAO.afterMB.index', ['getHUKsao'=>$jsonHUKsao,'obprofile'=>$obprofile,'state'=>$content->state,'gender'=>$content->gender,
        'idtype'=>$content->id_type, 'race'=>$content->race, 'national'=>$content->national, 'mc_sts'=>$content->mc_sts, 'opinion_type'=>$content->opinion_type,
        'transport'=>$content->transport,'accdplace'=>$content->accd_place, 'acc_when'=>$content->acc_when ,'optionbank'=>$content->bank_loc,
        'optionreason'=>$content->rsn_no_acc,'optionbai'=>$content->bai_sts, 'optionpay'=>$content->pay_mode, 'bankcode'=>$content->bank_code,
        'accountype'=>$content->acc_type, 'overseasbank'=>$content->bank_code, 'overseasbanktype'=>$content->acc_type, 'month'=>$content->state, 'ref_table'=>$content,
        'causative'=>$content->causative,'accdcode'=>$content->acc_code,'industcode'=>$content->indus_code, 'profcode'=>$content->prof_code, 'worksts'=>$content->work_sts,
        'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'hussts'=>$content->hus_sts,'mcdata'=>$jsondecodemc, 'occucode'=>$content->occupation]);
    }

    public function getHUK(&$jsonHUK)
    {
        $jsonHUK =
       [
        
         'accDate' =>"20/09/2019",
         'source' =>"mana mana je",
          'injuryDesc' => "Sudah jatuh, ditimpa tangga pula",
          'potentialHUK'=>"Yes",
    
       ];
    }
    
    public function getObProfile(&$jsondecode)//kai chg01102019
    {
        $ids=session('ids');
        // dd($ids);
        $ob_id = $ids['obprofile'];

        $client = new Client();

        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ]
            
        ];

        // dd($options);
        $response = $client->get($url.'/common/case_obProfile/'.$ob_id, $options)->getBody();
        $jsondecode = json_decode($response->getContents());
        // dd($jsondecode);
    }
    
    public function getAccidentinfo(&$jsondecod3)
    {
        $ids=session('ids');
        // dd($ids);
        $accident_id = $ids['accident'];

        $client = new Client();

        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
            'headers' => [
            'Authorization' => $token
            ]
        ];
        // dd($options);
        $response = $client->get($url.'/common/accident_info/'.$accident_id, $options)->getBody();
        $jsondecod3 = json_decode($response->getContents());
        // dd($jsondecod3);
    }

    public function GetMCDetails(&$jsondecode)
    {
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecode = json_decode($result);
        
        curl_close($ch);
    }
    
    // HUK SCO
    public function getHUKsao(&$jsonHUKsao)
    {
        $jsonHUKsao =
       [
        
         'rmb_no' =>"1001",
         'rmbAuto' =>"2002",
         'preparedBy' => "Nur Syazwanie",
         'preparedDate' =>"10/2/2019",
         'createdDate' => "10/2/2010",
         'schemeRefno_no'=>"111",
         'benefitRefNo_no' => "222",
         'status_no' => "S_123",
         'accDate_no' => "20/10/2010",
         'CreatedDate_no' => "21/11/2011",
         'potentialHUK'=>"Yes",
         'appRecvDate' => "10/10/2010",
         'Source' => "Library",
         'accDateFromSource' => "10/10/2010",
         'injuryDescription_appInfo' => "sakit lutut",
         
         //recommendation HUK
         'recBy' => "Najmi",
         'recDate' => "20/11/2011",
         'status' => "ok",
         'accDate_revision' => "01/01/2001",
         'accDateOtherSource' => "02/02/2002",
         'socsoOffice' => "Jalan Tun Razak",
         'transferCase' => "lol",
         'remarks' => 'nothing',

       //  <!------------------- FHUS * From auto (Potential HUK = Yes) ------------------->
       
         'schemeRefno'=>"111",
         'benefitRefNo' => "222",
         'status' => "S_123",
         'accDate' => "20/10/2010",
         'CreatedDate' => "21/11/2011",
         'injuryDescription' => "OT lah bro",
         'status' => "oklah",
    
       ];
    }

    // HUK SCO
    public function getHUKsco(&$jsonHUKsco)
    {
        $jsonHUKsco =
       [
        
         'rmb_no' =>"1001",
         'rmbAuto' =>"2002",
         'preparedBy' => "Nur Syazwanie",
         'preparedDate' =>"10/2/2019",
         'createdDate' => "10/2/2010",
         'schemeRefno_no'=>"111",
         'benefitRefNo_no' => "222",
         'status_no' => "S_123",
         'accDate_no' => "20/10/2010",
         'CreatedDate_no' => "21/11/2011",
         'potentialHUK'=>"Yes",
         'appRecvDate' => "10/10/2010",
         'Source' => "Library",
         'accDateFromSource' => "10/10/2010",
         'injuryDescription_appInfo' => "sakit lutut",
         
         //recommendation HUKsco
         'pot96' => "hey",
         'reasonRej' => "Too perfect",
      
         //mb Decision
         'quest1' => "yes",
         'quest2' => "no",
         'descInjury' => "Sakit Perut",
         'mbtype' => "embi",
         'mbsessionDate' => "21/10/2020",
         'mbabResult' => "Champion",
         'quest3' => "mInjury",
         'assessment' => "Ohh",
         'proendDate' => "21/10/1992",
         'els' => "yes",
         'remarks' => "Akhirnya Sempurna",
         
       ];
    }
}