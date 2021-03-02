<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function salutOfc(){
    	return $this->belongsTo(SalutOfc::class,'salut_ofc_id','id');
    }

    public function staffType(){
    	return $this->belongsTo(StaffTipe::class,'staff_tipe_id','id');
    }
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password', 'bank_name', 'rekening', 'salut_ofc_id', 'staff_tipe_id'
    ];

    protected $hidden = [];
}
