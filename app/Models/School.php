<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model {
    protected $fillable = [
        'name',
        'nRoom',
        'nSchool',
        'address',
        'phone',
        'email',
        'schoolType',
        'schoolLevel',
    ];
}
