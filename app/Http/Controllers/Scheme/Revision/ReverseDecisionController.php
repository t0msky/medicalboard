<?php

namespace App\Http\Controllers\scheme\revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class ReverseDecisionController extends Controller
{
    // BK TO BBK
    public function index_bk_to_bbk()
    {
        return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.PK.index');
    }

    public function index_IO_bk_to_bbk()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.index');
    }

    public function index_SCO_bk_to_bbk()
    {
         return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.index');
    }

    public function index_SAO_bk_to_bbk()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.index');
    }
    // BK TO BBK


    // NATIONALITY
    public function index_nationality()
    {
        return view ('scheme.noticeAccident.revision.reverse_decision_nationality.PK.index');
    }
    public function index_IO_nationality()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_nationality.IO.index');
    }

    public function index_SCO_nationality()
    {
      $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
      $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
              . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
      $uniquerefno = "2019070001";
      $caserefno = "201907240008";
      $noticetype="03";
      $doclist = DB::select($sql, [$noticetype]);
      $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
      // $docinfo =DB::select('Select r.notes, r.docid, r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
      $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
      return view('scheme.noticeAccident.revision.reverse_decision_nationality.SCO.index', ['idtype'=>$idtype,'doclist'=>$doclist, 'doclist_select'=>$alldoclist, 'month' => $month]);
    }

    public function index_SAO_nationality()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_nationality.SAO.index');
    }
    //NATIONALITY
  
}





