<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [

        'name',
        'nroom',
        'nschool',
        'address',
        'phone',
        'email',
        'schooltype',

    ];
}
