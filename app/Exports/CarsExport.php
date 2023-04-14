<?php

namespace App\Exports;

use App\Models\AutoCars;
use Maatwebsite\Excel\Concerns\FromCollection;

class CarsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AutoCars::all();
    }
}
