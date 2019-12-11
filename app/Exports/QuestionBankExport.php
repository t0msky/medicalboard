<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class QuestionBankExport implements FromView, ShouldAutoSize
{
	public $list;

    public function view(): View
    {
        return view('scheme.general.document.questionbank', ["questionbank" => $this->list]);
    }
}
