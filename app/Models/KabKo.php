<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KabKo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name','kode','prov_id'
    ];

    protected $hidden = [];
}
