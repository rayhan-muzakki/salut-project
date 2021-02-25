<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalutOfc extends Model
{
    protected $table = 'salut_ofc';

    public $timestamps = false;

    protected $fillable = [
        'name','tipe','kabko_id'
    ];

    protected $hidden = [];
}
