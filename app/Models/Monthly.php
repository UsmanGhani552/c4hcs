<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'screened',
        'performance_screened',
        'presumptive',
        'performance_presumptive',
        'positive',
        'performance_positive',
        'linked',
        'performance_linked',
        'negitive',
        'pending',
        'invalid',
        'month',
        'year',
    ];
}   
