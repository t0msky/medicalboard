<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class ChangeDateODController extends Controller
{

    public function index()
    {
        return view ('scheme.noticeOd.revision.changedate_od.PK.index');
    }

    public function index_IO()
    {
        return view ('scheme.noticeOd.revision.changedate_od.IO.index');
    }

    public function index_SCO()
    {
        return view ('scheme.noticeOd.revision.changedate_od.SCO.index');
    }

    
    public function index_SAO()
    {
        return view ('scheme.noticeOd.revision.changedate_od.SAO.index');
    }

  
}
