<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekly extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'screened',
        'presumptive',
        'positive',
        'linked',
        'negative',
        'pending',
        'invalid',
        'month',
        'year',
        'performance_screened',
        'performance_presumptive',
        'performance_positive',
        'performance_linked'
    ];
}
