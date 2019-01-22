<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'description', 'unitId','unitValue','pathImage'
    ];
}
