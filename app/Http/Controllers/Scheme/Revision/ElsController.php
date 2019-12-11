<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElsController extends Controller
{
    //revision ELS-mat
    public function index(){
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
        
        
        return view('scheme.noticeOd.revision.els.PK.index');
    }
    public function indexEls(){
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
        
        
        return view('scheme.noticeOd.revision.els.SCO.index');
    }
    public function indexElsSao(){
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
        
        
        return view('scheme.noticeOd.revision.els.SAO.index');
    }
    public function indexElsIO(){
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
        
        
        return view('scheme.noticeOd.revision.els.IO.index');
    }
    public function revision(){
        
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);

        return view('scheme.noticeOd.revision.els.index',['obprofile'=>$obprofile,'state'=>$state, 
            'idtype'=>$idtype, 'occucode'=> $occucode, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'odempinfo' => $odempinfo, 'oddata'=>$oddata, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'doclist_select'=>$alldoclist]);

    }
}