<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $table = 'matkul';

    public $timestamps = false;

    protected $fillable = [
        'name','kode'
    ];

    protected $hidden = [];
}
