<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function showAllMatkul()
    {
        return response()->json(matkul::all());
    }

    public function showOneMatkul($id)
    {
        return response()->json(matkul::find($id));
    }
}
