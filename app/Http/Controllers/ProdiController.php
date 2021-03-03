<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function showAllProdi()
    {
        return response()->json(prodi::all());
    }

    public function showOneProdi($id)
    {
        return response()->json(prodi::find($id));
    }
}
