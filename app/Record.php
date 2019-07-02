<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'glucose',
        'insulin',
        'carbohydrates',
        'description',
        'date',
        'username'
    ];
}
