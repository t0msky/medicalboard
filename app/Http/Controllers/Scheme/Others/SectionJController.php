<?php

namespace App\Http\Controllers\Scheme\Others;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SectionJController extends Controller {

   public function index() {
      return view('scheme.noticeDeath.others.sectionJ.index');
   }

   public function indexSCO() {
      return view('scheme.noticeDeath.others.sectionJ.SCO-SAO.index');
   }

   public function indexLetter() {
      return view('scheme.noticeDeath.others.sectionJ.letter.index');
   }

}