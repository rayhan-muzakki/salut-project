<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KabKo;

class KabKoController extends Controller
{
    public function showAllKabko()
    {
        return response()->json(KabKo::all());
    }

    public function showOneKabko($id)
    {
        return response()->json(KabKo::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'kode' => 'required'
        ]);

        $kabko = KabKo::create($request->all());

        return response()->json($kabko, 201);
    }

    public function update($id, Request $request)
    {
        $kabko = KabKo::findOrFail($id);
        $kabko->update($request->all());

        return response()->json($kabko, 200);
    }

    public function delete($id)
    {
        KabKo::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
