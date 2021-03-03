<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class upbjj extends Model
{
    protected $table = 'upbjj';

    public $timestamps = false;

    protected $fillable = [
        'name','kode','website'
    ];

    protected $hidden = [];
}
