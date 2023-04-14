<?php

namespace App\Imports;

use App\Models\AutoCars;
use Maatwebsite\Excel\Concerns\ToModel;

class CarsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AutoCars([
            'car_code'     => $row[1],
            'car_name'    => $row[2], 
            'car_type'    => $row[3], 
            'car_model'    => $row[4], 
            'car_prize'    => $row[5], 
            'year_release'    => $row[6], 
            'monthly'    => $row[7], 
            'year_coverage'    => $row[8], 
        ]);
    }
}
