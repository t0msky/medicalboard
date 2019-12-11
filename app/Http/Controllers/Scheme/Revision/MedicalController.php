<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MedicalController extends Controller
{
    public function index_pk()
    {
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);

        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');

        return view('scheme.noticeOd.revision.medical_board.PK.index',['doclist'=>$doclist, 'doclist_select'=>$alldoclist]);
    }

    public function index_sco()
    {
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);

        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);

        return view('scheme.noticeOd.revision.medical_board.SCO.index',['doclist'=>$doclist, 'doclist_select'=>$alldoclist, 'state'=>$state]);
    }

    public function index_io()
    {
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);

        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);

        return view('scheme.noticeOd.revision.medical_board.IO.index',['doclist'=>$doclist, 'doclist_select'=>$alldoclist, 'state'=>$state]);
    }

        public function index_sao()
    {
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);

        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);

        return view('scheme.noticeOd.revision.medical_board.SAO.index',['doclist'=>$doclist, 'doclist_select'=>$alldoclist, 'state'=>$state]);
    }
}
