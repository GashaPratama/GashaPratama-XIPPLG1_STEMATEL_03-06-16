<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
}
