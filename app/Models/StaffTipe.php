<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffTipe extends Model
{
    protected $table = 'staff_tipe';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];
}
