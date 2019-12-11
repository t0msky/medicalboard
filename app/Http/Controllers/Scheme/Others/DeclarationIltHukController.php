<?php

namespace App\Http\Controllers\Scheme\Others;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DeclarationIltHukController extends Controller {

   public function index() {
      return view('scheme.noticeDeath.others.iltHuk.PK.index');
   }

   public function indexSCO() {
      return view('scheme.noticeDeath.others.iltHuk.SCO-SAO.index');
   }

   public function indexLetter() {
      return view('scheme.noticeDeath.others.iltHuk.letter.index');
   }

}