<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoCars extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'car_code',
        'car_name',
        'car_type',
        'car_model',
        'car_prize',
        'year_release',
        'monthly',
        'year_coverage'
    ];
}
