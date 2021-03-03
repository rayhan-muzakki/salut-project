<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpbjjController extends Controller
{
    public function showAllUpbjj()
    {
        return response()->json(upbjj::all());
    }

    public function showOneUpbjj($id)
    {
        return response()->json(upbjj::find($id));
    }
}
