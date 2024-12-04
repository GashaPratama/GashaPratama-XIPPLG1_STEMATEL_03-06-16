<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'image',
        'name',
        'instagram',
        'facebook',
        'motto',
    ];
}
