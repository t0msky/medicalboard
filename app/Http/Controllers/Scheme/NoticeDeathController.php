<?php

namespace App\Http\Controllers\Scheme;

use Illuminate\Http\Request;
use DB;
use App\ObForm;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

use Log;//asma


class NoticeDeathController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '')
        {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";


        //SYAHIRAH

        // $jsondecodemp='';
        $jsondecodebank='';
        $jsondecodepermanent='';

        //DEATH
        $jsondecodeDeath='';

        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);

        
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);

        //Death Notice
        $maritalsts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['maritalsts']);
        $otsts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['otsts']);
        $relation = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['relation']);
        $disable = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['disable']);
        $studysts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['studysts']);
        $edulvl = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['edulvl']);
        $applrelation = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['applrelation']);
        $occucode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        // $statecode = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['edulvl']);


        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype';
        $doclist = DB::select($sql,[session('noticetype')]);

        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');

        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';


        $this->getObProfile($jsondecode);
        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);

        //irina - begin
        $caserefno = session('caserefno');

        // Check record for Death Details    
        $a=$this->getDeathDetails($jsondecodeDeath); 
        // return $a;
            // return $jsondecodeDeath;
            if ($jsondecodeDeath && $jsondecodeDeath!='')//irina
            {
                $errorcode = $jsondecodeDeath->{'errorcode'};
                // return $errorcode;
                if ($errorcode == 0)
                {
                    $deathdetail = $jsondecodeDeath->{'data'};
                }
                else
                {
                    $deathdetail = null;
                    // return $deathdetail;
                }
                
            }

        // Check record for Confirmation    
        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation); 
            
            if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
            {
                //$confirmation = $jsondecodeConfirmation->{'record'};
                $confirmation = $jsondecodeConfirmation->{'data'};
            }
           //return json_encode($confirmation);

        // Check record for Applicant Info
        $jsondecodeApplicantinfo = "";
        $this->getApplicantInfo($jsondecodeApplicantinfo); 
            
            if ($jsondecodeApplicantinfo && $jsondecodeApplicantinfo!='')//irina
            {
                    $record = $jsondecodeApplicantinfo->{'record'};
                    if ($record > 0)
                    {
                        $applicantinfo = $jsondecodeApplicantinfo->{'applicantinfo'};
                    }
                    else
                    {
                        $applicantinfo = null;
                    }
            }

            // dd($applicantinfo);

        // Check record for Dependant Info
        $jsondecodeOtinfo = "";
        $this->getOtInfo($jsondecodeOtinfo); 
            
        if ($jsondecodeOtinfo && $jsondecodeOtinfo!='')//irina
        {
                $record = $jsondecodeOtinfo->{'record'};
                // return $record;
                if ($record > 0)
                {
                    $otinfo = $jsondecodeOtinfo->{'otinfo'};                    
                }
                else
                {
                    $otinfo = null;
                }
        }

        // dd($otinfo);

        // Check record for Guardian Info
        $jsondecodeGuardianInfo = "";
        $this->getGuardianInfo($jsondecodeGuardianInfo); 
            
        if ($jsondecodeGuardianInfo && $jsondecodeGuardianInfo!='')//anis
        {
                $record = $jsondecodeGuardianInfo->{'record'};
                // return $record;
                if ($record > 0)
                {
                    $guardianinfo = $jsondecodeGuardianInfo->{'guardianinfo'};

                    
                }
                else
                {
                    $guardianinfo = null;
                }
        }else{
            $guardianinfo ="";
        }
        //dd($guardianinfo);
        
        
        // $accddata = null;
        $mcdata = null;
        $this->getAccidentinfo($jsondecod3); 
                
        if ($jsondecod3 && $jsondecod3!='')//irina
        {
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0)
            {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            }
            else
            {
                $accddata = null;
            }
            
        }
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';
        
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '')
        {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0)
            {
                $jsondecodemc = null;
            }


        }
        
        //irina - end 

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        $this->getEmployer($jsondecodeEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
        //$this->getWages($jsondecodeWages);
        
        $contrinfo = array();
        $wagesinfo = array();
        $data = array();
        
        $this->getWages($contrinfo,$wagesinfo, $data);
        //return $wagesinfo;
        
        $docinfo = array();
        $this->getDoc($docinfo);


        //SYAHIRAH
         $this->getCertificateEmp($jsondecodemp);
         $jsondecodebank = null;

         $jsondecodepermanent = null;
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3); 
            //$data= $jsondecod3->{'data'};
            // $how= $data['how'];
        //}
        
        //irina
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
     
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            //return json_encode($jsondecode);
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
            }
            
            //$test = json_encode($obprofile);
            //return $test;
        }

        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            // return $record;
            if ($record > 0)
            {
                if ($record == 1)
                {
                    $emprecord = $jsondecodeEmployer->{'emprecord'};
                }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        $empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='')//irina
        {
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0)
            {
                $empcert = $jsondecodemp->{'data'};
            }
            
        }
        
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            
           
        }

        if ($jsondecodepermanent && $jsondecodepermanent!='')//irina
        {
            $permanentrep = $jsondecodepermanent->{'data'};
        }

        // $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // // return $state;
        // if ($confirmation != null && $confirmation->statecode != '')
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        //     //return $branch;
        // }
        // else
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        //     //return $branch;
        // }

        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen = null;
        if ($accddata != null)
        {
            if ($accddata->place != '')
            {
                $accdwhen = $this->getdsaccwhen($accddata->place);
                //return $accdwhen;
            }
            
        }

        // $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occucode']);
        // $suboccucode = null;
        // if ($obprofile != null)
        // {
        //     if ($obprofile->occucode != '')
        //     {
        //         $suboccucode = $this->getsuboccucode($obprofile->occucode);
        //         //return $accdwhen;
        //     }
            
        // }
        

        
        return view('scheme.noticeDeath.PK.index',['obprofile'=>$obprofile,'state'=>$state,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 'accinfo'=>$accddata, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo, 'contribution'=>$contrinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'mcdata'=>$mcdata,'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype, 'maritalsts'=>$maritalsts, 'mcdata'=>$jsondecodemc,
            'otsts'=>$otsts, 'relation'=>$relation, 'disable'=>$disable, 'studysts'=>$studysts, 'edulvl'=>$edulvl, 'applrelation'=>$applrelation, 'occucode'=>$occucode,
            'docinfo'=>$docinfo, 'hussts'=>$hussts, 'deathdetail'=>$deathdetail, 'confirmation'=>$confirmation, 'applicantinfo'=>$applicantinfo, 'otinfo'=>$otinfo,
            'guardianinfo'=>$guardianinfo,'doclist_select'=>$alldoclist]);
    }

    
    
    
    //irina
    public function AccidentDate()
    {
        $idno = session('idno');
       
        return view('accidentdatetime');
    }
    
    
    

    //CHECKING ACCIDENT DATE
    public function checkAccidentDate(Request $request)
    {
        $idno=session('idno');
        $idtype=session('idtype');
        $date= $request->date;//2019-05-31
        $date = str_replace('-', '', $date);
        $time= $request->time;//01:00
        // $empcode= $request->empcode; //0004
        
        $accdtime = str_replace(':', '', $time);
        if (strlen($accdtime) == 4)
        {
            $accdtime = $accdtime.'00';
        }
        
        $accdyear = substr($date,0,4);
        $accdmonth = substr($date,4,2);
        
        //return '++'.$idno.'++'.$date.'++'.$time.'++';
        //$idno = '800920145348';
        //$date ='20170114';
        //$time = '100000';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/checkaccidentdate?date='.$date.'&time='.$accdtime.'&idno='.$idno.'&idtype='.$idtype;
        //return $url;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        //return '++'.$result.'++';
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
        
        //return $result;

        $record = $jsondecode->{'record'};
        
        //return $record;
        if($record=='0')
        {
            session(['accdrefno'=>'']);
            
            $noticedraft = $this->createnoticedraft($date,$accdtime);//chg27062019 - send $accddate & $accdtime into param
            //return $noticedraft;
            $errorcode = $noticedraft->{'errorcode'};
            
            if ($errorcode == 0)
            {
                $caserefno = $noticedraft->{'caserefno'};
                session(['caserefno'=>$caserefno]);
                session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
                session(['accddate'=>$date,'accdtime'=>$accdtime]);
                
                //chg07072019 - get wbid & put into session
                $wbid = $noticedraft->{'wbid'};
                session(['wbid'=>$wbid]);
                        
                return redirect('/noticeaccident');
            }
            else
            {
                return redirect()->back()->with('messagent','Failed to create draft');
            }
            //return $this->index();//irina comment
            
        }
        else
        {
            $data= $jsondecode->{'data'};
            foreach ($data as $d) 
            {
                //chg07072019 - check if record exist & not draft, cannot proceed
                $schemerefno = $d->schemerefno;
                
                if ($schemerefno != '')
                {
                    $message = 'Accident notice application for this Insured Person is already exist. Scheme Ref No: '.$schemerefno;
                    return redirect()->back()->withInput(Input::all())->with('messagent',$message);
                }
                
                session(['caserefno' => $d->caserefno]);
                session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
                session(['accddate'=>$date,'accdtime'=>$accdtime]);
                
                //chg07072019 - get wbid & put into session
                $wbid = $d->wbid;
                session(['wbid'=>$wbid]);
                //return $this->index();//irina comment
                return redirect('/noticeaccident');
            }
        }
        //return $this->index();//irina comment
        session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
        session(['accddate'=>$date,'accdtime'=>$accdtime]);
        return redirect('/noticeaccident');

    }
    
    public function createnoticedraft()
    {
        $noticetype = session('noticetype');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno = session('idno');

        $notice = ['noticetype'=> $noticetype, 'operid'=> $operid,'brcode'=> $brcode, 'idno'=>$idno];
        $jsondata = json_encode($notice);
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/createdraft';
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

            //close connection
        curl_close($ch);
        
        return json_decode($result);
    }

    //Get OBProfile From DB
    public function getObProfile(&$jsondecode)
    {    
        $idno = session('idno');
        $idtype = session('idtype');
        $caserefno = session('caserefno');
        $operid = session('operid');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obprofile?idno='.$idno.'&idtype='.$idtype.'&caserefno='.$caserefno.'&operid='.$operid;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //POST OBFORM AT DB 
    public function postObForm(Request $req)
    {
        $idno  = $req->idno;
        $previdno = $req->previdno;
        $idtype = $req->idtype;
        $oldidno = '';
        $passportno='';
        $name = $req->name;
        $dob = $req->dob;
        $dob = str_replace('-', '', $dob);
        $race = $req->race;
        $gender = $req->gender;
        $occupation = $req->occupation;
        $dodeath = $req->dodeath;
        $dodeath = str_replace('-', '', $dodeath);
        $pobox = $req->pobox;
        $lockedbag = $req->lockedbag;
        $wdt = $req->wdt;
        $occucode = $req->occucode;
        $suboccucode = $req->suboccucode;
        $suboccucodelist = $req->suboccucodelist;
        
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $city = $req->city;
        $state = $req->state;
        $postcode = $req->postcode;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $nationality = $req->nationality;
        

        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $caserefno = session('caserefno');
        $noticetype = session('noticetype');

        $obForm = ['caserefno'=>$caserefno,'noticetype'=>$noticetype,'idno'=> $idno,'previdno'=>$previdno, 'idtype'=> $idtype,'oldidno' =>$oldidno, 'passportno'=>$passportno,
            'name'=> $name, 'dob'=> $dob, 'race'=> $race, 'gender'=> $gender, 'occupation'=> $occupation, 'dodeath'=>$dodeath, 'occucode'=>$occucode, 'suboccucode'=>$suboccucode, 'suboccucodelist'=>$suboccucodelist, 
            'operid'=>$operid, 'brcode'=>$brcode, 'add1'=>$add1,'add2'=>$add2,'add3'=>$add3, 'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'city'=>$city, 'statecode'=>$state,
            'postcode'=>$postcode, 'telno'=>$telno, 'mobileno'=>$mobileno, 'email'=>$email,'nationality'=>$nationality];
        
        $jsondata = json_encode($obForm);
        return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobprofile';
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

        //return '++'.$result.'++';
            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        //return $result;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            $uniquerefno = $jsondecode->{'uniquerefno'};
            session(['uniquerefno'=>$uniquerefno]);
            return redirect()->back()->withInput(['tab'=>'obform'])->with('messageob','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'obform'])->with('messageob','Save unsuccessful');
        }
        
     }
     

     public function getEmployer(&$jsondecodeEmployer)
    {
        
        $caserefno = session('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/employer?caserefno='.$caserefno;
        
        // if ($accdrefno != '')
        // {
        //     $url = $url.'&accdrefno='.$accdrefno;
        // }
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $jsondecodeEmployer= json_decode ($result);
    
    }

        //POST EMPLOYER AT DB - HANNIS
    public function postEmployer(Request $req)
    {
        $caserefno= session('caserefno');
        $operid= session('loginname');
        $brcode= session('loginbranchcode');
        $empcode= $req->empcode;
        // return $empcode;
        $empname = $req->empname;
        $emptype= $req->emptype;
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $postcode = $req->postcode;
        $city = $req->city;
        $statecode = $req->state;
        $pobox = $req->pobox;
        $lockedbag = $req->lockedbag;
        $wdt = $req->wdt;
        $telno = $req->telno;
        $faxno = $req->faxno;
        $email = $req->email;

        // Add 03-08-2019
        $bussentity = $req->bussentity;
        $subbussentity = $req->subbussentity;
        $subbussentitylist = $req->subbussentitylist;
        $servicetype = $req->servicetype;
        $indscode = $req->indscode;
        $subindscodelist = $req->subindscodelist;

        $employer = ['caserefno'=>$caserefno,'operid'=>$operid,'brcode'=>$brcode, 'empcode'=>$empcode,
            'empname'=>$empname, 'emptype'=>$emptype,'add1'=>$add1,'add2'=>$add2,'add3'=>$add3, 'postcode'=>$postcode,
            'city'=>$city, 'statecode'=>$statecode,'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'phoneno'=>$telno, 'faxno'=>$faxno, 'email'=>$email,
            'bussentity'=>$bussentity, 'subbussentity'=>$subbussentity, 'subbussentitylist'=>$subbussentitylist, 'servicetype'=>$servicetype, 'indscode'=>$indscode, 'subindscodelist'=>$subindscodelist];
        $jsondata = json_encode($employer);
        
        // return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newemployer';

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
        
        // return $jsondata.'+'.$result;
        
        $jsondecode = json_decode($result);
        
        if ($jsondecode && $jsondecode != '')
        {
            $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
            if ($errorcode == 0)
            {
                // session(['empcode',$empcode]);
                return redirect()->back()->withInput(['tab'=>'employer'])->with('messageemp','Save successful');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'employer'])->with('messageemp','Save unsuccessful');
            }
        }
        
    }

     
     //Get DeathDetails From DB
    public function getDeathDetails(&$jsondecodeDeath)
    {    
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getdeathinfo?caserefno='.$caserefno;
        // return $url;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeDeath = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //POST DEATH DETAILS AT DB 
    public function postDeathWithMC(Request $req)
    {
        $accdeath = $req->accdeath;

        if ($accdeath == 'Y') {

            $deathcause = $req->deathcause;
            $accdeath = $req->accdeath;
            $obsts = $req->obsts;
            $dodeath = $req->dodeath;
            $dodeath = str_replace('-', '', $dodeath);
            
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno = session('caserefno');
            
            $deathDetails = ['caserefno'=>$caserefno, 'deathcause'=>$deathcause, 'obsts'=>$obsts, 'dodeath'=>$dodeath,
                'operid'=>$operid, 'brcode'=>$brcode, 'accdeath'=>$accdeath ];
            
            $jsondata = json_encode($deathDetails);
            // return $jsondata;
            
            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddeathinfo';
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
            
            //return '++'.$result.'++';
                //close connection
            curl_close($ch);
            //return redirect()->back();
            // return $this->index();
            
            //$this->postOBContact($req);
            $jsondecode = json_decode($result);
            //return $result;
            
            $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
           
            /** ---------------------------------- MEDICAL WS ---------------------------- */

            $mcmonth = '';
            $mcyear = '';               
            $mcinfo = array();
            //dd($req->all());

            $mc_arr = $req->input('hussts');
            $i = 0;
            // Loop for dynamic medical leave
            if ($mc_arr != null)
            {
                foreach($mc_arr as $key => $value){
                    // Log::info($key .' dan '. $value);

                    ${'workinfo'.$i} = array();

                    $arr = $req->input('workstartdate'.$key);
                    if ($arr != null)
                    {
                        foreach($arr as $key2 => $value){
                            // Log::info($key2 .' dan '. $value);

                            if(empty($value) || $value == NULL || $value == ""){
                                $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-','',$req->mcstartdate[$key]),'enddate'=>str_replace('-','',$req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>[]];
                                Log::info($mcinfo[$i]);
                            }else{
                                // dd('ada value');
                                $no_work = count($req->input('workstartdate'.$key));
                                // // dd($no_work);

                                for($j = 0; $j<$no_work; $j++)
                                {
                                    ${'workinfo'.$key}[$j] = ['wagespaid'=>'','workstartdate'=>str_replace('-','',$req->input('workstartdate'.$key.'.'.$j)), 'workenddate'=>str_replace('-','',$req->input('workenddate'.$key.'.'.$j)),'totalwork'=>$req->input('totalwork'.$key.'.'.$j), 'statuswork'=>$req->input('statuswork'.$key.'.'.$j)];
                                }

                                $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-','',$req->mcstartdate[$key]),'enddate'=>str_replace('-','',$req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>${'workinfo'.$i}];
                            }
                        }

                        $i++;
                    }
                }
            }
            else
            {
                $mcinfo = null;
            }

            $mcdata = ['operid'=>session('loginname'), 'brcode'=>session('loginbranchcode'), 'caserefno'=>session('caserefno'), 'clinicinfo'=>$req->clinicinfo, 'mcinfo'=>$mcinfo];
        
            //dd($mcdata);
            $jsondata = json_encode($mcdata);

            //dd($jsondata);

            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updmcinfo';

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
                // return $result;
                $errorcode = $jsondecode->{'errorcode'};

                /** ---------------------------------- Accident WS ---------------------------- */


                $operid = session('loginname');
                $brcode = session('loginbranchcode');
                $caserefno = session('caserefno');
                //$idno= session('idno');
                //$accddate = substr($accddate,6,4).substr($accddate,3,2).substr($accddate,0,2);

                $accddate= $req->accddate;//31/05/2019
                $accddate = str_replace('-','',$accddate);
                $accdtime= $req->timeaccident;
                $accdtime = str_replace(':', '', $accdtime);
                if (strlen($accdtime) == 4)
                {
                    $accdtime = $accdtime.'00';
                }
                $place= $req->placeaccd;
                $accwhen= $req->accwhen;
                $whendesc= $req->whendesc;
                $how= $req->how;
                $wagespaid= $req->wagespaid;
                $transport= $req->transport;
                $transportothers= $req->trothers;
                $causative= $req->causative;
                $accdcode= $req->accdcode;
                $industrialcode= $req->industcode;
                $employmentcode= $req->profcode;
                $reasontravel= $req->reason;
                $injurydesc= $req->injurydesc;
                $accwork= $req->accdworkingday;
                $startworktime= $req->startworkingtime;
                $startworktime = str_replace(':', '', $startworktime);
                if (strlen($startworktime) == 4)
                {
                    $startworktime = $startworktime.'00';
                }
                $restperiod= $req->restperiod;
                $restperiod = str_replace(':', '', $restperiod);
                if (strlen($restperiod) == 4)
                {
                    $restperiod = $restperiod.'00';
                }
                $endworktime= $req->endworkingtime;
                $endworktime = str_replace(':', '', $endworktime);
                if (strlen($endworktime) == 4)
                {
                    $endworktime = $endworktime.'00';
                }
                $witnessname= $req->witnessname;
                $witnesscontact= $req->witnesscontact;
                $clinicinfo= $req->clinicinfo;
            
                // $addby= session('loginname');
                //$empcode = session('empcode');

                //return $req->all();

            
                $accident=[ 'operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accddate'=>$accddate,'accdtime'=>$accdtime, 
                    'place'=>$place, 'accwhen'=>$accwhen, 'whendesc'=>$whendesc,'how'=>$how,  'wagespaid'=>$wagespaid, 'transport'=>$transport, 
                    'transportothers'=>$transportothers, 'causative'=>$causative, 'accdcode'=>$accdcode,
                    'industrialcode'=>$industrialcode,'employmentcode'=>$employmentcode,'reasontravel'=>$reasontravel, 
                    'injurydesc'=>$injurydesc, 'accwork'=>$accwork,'startworktime'=>$startworktime, 
                    'restperiod'=>$restperiod, 'endworktime'=>$endworktime,'witnessname'=>$witnessname,'witnesscontact'=>$witnesscontact, 
                    'clinicinfo'=>$clinicinfo];
            
                $jsondata = json_encode($accident);

                // return $jsondata;
            
            
                $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updaccidentinfo';

            
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
                // return $result;
                $errorcode = $jsondecode->{'errorcode'};

                if ($errorcode == 0)
                {
                    $caserefno = $jsondecode->{'caserefno'};
                    session(['caserefno'=>$caserefno]);
                    session(['accddate'=>$accddate]);
                    return redirect()->back()->withInput(['tab'=>'death_details'])->with('messageacc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
                }
                else
                {
                    return redirect()->back()->withInput(['tab'=>'death_details'])->with('messageacc','Save unsuccessful');
                }

        }

        else {

            $deathcause = $req->deathcause;
            $accdeath = $req->accdeath;
            $obsts = $req->obsts;
            $dodeath = $req->dodeath;
            $dodeath = str_replace('-', '', $dodeath);
            
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno = session('caserefno');
            
            $deathDetails = ['caserefno'=>$caserefno, 'deathcause'=>$deathcause, 'obsts'=>$obsts, 'dodeath'=>$dodeath,
                'operid'=>$operid, 'brcode'=>$brcode, 'accdeath'=>$accdeath ];
            
            $jsondata = json_encode($deathDetails);
            // return $jsondata;

            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddeathinfo';
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

            //return '++'.$result.'++';
                //close connection
            curl_close($ch);
            //return redirect()->back();
            // return $this->index();

            //$this->postOBContact($req);
            $jsondecode = json_decode($result);
            //return $result;
            
            $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;

            /** ---------------------------------- MEDICAL WS ---------------------------- */

            $mcmonth = '';
            $mcyear = '';               
            $mcinfo = array();
            //dd($req->all());

            $mc_arr = $req->input('hussts');
            $i = 0;
            // Loop for dynamic medical leave
            if ($mc_arr != null)
            {
                foreach($mc_arr as $key => $value){
                    // Log::info($key .' dan '. $value);

                    ${'workinfo'.$i} = array();

                    $arr = $req->input('workstartdate'.$key);
                    if ($arr != null)
                    {
                        foreach($arr as $key2 => $value){
                            // Log::info($key2 .' dan '. $value);

                            if(empty($value) || $value == NULL || $value == ""){
                                $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-','',$req->mcstartdate[$key]),'enddate'=>str_replace('-','',$req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>[]];
                                Log::info($mcinfo[$i]);
                            }else{
                                // dd('ada value');
                                $no_work = count($req->input('workstartdate'.$key));
                                // // dd($no_work);

                                for($j = 0; $j<$no_work; $j++)
                                {
                                    ${'workinfo'.$key}[$j] = ['wagespaid'=>'','workstartdate'=>str_replace('-','',$req->input('workstartdate'.$key.'.'.$j)), 'workenddate'=>str_replace('-','',$req->input('workenddate'.$key.'.'.$j)),'totalwork'=>$req->input('totalwork'.$key.'.'.$j), 'statuswork'=>$req->input('statuswork'.$key.'.'.$j)];
                                }

                                $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-','',$req->mcstartdate[$key]),'enddate'=>str_replace('-','',$req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>${'workinfo'.$i}];
                            }
                        }

                        $i++;
                    }
                }
            }
            else
            {
                $mcinfo = null;
            }

            $mcdata = ['operid'=>session('loginname'), 'brcode'=>session('loginbranchcode'), 'caserefno'=>session('caserefno'), 'clinicinfo'=>null, 'mcinfo'=>null];
        
            //dd($mcdata);
            $jsondata = json_encode($mcdata);

            //dd($jsondata);

            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updmcinfo';

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
                // return $result;
                $errorcode = $jsondecode->{'errorcode'};

                /** ---------------------------------- Accident WS ---------------------------- */


                $operid = session('loginname');
                $brcode = session('loginbranchcode');
                $caserefno = session('caserefno');
                //$idno= session('idno');
                //$accddate = substr($accddate,6,4).substr($accddate,3,2).substr($accddate,0,2);

                $accddate= $req->accddate;//31/05/2019
                $accddate = str_replace('-','',$accddate);
                $accdtime= $req->timeaccident;
                $accdtime = str_replace(':', '', $accdtime);
                if (strlen($accdtime) == 4)
                {
                    $accdtime = $accdtime.'00';
                }
                $place= $req->placeaccd;
                $accwhen= $req->accwhen;
                $whendesc= $req->whendesc;
                $how= $req->how;
                $wagespaid= $req->wagespaid;
                $transport= $req->transport;
                $transportothers= $req->trothers;
                $causative= $req->causative;
                $accdcode= $req->accdcode;
                $industrialcode= $req->industcode;
                $employmentcode= $req->profcode;
                $reasontravel= $req->reason;
                $injurydesc= $req->injurydesc;
                $accwork= $req->accdworkingday;
                $startworktime= $req->startworkingtime;
                $startworktime = str_replace(':', '', $startworktime);
                if (strlen($startworktime) == 4)
                {
                    $startworktime = $startworktime.'00';
                }
                $restperiod= $req->restperiod;
                $restperiod = str_replace(':', '', $restperiod);
                if (strlen($restperiod) == 4)
                {
                    $restperiod = $restperiod.'00';
                }
                $endworktime= $req->endworkingtime;
                $endworktime = str_replace(':', '', $endworktime);
                if (strlen($endworktime) == 4)
                {
                    $endworktime = $endworktime.'00';
                }
                $witnessname= $req->witnessname;
                $witnesscontact= $req->witnesscontact;
                $clinicinfo= $req->clinicinfo;
            
                // $addby= session('loginname');
                //$empcode = session('empcode');

                //return $req->all();

            
                $accident=[ 'operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accddate'=>null,'accdtime'=>null, 
                    'place'=>null, 'accwhen'=>null, 'whendesc'=>null,'how'=>null,  'wagespaid'=>null, 'transport'=>null, 
                    'transportothers'=>null, 'causative'=>null, 'accdcode'=>null,
                    'industrialcode'=>null,'employmentcode'=>null,'reasontravel'=>null, 
                    'injurydesc'=>null, 'accwork'=>null,'startworktime'=>null, 
                    'restperiod'=>null, 'endworktime'=>null,'witnessname'=>null,'witnesscontact'=>null, 
                    'clinicinfo'=>null];
            
                $jsondata = json_encode($accident);

                // return $jsondata;
            
            
                $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updaccidentinfo';

            
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
                // return $result;
                $errorcode = $jsondecode->{'errorcode'};

                if ($errorcode == 0)
                {
                    $caserefno = $jsondecode->{'caserefno'};
                    session(['caserefno'=>$caserefno]);
                    session(['accddate'=>$accddate]);
                    return redirect()->back()->withInput(['tab'=>'death_details'])->with('messageacc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
                }
                else
                {
                    return redirect()->back()->withInput(['tab'=>'death_details'])->with('messageacc','Save unsuccessful');
                }
        }
        
    }

    //POST DEATH DETAILS AT DB 
    public function postDeathDetails(Request $req)
    {
        $deathcause = $req->deathcause;
        $accdeath = $req->accdeath;
        $obsts = $req->obsts;
        $dodeath = $req->dodeath;
        $dodeath = str_replace('-', '', $dodeath);
        
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $caserefno = session('caserefno');
        
        $deathDetails = ['caserefno'=>$caserefno, 'deathcause'=>$deathcause, 'obsts'=>$obsts, 'dodeath'=>$dodeath,
            'operid'=>$operid, 'brcode'=>$brcode, 'accdeath'=>$accdeath ];
        
        $jsondata = json_encode($deathDetails);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddeathinfo';
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

        //return '++'.$result.'++';
            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        //return $result;
        
        $errorcode = $jsondecode->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->with('messagedeath','Save successful');
        }
        else
        {
            return redirect()->back()->with('messagedeath','Save unsuccessful');
        }
        
     }

      //Get GUARDIAN From DB -- ANIS
    public function getGuardianInfo(&$jsondecodeGuardianInfo)
    {    
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getguardianinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeGuardianInfo = json_decode($result);

        curl_close($ch);
        
        //close connection
    }

    //POST GUARDIAN AT DB -- ANIS
    public function postGuardianInfo(Request $req)
    {

        // dd($req->all());
        $no = count($req->guardian_name);
        // dd($no);

        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');

        // $otrecord = Input::get('idno');
        $guardianinfo = array();
        $OT_array = array();

        // $cnt=0;
        // foreach ($req->idtype as $index =>$idtype)
        // {
            // return $data.'++'.$idno;
            $count = $req->count;
            $idtype = $req->idtype;
            $idno = $req->identification_number;
            $name = $req->guardian_name;
            $dodeath = $req->dodeath;
            $add1 = $req->address1;
            $add2 = $req->address2;
            $add3 = $req->address3;
            $postcode = $req->post_code;
            $city = $req->city;
            $statecode = $req->statecode;
            $pobox = $req->pobox;
            $lockedbag = $req->lockedbag;
            $wdt = $req->wdt;

            foreach($count as $i){
                $post ='OT_'.$i;
                $idOTs = $req->$post;
                $OT_array = array();
                //dd($idOTs);
                if ($idOTs !== null && $idOTs !== ''){ //if guardian has an OT

                    foreach($idOTs as $idOT){
                        $splitid = explode('_',$idOT);
                        $otidno = $splitid[0];
                        $otidtype = $splitid[2];
                        $OT_array[]= ['otidtype'=>$otidtype, 'otidno'=>$otidno, 'eligibilitystart'=>'', 'eligibilityend'=>''];  
                    }
                    
                    
                        $guardianinfo[]= ['idtype'=>$idtype[$i], 'idno'=>$idno[$i], 'name'=>$name[$i], 'dodeath'=>'',
                        'add1'=>$add1[$i], 'add2'=>$add2[$i],  'add3'=>$add3[$i], 'postcode'=>$postcode[$i], 'city'=>$city[$i], 
                        'statecode'=>$statecode[$i], 'pobox'=>$pobox[$i], 'lockedbag'=>$lockedbag[$i], 'wdt'=>$wdt[$i], 'telno'=>'', 'mobileno'=>'', 'email'=>'', 
                        'otinfo'=>$OT_array];
                }
                
              }

            //   dd($guardianinfo);

        $data = ['caserefno'=>$caserefno, 'operid'=>$operid, 'brcode'=>$brcode, 'guardianinfo'=>$guardianinfo];
        
        $jsondata = json_encode($data);
        //  dd($jsondata);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updguardianinfo';
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

        // return $jsondata.'+'.$result;
            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        // return $jsondecode. '++' .$result;
        // return $jsondata. '++' .$result;
        
        $errorcode = $jsondecode->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'guardian_details'])->with('messageguardianinfo','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'guardian_details'])->with('messageguardianinfo','Save unsuccessful');
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
    public function getApplicantInfo(&$jsondecodeApplicantinfo)
    {    
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getapplicantinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        curl_close($ch);

        $jsondecodeApplicantinfo = json_decode($result);
        
        //close connection
    }

    //POST APPLICANT AT DB 
    public function postApplicantInfo(Request $req)
    {

        $no = count($req->name);

        $applicantinfo = array();

        $idno = $req->idno;
        $idtype = $req->idtype;
        $name = $req->name;
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $postcode = $req->postcode;
        $city = $req->city;
        $pobox = $req->pobox;
        $lockedbag = $req->lockedbag;
        $wdt = $req->wdt;
        $statecode = $req->statecode;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $relation = $req->relation;
        $amount = $req->amount;

        $caserefno = session('caserefno');
        $operid = session('loginname');//irina betulkan 22072019
        $brcode = session('loginbranchcode');

        for($i = 0; $i<$no; $i++)    
        {
        
        $applicantinfo[$i] = ['idno'=>$idno[$i], 'idtype'=>$idtype[$i], 'name'=>$name[$i],
            'add1'=>$add1[$i], 'add2'=>$add2[$i], 'add3'=>$add3[$i], 'postcode'=>$postcode[$i], 'city'=>$city[$i], 'pobox'=>$pobox[$i], 'lockedbag'=>$lockedbag[$i], 'wdt'=>$wdt[$i],
            'statecode'=>$statecode[$i], 'telno'=>$telno[$i], 'mobileno'=>$mobileno[$i], 'email'=>$email[$i], 'relation'=>$relation[$i], 'amount'=>$amount[$i], 'city'=>$city[$i]];
        }

        $data = ['caserefno'=>$caserefno, 'operid'=>$operid, 'brcode'=>$brcode, 'appinfo'=>$applicantinfo];

        $jsondata = json_encode($data);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updapplicantinfo';
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

        //return '++'.$result.'++';
            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        // return $jsondecode;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'applicant_details'])->with('messageapplicantinfo','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'applicant_details'])->with('messageapplicantinfo','Save unsuccessful');
        }
        
     }

     //Get APPLICANT From DB
    public function getOtInfo(&$jsondecodeOtinfo)
    {    
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getotinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeOtinfo = json_decode($result);

        curl_close($ch);
        
        //close connection
    }

    //POST APPLICANT AT DB 
    public function postOtInfo(Request $req)
    {

        // dd($req->all());
        $no = count($req->name);
        // dd($no);

        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');

        // $otrecord = Input::get('idno');
        $otinfo = array();

        // $cnt=0;
        // foreach ($req->idtype as $index =>$idtype)
        // {
            // return $data.'++'.$idno;
            $idtype = $req->idtype;
            $idno = $req->idno;
            $name = $req->name;
            $relationship = $req->relationship;
            $dob = $req->dob;
            $dob = str_replace('-', '', $dob);
            $passportexp = $req->passportexp;
            $passportexp = str_replace('-', '', $passportexp);
            $eligibilitystart = $req->eligibilitystart;
            // $eligibilitystart = str_replace('-', '', $eligibilitystart);
            $eligibilityend = $req->eligibilityend;
            // $eligibilityend = str_replace('-', '', $eligibilityend);
            $otsts = $req->otsts;    
            $dodeath = $req->dodeath;
            $dodeath = str_replace('-', '', $dodeath);
            $maritalsts =  $req->maritalsts;
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
            $marrieddate = $req->marrieddate;
            $marrieddate = str_replace('-', '', $marrieddate);
            $regmarried = $req->regmarried;
            $edah = $req->edah;
            $marriedobdate = $req->marriedobdate;
            $marriedobdate = str_replace('-', '', $marriedobdate);
            $disability = $req->disability;
            $disablewhen = $req->disablewhen;
            $studystartdate = $req->studystartdate;
            $studystartdate = str_replace('-', '', $studystartdate);
            $studyenddate = $req->studyenddate;
            $studyenddate = str_replace('-', '', $studyenddate);
            $studysts = $req->studysts;
            $edulvl = $req->edulvl;
            $eduothers = $req->eduothers;
            $coursename = $req->coursename;
            $uniname = $req->uniname;
            $guardian = $req->guardian;
            $obotdependence = $req->obotdependence;
            $qualification = $req->qualification;
            $eligibility = $req->eligibility;
            $pendingpay = $req->pendingpay;


        for($i = 0; $i<$no; $i++)    
        {

            if ($otsts[$i] == '6') {

                $otinfo[$i] = ['idno'=>$idno[$i], 'idtype'=>$idtype[$i], 'name'=>$name[$i],
                'relationship'=>$relationship[$i], 'dob'=>$dob[$i], 'passportexp'=>$passportexp[$i], 'eligibilitystart'=>'', 'eligibilityend'=>'', 'otsts'=>$otsts[$i], 'dodeath'=>$dodeath[$i], 'maritalsts'=>'',
                'add1'=>$add1[$i], 'add2'=>$add2[$i], 'add3'=>$add3[$i], 'postcode'=>$postcode[$i], 'city'=>$city[$i], 'pobox'=>$pobox[$i], 'lockedbag'=>$lockedbag[$i], 'statecode'=>$statecode[$i],
                'wdt'=>$wdt[$i], 'telno'=>$telno[$i], 'mobileno'=>$mobileno[$i], 'email'=>$email[$i], 'marrieddate'=>$marrieddate[$i], 'regmarried'=>$regmarried[$i], 'edah'=>$edah[$i], 'marriedobdate'=>$marriedobdate[$i],
                'disability'=>'Y', 'disablewhen'=>$disablewhen[$i], 'studystartdate'=>$studystartdate[$i], 'studyenddate'=>$studyenddate[$i], 'studysts'=>$studysts[$i], 'edulvl'=>$edulvl[$i], 'eduothers'=>$eduothers[$i], 'coursename'=>$coursename[$i],
                'add1'=>$add1[$i], 'add2'=>$add2[$i], 'add3'=>$add3[$i], 'postcode'=>$postcode[$i], 'city'=>$city[$i], 'pobox'=>$pobox[$i], 'lockedbag'=>$lockedbag[$i], 'wdt'=>$wdt[$i],
                'uniname'=>$uniname[$i], 'guardian'=>$guardian[$i], 'obotdependence'=>'', 'qualification'=>'', 'eligibility'=>'', 'pendingpay'=>''];
            
            } else {
           
                $otinfo[$i] = ['idno'=>$idno[$i], 'idtype'=>$idtype[$i], 'name'=>$name[$i],
                'relationship'=>$relationship[$i], 'dob'=>$dob[$i], 'passportexp'=>$passportexp[$i], 'eligibilitystart'=>'', 'eligibilityend'=>'', 'otsts'=>$otsts[$i], 'dodeath'=>$dodeath[$i], 'maritalsts'=>'',
                'add1'=>$add1[$i], 'add2'=>$add2[$i], 'add3'=>$add3[$i], 'postcode'=>$postcode[$i], 'city'=>$city[$i], 'pobox'=>$pobox[$i], 'lockedbag'=>$lockedbag[$i], 'statecode'=>$statecode[$i],
                'wdt'=>$wdt[$i], 'telno'=>$telno[$i], 'mobileno'=>$mobileno[$i], 'email'=>$email[$i], 'marrieddate'=>$marrieddate[$i], 'regmarried'=>$regmarried[$i], 'edah'=>$edah[$i], 'marriedobdate'=>$marriedobdate[$i],
                'disability'=>'N', 'disablewhen'=>$disablewhen[$i], 'studystartdate'=>$studystartdate[$i], 'studyenddate'=>$studyenddate[$i], 'studysts'=>$studysts[$i], 'edulvl'=>$edulvl[$i], 'eduothers'=>$eduothers[$i], 'coursename'=>$coursename[$i],
                'add1'=>$add1[$i], 'add2'=>$add2[$i], 'add3'=>$add3[$i], 'postcode'=>$postcode[$i], 'city'=>$city[$i], 'pobox'=>$pobox[$i], 'lockedbag'=>$lockedbag[$i], 'wdt'=>$wdt[$i],
                'uniname'=>$uniname[$i], 'guardian'=>$guardian[$i], 'obotdependence'=>'', 'qualification'=>'', 'eligibility'=>'', 'pendingpay'=>''];
            }
        }
        
            
        $data = ['caserefno'=>$caserefno, 'operid'=>$operid, 'brcode'=>$brcode, 'otinfo'=>$otinfo];
        
        $jsondata = json_encode($data);
        // dd($jsondata);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updotinfo';
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

        //return '++'.$result.'++';
            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        // return $jsondata. '++' .$result;
        
        $errorcode = $jsondecode->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'dependant_profiles'])->with('messageotinfo','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'dependant_profiles'])->with('messageotinfo','Save unSuccessful');
        }
        
     }

     //Get OBFORM from Assist
    public function getObFormAssist(&$jsondecodeAssist)
    {

        $idno= session('idno');


        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/obprofile/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeAssist = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //get ObProfile FROM API
   

    //get ObContact FROM API
      public function getObContact(&$jsondecod1)
    {   
        //$idno='9611121';
        $idno= session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obcontact/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecod1 = json_decode($result);
        //close connection
        curl_close($ch);
    }

    // GET EMPLOYER FROM ASSIST - HANNIS 
      public function getAssist(&$jsondecodeAssistEmployer)
    {
        //$idno = '1';

        $idno = session('idno');
        $empcode = session('empcode');
        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/employer/'.$empcode;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $jsondecodeAssistEmployer = json_decode ($result);
    
    }

    public function getDoc(&$docinfo)//&$newwages)
    {
        $idno = session ('idno'); // get session
        $caserefno = session ('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getdoc?idno='.$idno.'&caserefno='.$caserefno;//irina
        
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $docinfo = json_decode ($result);
    
    }

     // GET WAGES FROM DB - HANNIS 
     public function getWages(&$contrinfo, &$wagesinfo)//&$newwages)
    {
        $caserefno = session ('caserefno'); // get session
        $idno = session ('idno'); // get session
        $month = session ('mcmonth');
        $year = session('mcyear');
        
        if ($month == '')
        {
            $month = date('m');
        }
        if ($year == '')
        {
            $year = date('Y');
        }

        //$idno = '960422016554';
        // $month = '03';
        // $year = '2019';
        $count = '6';

        
        //$url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wage/'.$idno.'/'.$month.'/'.$year.'/'.$count;//irina
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wages?caserefno='.$caserefno.'&month='.$month.'&year='.$year.'&count='.$count;//irina
        //return $url;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $jsondecodeWages = json_decode ($result);
        
        if ($jsondecodeWages != null && $jsondecodeWages != '')
        {
            // $wagesinfo = $jsondecodeWages->{'wagesinfo'};
             $record = $jsondecodeWages->{'record'};
             // return $record;

                if ($record > 0)
                {
                    $wagesinfo = $jsondecodeWages->{'data'};
                    /*
                    foreach ($data as $d)
                    {
                        $empcode = $d->{'empcode'};
                        $empname = $d->{'empname'};
                        $startdate = $d->{'startdate'};
                        $enddate = $d->{'enddate'};
                        $wagesinfo = $d->{'wagesinfo'};
                    }
                
                    foreach ($wagesinfo as $w)
                    {
                        $year = $w->{'year'};
                        $month = $w->{'month'};
                        $wages = $w->{'wages'};
                    }*/
                

                }
                else
                {
                    $wagesinfo = null;
                }

        }


        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/contribution/'.$idno;//irina
        //return $url;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // return $result;
    
        //close connection
        curl_close($ch);

        $newwages = array();
        $count = 0;
        $jsondecodeContribution = json_decode ($result);
        
        if ($jsondecodeContribution && $jsondecodeContribution!='')
        {
            $contrinfo = $jsondecodeContribution->{'contributioninfo'};
            //$contribution = $contributioninfo[0]->{'contribution'};
            /*
            if ($jsondecodeWages != null && $jsondecodeWages!='')//irina
            {
                $record = $jsondecodeWages->{'record'};
                if ($record > 0)
                {
                    $data = $jsondecodeWages->{'data'};
                    
                    foreach ($data as $d)
                    {
                        $empcode = $d->{'empcode'};
                        $empname = $d->{'empname'};
                        $wagesinfo = $d->{'wagesinfo'};
                        
                        foreach ($$contributioninfo as $contr)
                        {
                            if ($contr->{'empcode'} == $empcode)
                            {
                                $assistcontr = $contr->{'contribution'};
                                 
                                foreach($assistcontr as $ass)
                                {
                                    
                                    if($ass->{'month'} == $contr->{'month'} && 
                                        $ass->{'year'} == $contr->{'year'})
                                    {
                                        $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>$contr->{'contribution'}];
                                        $count++;
                                    }
                                }
                            }
                        }
                    }
                }
            
                foreach($jsondecodeWages as $wages)
                {
                    foreach($contribution as $contr)
                    {
                        if($wages->{'month'} == $contr->{'month'} && 
                            $wages->{'year'} == $contr->{'year'})
                        {
                            $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>$contr->{'contribution'}];
                            $count++;
                        }
                    }
                }
            }
            else
            {
                foreach($contribution as $contr)
                {
                    
                    $newwages[$count] = ['month'=>$contr->{'month'}, 'year'=>$contr->{'year'}, 'wages'=>null, 'contribution'=>$contr->{'contribution'}];
                    $count++;
                    
                }
            }*/
        }
        /*else
        {
            if ($jsondecodeWages != null && $jsondecodeWages!='')//irina
            {
                foreach($jsondecodeWages as $wages)
                {
                    $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>null];
                    $count++;
                    
                }
            }
        }*/
        

        
    
    }
    
    public function GetMCDetails(&$jsondecode)
    {
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        //return $result;
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //GET ACCIDENT INFO 
    public function getAccidentinfo(&$jsondecod3)
    {   
        //$accdrefno='1';
        //$idno='800920145348';
        $caserefno=session('caserefno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getaccidentinfo?caserefno='.$caserefno;
        
        $ch = curl_init();
        
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecod3 = json_decode($result);

        // return $jsondecod3;
        //close connection
        curl_close($ch);
    }

    // // GET MC DETAIL
    public function getMCDetail(&$jsondecodeMCdetail)
     {
         $caserefno = session('caserefno');
         
         $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
         $ch = curl_init();
         
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_PROXY, '');
         
         curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
 
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $result = curl_exec($ch);
         $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
         // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
         
         //return $result;
         $jsondecodeMCdetail = json_decode($result);
         //close connection
         curl_close($ch);
     }


     // // GET MC DETAIL
    //     public function getMCDetail(&$jsondecod4)
    // {   
    //     $mcrefno='1';
    //     $url = 'http://perkesows.com/api/mcdetail/'.$mcrefno;
    //     $ch = curl_init();
        
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
    //     $jsondecod4 = json_decode($result);
    //     //close connection
    //     curl_close($ch);
    // }

    //GET BRANCH NAME FROM DB - FOR SOCSO
    public function getbranchname($statecode)
    {
        $branch=DB::select('select brcode, brname from branch where statecode=?', [$statecode]);
        return json_encode($branch);

    }

    //GET ACCWHEN FROM DB - ACCIDENT DETAIL
    public function getaccwhen($refcode)
    {
        // $accwhen=DB::select('select tablerefcode, descen from reftable  where  refcode=?', [$refcode]);
        // return json_encode($accdwhen);

        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode' , ['accdwhen']);

        if (!$accdwhen)
        {
            return null;
        }
        $cnt = 0;

        if ($refcode == 'I')
        {
            foreach($accdwhen as $acc)
            {
                if($acc->refcode == '01' || $acc->refcode == '06' || $acc->refcode == '07')
                {
                    $accwhen[$cnt]=['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == 'O')
        {
            foreach($accdwhen as $acc)
            {
                $accwhen[$cnt]=['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                $cnt++;
            }
                
        }
        
        
        return json_encode($accwhen);

    }

    public function getdsaccwhen($refcode)
    {
        // $accwhen=DB::select('select tablerefcode, descen from reftable  where  refcode=?', [$refcode]);
        // return json_encode($accdwhen);

        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode' , ['accdwhen']);

        if (!$accdwhen)
        {
            return null;
        }
        $cnt = 0;
        $accwhen = null;
        if ($refcode == 'I')
        {
            foreach($accdwhen as $acc)
            {
                if($acc->refcode == '01')
                {
                    $accwhen[$cnt]=$acc;//['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == 'O')
        {
            foreach($accdwhen as $acc)
            {
                $accwhen[$cnt]=$acc;//['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                $cnt++;
            }
                
        }
        else
        {
            return null;
        }
        
        
        return $accwhen;

    }

    // Get Occupation Sub list
    public function getsuboccucode($refcode)
    {
        // $accwhen=DB::select('select tablerefcode, descen from reftable  where  refcode=?', [$refcode]);
        // return json_encode($accdwhen);
        $suboccucode=DB::select('select r,refcode, r.descen, s.so_suboccdescen from reftable r JOIN suboccupation s ON r.refcode = s.so_occcode WHERE r.tablerefcode =?' , ['occupation']);
        dd($suboccucode);

        if (!$suboccucode)
        {
            return null;
        }
        $cnt = 0;

        if ($refcode == '1')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '1')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '2')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '2')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        
        elseif ($refcode == '3')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '3')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '4')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '4')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '5')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '5')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '6')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '6')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '7')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '7')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '8')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '8')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '9')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '9')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        elseif ($refcode == '0')
        {
            foreach($suboccucode as $sub)
            {
                if($sub->refcode == '0')
                {
                    $suboccucode[$cnt]=['refcode'=>$sub->refcode,'descen'=>$sub->descen];
                    $cnt++;
                }
            }
        }
        
        
        
        return json_encode($suboccucode);

    }

    //for preview - GET
    public function Preview()
    {
        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '')
        {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";


        //SYAHIRAH

        // $jsondecodemp='';
        $jsondecodebank='';
        $jsondecodepermanent='';

        //DEATH
        $jsondecodeDeath='';

        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);

        
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);

        //Death Notice
        $maritalsts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['maritalsts']);
        $otsts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['otsts']);
        $relation = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['relation']);
        $disable = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['disable']);
        $studysts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['studysts']);
        $edulvl = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['edulvl']);
        $applrelation = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['applrelation']);
        // $statecode = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['edulvl']);


        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype';
        $doclist = DB::select($sql,[session('noticetype')]);

        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');

        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';


        $this->getObProfile($jsondecode);
        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);

        //irina - begin
        $caserefno = session('caserefno');

        // Check record for Death Details    
        $a=$this->getDeathDetails($jsondecodeDeath); 
        // return $a;
            // return $jsondecodeDeath;
            if ($jsondecodeDeath && $jsondecodeDeath!='')//irina
            {
                $errorcode = $jsondecodeDeath->{'errorcode'};
                // return $errorcode;
                if ($errorcode == 0)
                {
                    $deathdetail = $jsondecodeDeath->{'data'};
                }
                else
                {
                    $deathdetail = null;
                    // return $deathdetail;
                }
                
            }

        // Check record for Confirmation    
        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation); 
            
            if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
            {
                //$confirmation = $jsondecodeConfirmation->{'record'};
                $confirmation = $jsondecodeConfirmation->{'data'};
            }
           //return json_encode($confirmation);

        // Check record for Applicant Info
        $jsondecodeApplicantinfo = "";
        $this->getApplicantInfo($jsondecodeApplicantinfo); 
            
            if ($jsondecodeApplicantinfo && $jsondecodeApplicantinfo!='')//irina
            {
                    $record = $jsondecodeApplicantinfo->{'record'};
                    if ($record > 0)
                    {
                        $applicantinfo = $jsondecodeApplicantinfo->{'applicantinfo'};
                    }
                    else
                    {
                        $applicantinfo = null;
                    }
            }

            // dd($applicantinfo);

        // Check record for Dependant Info
        $jsondecodeOtinfo = "";
        $this->getOtInfo($jsondecodeOtinfo); 
            
        if ($jsondecodeOtinfo && $jsondecodeOtinfo!='')//irina
        {
                $record = $jsondecodeOtinfo->{'record'};
                // return $record;
                if ($record > 0)
                {
                    $otinfo = $jsondecodeOtinfo->{'otinfo'};                    
                }
                else
                {
                    $otinfo = null;
                }
        }

        // dd($otinfo);

        // Check record for Guardian Info
        $jsondecodeGuardianInfo = "";
        $this->getGuardianInfo($jsondecodeGuardianInfo); 
            
        if ($jsondecodeGuardianInfo && $jsondecodeGuardianInfo!='')//anis
        {
                $record = $jsondecodeGuardianInfo->{'record'};
                // return $record;
                if ($record > 0)
                {
                    $guardianinfo = $jsondecodeGuardianInfo->{'guardianinfo'};

                    
                }
                else
                {
                    $guardianinfo = null;
                }
        }else{
            $guardianinfo ="";
        }
        //dd($guardianinfo);
        
        
        // $accddata = null;
        $mcdata = null;
        $this->getAccidentinfo($jsondecod3); 
                
        if ($jsondecod3 && $jsondecod3!='')//irina
        {
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0)
            {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            }
            else
            {
                $accddata = null;
            }
            
        }
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';
        
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '')
        {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0)
            {
                $jsondecodemc = null;
            }


        }
        
        //irina - end 

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        $this->getEmployer($jsondecodeEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
        //$this->getWages($jsondecodeWages);
        
        $contrinfo = array();
        $wagesinfo = array();
        $data = array();
        
        $this->getWages($contrinfo,$wagesinfo, $data);
        //return $wagesinfo;
        
        $docinfo = array();
        $this->getDoc($docinfo);


        //SYAHIRAH
         $this->getCertificateEmp($jsondecodemp);
         $jsondecodebank = null;

         $jsondecodepermanent = null;
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3); 
            //$data= $jsondecod3->{'data'};
            // $how= $data['how'];
        //}
        
        //irina
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
     
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            //return json_encode($jsondecode);
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
            }
            
            //$test = json_encode($obprofile);
            //return $test;
        }

        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            // return $record;
            if ($record > 0)
            {
                if ($record == 1)
                {
                    $emprecord = $jsondecodeEmployer->{'emprecord'};
                }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        $empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='')//irina
        {
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0)
            {
                $empcert = $jsondecodemp->{'data'};
            }
            
        }
        
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            
           
        }

        if ($jsondecodepermanent && $jsondecodepermanent!='')//irina
        {
            $permanentrep = $jsondecodepermanent->{'data'};
        }

        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // return $state;
        if ($confirmation != null && $confirmation->statecode != '')
        {
            $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
            //return $branch;
        }
        else
        {
            $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
            //return $branch;
        }

        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen = null;
        if ($accddata != null)
        {
            if ($accddata->place != '')
            {
                $accdwhen = $this->getdsaccwhen($accddata->place);
                //return $accdwhen;
            }
            
        }
        

        
        return view('Scheme.noticedeath.preview',['obprofile'=>$obprofile,'state'=>$state, 'branch'=>$branch,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 'accinfo'=>$accddata, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo, 'contribution'=>$contrinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'mcdata'=>$mcdata,'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype, 'maritalsts'=>$maritalsts, 'mcdata'=>$jsondecodemc,
            'otsts'=>$otsts, 'relation'=>$relation, 'disable'=>$disable, 'studysts'=>$studysts, 'edulvl'=>$edulvl, 'applrelation'=>$applrelation,
            'docinfo'=>$docinfo, 'hussts'=>$hussts, 'deathdetail'=>$deathdetail, 'confirmation'=>$confirmation, 'applicantinfo'=>$applicantinfo, 'otinfo'=>$otinfo,
            'guardianinfo'=>$guardianinfo,'doclist_select'=>$alldoclist]);
    }

    //GET CERTIFICATE FROM DB - SYAHIRAH
    public function getCertificateEmp(&$jsondecodemp)
    {
        // $caserefno='1';
        $caserefno = session('caserefno');
        // $url = 'http://perkesows.localhost/api/certificates/'.$caserefno;
        $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/certificate?caserefno='.$caserefno;
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');

        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


        $jsondecodemp=json_decode($result);
        // $data =$jsondecode->{'data'};

        //close connection
        curl_close($ch);
        //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
        //return view ('noticeAccident.obForm');
        // return $httpcode; //$httpcode will contain json data returned by API

    }

    //post bank info
     public function postBankInfo(Request $req)
    {
        $caserefno= session('caserefno');//$req->idno;
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        
        $accexist= $req->accexist;
        $reasonnoacc= $req->reasonnoacc;
        $baists= $req->baists;
        $substsdesc= $req->substsdesc;
        $paymode= $req->paymode;
        $bankloc= $req->bankloc;
        $bankcode= $req->bankcode;
        $ovbankname= $req->ovbankname;
        $swiftcode = $req->swiftcode;
        $bsbcode = $req->bsbcode;
        $localbankbr= $req->localbankbr;
        $localaccno= $req->localaccno;
        $localbankaddr = $req->localbankaddr;
        $localacctype= $req->localacctype;
        $ovaccno = $req->ovaccno;
        $ovbankaddr = $req->ovbankaddr;
        $ovbankbr = $req->ovbankbr;
        $ovacctype = $req->ovacctype;

        if ($paymode == '01')
        {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>$accexist,'reasonnoacc'=>$reasonnoacc, 'baists'=>null, 'substsdesc'=>null, 'paymode'=>$paymode, 'bankloc'=>null,'bankcode'=>null,'ovbankname'=>null,'bankbr'=>null,'bankaddr'=>null,'accno'=>null,'acctype'=>null,'swiftcode'=>null,'bsbcode'=>null];
        }

        else if ($paymode == '02')
        {
            if ($bankloc == 'L')
            {
                $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>null,'reasonnoacc'=>null, 'baists'=>$baists, 'substsdesc'=>$substsdesc, 'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode,'ovbankname'=>null,'bankbr'=>$localbankbr,'bankaddr'=>$localbankaddr,'accno'=>$localaccno,'acctype'=>$localacctype,'swiftcode'=>null,'bsbcode'=>null];
            }
            else if ($bankloc == 'O')
            {
                $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>null,'reasonnoacc'=>null, 'baists'=>$baists, 'substsdesc'=>$substsdesc, 'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode, 'ovbankname'=>$ovbankname,'bankbr'=>$ovbankbr,'bankaddr'=>$ovbankaddr,'accno'=>$ovaccno,'acctype'=>$ovacctype, 'swiftcode'=>$swiftcode,'bsbcode'=>$bsbcode];
            }
        }

        else 
        {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>null,'reasonnoacc'=>null, 'baists'=>null, 'substsdesc'=>null, 'paymode'=>$paymode,'bankloc'=>null,'bankcode'=>null,'ovbankname'=>null,'bankbr'=>null,'bankaddr'=>null,'accno'=>null,'acctype'=>null,'swiftcode'=>null,'bsbcode'=>null];
        }

        
        $jsondata = json_encode($bankinfo);
        // return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/bankinfo';

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

        // return view('noticeAccident.index');
       // return redirect()->back;
            //close connection
        curl_close($ch);
        
        $jsondecode = json_decode($result);
        // return $jsondata.'+'.$result;
        
        if ($jsondecode && $jsondecode != '')
        {
            $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
            if ($errorcode == 0)
            {
                return redirect()->back()->withInput(['tab'=>'bank_information'])->with('messagebank','Save successful');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'bank_information'])->with('messagebank','Save unsuccessful');
            }
        }
      
        
        // return $httpcode;
    }

     //GET BANK INFO FROM DB - SYAHIRAH
    public function getBankInfo(&$jsondecodebank)
        {
            //$idno='1';
            $caserefno = session('caserefno');
            $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/bankinfo?caserefno='.$caserefno;

            $ch = curl_init();
            
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            

            $jsondecodebank =json_decode($result);
            // $data =$jsondecode->{'data'};

            //close connection
            curl_close($ch);
            //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
            //return view ('noticeAccident.obForm');
            // return $httpcode; //$httpcode will contain json data returned by API

        }


    //  --------POST-----------

    

     //POST OBCONTANT AT DB
    //   public function postObcontact(Request $req)
    //     {
    //         $idno  = $req->idno;
    //         $add1 = $req->add1;
    //         $add2 = $req->add2;
    //         $add3 = $req->add3;
    //         $postcode = $req->postcode;
    //         $city = $req->city;
    //         $statecode = $req->statecode;
    //         $telno = $req->telno;
    //         $mobileno = $req->mobileno;
    //         $email = $req->email;
    //         $nationality = $req->nationality;
    //         $addby = $req->addby;
    //         $dateadd = $req->dateadd;

    //     $obForm = ['idno'=> $idno, 'add1'=> $add1,'add2'=> $add2, 'add3'=> $add3, 'postcode'=> $postcode, 'city'=> $city, 'statecode'=> $statecode,  'telno'=> $telno,  'mobileno'=> $mobileno,  'email'=> $email,  'nationality'=> $nationality,  'addby'=> $addby, 'dateadd'=> $dateadd ];
    //     $jsondata = json_encode($obForm);
       
    //     $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobcontact';
    //     $ch = curl_init();
        
    //     curl_setopt($ch,CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    //     curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
    //     curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

    //         //close connection
    //     curl_close($ch);
    //     //return redirect()->back();
    //     // return $this->index();
    // }

     

    //POST WAGES AT DB - HANNIS
    public function postWages(Request $req)
    {
        $caserefno= session('caserefno'); 
        $operid = session('loginname');
        // $brcode = session('loginbranchcode');
        

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
        
        $wages = ['caserefno'=>$caserefno, 'operid'=>$operid, 'data'=>$data];
        $jsondata = json_encode($wages);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newwages';

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
        // return $jsondata.'++'.$result;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save unsuccessful');
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
    
    //chg10072019 - new UpdMC from Asma
    public function UpdMC(Request $req)
    {
        //$no = count($req->hussts);

        $mcmonth = '';
        $mcyear = '';               
        $mcinfo = array();
        //dd($req->all());

        $mc_arr = $req->input('hussts');
        $i = 0;
        // Loop for dynamic medical leave
        if ($mc_arr != null)
        {
            foreach($mc_arr as $key => $value){
                // Log::info($key .' dan '. $value);

                ${'workinfo'.$i} = array();

                $arr = $req->input('workstartdate'.$key);
                if ($arr != null)
                {
                    foreach($arr as $key2 => $value){
                        // Log::info($key2 .' dan '. $value);

                        if(empty($value) || $value == NULL || $value == ""){
                            $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-','',$req->mcstartdate[$key]),'enddate'=>str_replace('-','',$req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>[]];
                            Log::info($mcinfo[$i]);
                        }else{
                            // dd('ada value');
                            $no_work = count($req->input('workstartdate'.$key));
                            // // dd($no_work);

                            for($j = 0; $j<$no_work; $j++)
                            {
                                ${'workinfo'.$key}[$j] = ['wagespaid'=>'','workstartdate'=>str_replace('-','',$req->input('workstartdate'.$key.'.'.$j)), 'workenddate'=>str_replace('-','',$req->input('workenddate'.$key.'.'.$j)),'totalwork'=>$req->input('totalwork'.$key.'.'.$j), 'statuswork'=>$req->input('statuswork'.$key.'.'.$j)];
                            }

                            $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-','',$req->mcstartdate[$key]),'enddate'=>str_replace('-','',$req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>${'workinfo'.$i}];
                        }
                    }

                    $i++;
                }
            }
        }
        else
        {
            $mcinfo = null;
        }

        $mcdata = ['operid'=>session('loginname'), 'brcode'=>session('loginbranchcode'), 'caserefno'=>session('caserefno'), 'clinicinfo'=>$req->clinicinfo, 'mcinfo'=>$mcinfo];
    
        //dd($mcdata);
        $jsondata = json_encode($mcdata);

        //dd($jsondata);
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updmcinfo';
        
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
        $retcode = $res->{'errorcode'};
        
        if ($retcode == 0) // Success insert
        {
            // session(['mcmonth'=>$mcmonth,'mcyear'=>$mcyear]);
            return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save successful');
        }
        else // Fail insert
        {
            return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save unsuccessful');
        }        
    }
    
    
     //POST ACCIDENT AT DB
    public function postAccident(Request $req)
    {
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $caserefno = session('caserefno');
        //$idno= session('idno');
        //$accddate = substr($accddate,6,4).substr($accddate,3,2).substr($accddate,0,2);
       
        $accddate= $req->accddate;//31/05/2019
        $accddate = str_replace('-','',$accddate);
        $accdtime= $req->timeaccident;
        $accdtime = str_replace(':', '', $accdtime);
        if (strlen($accdtime) == 4)
        {
            $accdtime = $accdtime.'00';
        }
        $place= $req->placeaccd;
        $accwhen= $req->accwhen;
        $whendesc= $req->whendesc;
        $how= $req->how;
        $wagespaid= $req->wagespaid;
        $transport= $req->transport;
        $transportothers= $req->trothers;
        $causative= $req->causative;
        $accdcode= $req->accdcode;
        $industrialcode= $req->industcode;
        $employmentcode= $req->profcode;
        $reasontravel= $req->reason;
        $injurydesc= $req->injurydesc;
        $accwork= $req->accdworkingday;
        $startworktime= $req->startworkingtime;
        $startworktime = str_replace(':', '', $startworktime);
        if (strlen($startworktime) == 4)
        {
            $startworktime = $startworktime.'00';
        }
        $restperiod= $req->restperiod;
        $restperiod = str_replace(':', '', $restperiod);
        if (strlen($restperiod) == 4)
        {
            $restperiod = $restperiod.'00';
        }
        $endworktime= $req->endworkingtime;
        $endworktime = str_replace(':', '', $endworktime);
        if (strlen($endworktime) == 4)
        {
            $endworktime = $endworktime.'00';
        }
        $witnessname= $req->witnessname;
        $witnesscontact= $req->witnesscontact;
        $clinicinfo= $req->clinicinfo;

        // $addby= session('loginname');
        //$empcode = session('empcode');
        
        //return $req->all();
        

        $accident=[ 'operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accddate'=>$accddate,'accdtime'=>$accdtime, 
            'place'=>$place, 'accwhen'=>$accwhen, 'whendesc'=>$whendesc,'how'=>$how,  'wagespaid'=>$wagespaid, 'transport'=>$transport, 
            'transportothers'=>$transportothers, 'causative'=>$causative, 'accdcode'=>$accdcode,
            'industrialcode'=>$industrialcode,'employmentcode'=>$employmentcode,'reasontravel'=>$reasontravel, 
            'injurydesc'=>$injurydesc, 'accwork'=>$accwork,'startworktime'=>$startworktime, 
            'restperiod'=>$restperiod, 'endworktime'=>$endworktime,'witnessname'=>$witnessname,'witnesscontact'=>$witnesscontact, 
            'clinicinfo'=>$clinicinfo];

        $jsondata = json_encode($accident);
        
        //return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updaccidentinfo';
        

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
            $caserefno = $jsondecode->{'caserefno'};
            session(['caserefno'=>$caserefno]);
            session(['accddate'=>$accddate]);
            return redirect()->back()->withInput(['tab'=>'accddetails'])->with('messageacc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'accddetails'])->with('messageacc','Save unsuccessful');
        }
        
        
        
    }

    // POST MCDETAIL AT DB
    // public function postMcDetails(Request $req)
    // {
    //     $caserefno= $req->caserefno;
    //     $mcrefno= $req->mcrefno;
    //     $husstatus= $req->husstatus;
    //     $clinicrefno= $req->clinicrefno;
    //     $startdate= $req->startdate;
    //     $enddate= $req->enddate;
    //     $mcsts= $req->mcsts;
    //     $totalmc= $req->totalmc;
    //     $wagespaid= $req->wagespaid;
    //     $workstartdate= $req->workstartdate;
    //     $workenddate= $req->workenddate;
    //     $totalwork= $req->totalwork;
    //     $statuswork= $req->statuswork;
    //     $adddate= $req->adddate;
    //     $addby= $req->addby;
    //     $baoappdate= $req->baoappdate;
        
    //     $mcdetails=['caserefno'=>$caserefno,'mcrefno'=>$mcrefno,'husstatus'=>$husstatus,'clinicrefno'=>$clinicrefno, 'startdate'=>$startdate,'enddate'=>$enddate, 'mcsts'=>$mcsts, 'totalmc'=>$totalmc, 'wagespaid'=>$wagespaid, 'workstartdate'=>$workstartdate, 'workenddate'=>$workenddate, 'totalwork'=>$totalwork, 'statuswork'=>$statuswork, 'adddate'=>$adddate,'addby'=>$addby, 'addby'=>$addby, 'baoappdate'=>$baoappdate];

    //     $jsondata = json_encode($mcdetails);


    //     $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newmcdetail';

    //     $ch = curl_init();
        
    //     curl_setopt($ch,CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    //     curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
    //     curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

    //     curl_close($ch);
    //     return redirect()->back();
    // }  

    //POST POST PERMANENT AT DB - SYAHIRAH
    public function postPermanentRep(Request $req)
    {
        $idno= $req->idno;
        $perrep= $req->perrep;
        $perrepname= $req->perrepname;
        $id_type= $req->id_type;
        $dob= $req->dob;
        $passexpiry= $req->passexpiry;
        $insuredper= $req->insuredper;
        $repstatus= $req->repstatus;
        $ic_no= $req->ic_no;
        
  

        $permanent=['idno'=>'3','perrep'=>$perrep,'perrepname'=>$perrepname,'id_type'=>$id_type,'dob'=>$dob,'passexpiry'=>$passexpiry,'insuredper'=>$insuredper,'repstatus'=>$repstatus,'ic_no'=>$ic_no];

        $jsondata = json_encode($permanent);


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/permanentrep';

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

        // return view('noticeAccident.index');
       // return redirect()->back;
            //close connection
        curl_close($ch);
        return redirect()->back();


        
        // return $httpcode;
    }


    // POST REMARKS
    //  public function postRemark(Request $req)
    //     {   
    //         $remarkid = $req->remarkid;
    //         $remarks = $req->remarks;

    //     $remark = ['remarkid'=> $remarkid, 'remarks'=> $remarks];
    //     $jsondata = json_encode($remark);
       
    //     $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newremark';
    //     $ch = curl_init();
        
    //     curl_setopt($ch,CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    //     curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
    //     curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

    //     curl_close($ch);
    //     return redirect()->back();
    //  }

    public function indexSCO()
    {
        return view('Scheme.noticedeath.index_SCO');
    }
     /* ---------------- NOTICE ACCIDENT -- IO-------------------- */
    public function indexIO()
    {
        return view('Scheme.noticedeath.index_IO');
    }
 /* ---------------- NOTICE ACCIDENT -- SAO-------------------- */
    public function indexSAO()
    {
        return view('Scheme.noticedeath.index_SAO');
    }
   
}
