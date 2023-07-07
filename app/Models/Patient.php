<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'first_name',
        'last_name',

        'phone',
        'email',

        'address_line_1',
        'address_line_2',
        'city',
        'province',
        'country',
        'zip',

        'gender',
        'age',
        'height',
        'height_unit',
        'weight',
        'weight_unit',
        'birthday',

        'ethnicity',
        'diabetes',
        'smoke',
        'fhhx',
        'lipid',
        'htnmed',

        'deprecated'
    ];
}
