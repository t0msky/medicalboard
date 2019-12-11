<?php

namespace App\Http\Controllers\Scheme\Others;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class NoIcController extends Controller
{

    public function index()
    {
        return view ('scheme.noticeOd.others.no_ic.PK.index');
    }

    public function index_SCO()
    {
        return view ('scheme.noticeOd.others.no_ic.SCO.index');
    }

    
    public function index_SAO()
    {
        return view ('scheme.noticeOd.others.no_ic.SAO.index');
    }

  
}
