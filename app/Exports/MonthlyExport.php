<?php

namespace App\Exports;

use App\Models\Monthly;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class MonthlyExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Monthly::all();
    }
    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
