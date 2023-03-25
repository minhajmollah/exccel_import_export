<?php

namespace App\Exports;

use App\Models\Execel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExecelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Execel::all();
    }
}
