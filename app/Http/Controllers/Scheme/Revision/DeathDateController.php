<?php

namespace App\Http\Controllers\Scheme\Revision;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DeathDateController extends Controller {

   public function index() {
      return view('scheme.noticeDeath.revision.deathDate.PK.index');
   }

   public function indexSCO() {
      return view('scheme.noticeDeath.revision.deathDate.SCO.index');
   }

   public function indexSAO() {
      return view('scheme.noticeDeath.revision.deathDate.SAO.index');
   }

}