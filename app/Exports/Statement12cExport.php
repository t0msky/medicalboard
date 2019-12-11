<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class Statement12cExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('scheme.general.document.statement12c');
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
            	$styleArray = [
				    'borders' => [
				        'bottom' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				            'color' => ['argb' => '00000000'],
				        ],
				    ],
				];

                $event->sheet->getDelegate()->getStyle('C4')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C5')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C9')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C10')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C12')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C16')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C18')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C20')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C21')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C23')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C24')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C25')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C27')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C28')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C29')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C31')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C32')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C34')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C35')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C37')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C39')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C40')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C41')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C42')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(50);
            },
        ];
    }
}
