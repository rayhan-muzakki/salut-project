<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mbrstate extends Model
{
    protected $table = 'mbrstate';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];
}
