<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mbrstate;

class MbrStateController extends Controller
{
    public function showAllMbrstate()
    {
        return response()->json(mbrstate::all());
    }

    public function showOneMbrstate($id)
    {
        return response()->json(mbrstate::find($id));
    }
}
