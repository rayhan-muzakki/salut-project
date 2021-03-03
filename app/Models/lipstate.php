<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lipstate extends Model
{
    protected $table = 'lipstate';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];
}
