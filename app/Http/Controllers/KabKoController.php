<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KabKo;

class KabKoController extends Controller
{
    public function showAllKabko()
    {
        return response()->json(kabko::all());
    }

    public function showOneKabko($id)
    {
        return response()->json(kabko::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'kode' => 'required'
        ]);

        $kabko = kabko::create($request->all());

        return response()->json($kabko, 201);
    }

    public function update($id, Request $request)
    {
        $kabko = kabko::findOrFail($id);
        $kabko->update($request->all());

        return response()->json($kabko, 200);
    }

    public function delete($id)
    {
        kabko::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
