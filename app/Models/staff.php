<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password', 'bank_name', 'rekening', 'salut_ofc_id', 'staff_tipe_id'
    ];

    protected $hidden = [];
}
