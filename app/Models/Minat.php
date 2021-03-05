<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minat extends Model
{
    protected $table = 'minat';
    public $timestamps = false;

    public function salutOfc(){
    	return $this->belongsTo(SalutOfc::class,'salut_ofc_id','id');
    }

    protected $fillable = [
        'name','email','hp',"masaregistrasi_id",'salut_ofc_id','kanal','area_kanal','tanggal','prodi_id'
    ];

    protected $hidden = [];
}
