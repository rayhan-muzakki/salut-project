<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minat extends Model
{
    protected $table = 'minat';
    public $timestamps = false;

    protected $fillable = [
        'name','email','hp'
    ];

    protected $hidden = [];
}
