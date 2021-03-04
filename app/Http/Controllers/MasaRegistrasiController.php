<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masaregistrasi;

class MasaRegistrasiController extends Controller
{
    public function showAllMasaRegistrasi()
    {
        return response()->json(masaregistrasi::all());
    }

    public function showOneMasaRegistrasi($id)
    {
        return response()->json(masaregistrasi::find($id));
    }
}
