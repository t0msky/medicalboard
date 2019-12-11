<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DependantController extends Controller {

   public function index() {
      return view('scheme.noticeDeath.revision.dependant.PK.index');
   }

   public function indexSCO() {
      return view('scheme.noticeDeath.revision.dependant.SCO.index');
   }

   public function indexIO() {
      return view('scheme.noticeDeath.revision.dependant.IO.index');
   }

   public function indexSAO() {
      return view('scheme.noticeDeath.revision.dependant.SAO.index');
   }

}