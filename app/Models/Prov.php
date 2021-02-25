<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prov extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name','kode'
    ];

    protected $hidden = [];
}
