<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class ProvisionalController extends Controller
{

    public function index_SCO()
    {
        return view ('scheme.noticeOd.revision.provisional.SCO.index');
    }

    
    public function index_SAO()
    {
        return view ('scheme.noticeOd.revision.provisional.SAO.index');
    }

  
}
