<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class masaregistrasi extends Model
{
    protected $table = 'masaregistrasi';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];
}
