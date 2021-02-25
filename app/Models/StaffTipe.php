<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffTipe extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];
}
