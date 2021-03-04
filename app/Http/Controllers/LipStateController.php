<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lipstate;

class LipStateController extends Controller
{
    public function showAllLipstate()
    {
        return response()->json(lipstate::all());
    }

    public function showOneLipstate($id)
    {
        return response()->json(lipstate::find($id));
    }
}
