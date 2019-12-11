<?php

namespace App\Http\Controllers\Scheme\Others;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DeclarationFotPktController extends Controller {

   public function index() {
      return view('scheme.noticeDeath.others.fotPkt.PK.index');
   }

   public function indexSCO() {
      return view('scheme.noticeDeath.others.fotPkt.SCO-SAO.index');
   }

   public function indexLetter() {
      return view('scheme.noticeDeath.others.fotPkt.letter.index');
   }

}