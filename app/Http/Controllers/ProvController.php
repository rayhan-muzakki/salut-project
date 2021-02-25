<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvController extends Controller
{
    public function showAllProv()
    {
        return response()->json(Prov::all());
    }

    public function showOneProv($id)
    {
        return response()->json(Prov::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'kode' => 'required'
        ]);

        $prov = Prov::create($request->all());

        return response()->json($prov, 201);
    }

    public function update($id, Request $request)
    {
        $prov = Prov::findOrFail($id);
        $prov->update($request->all());

        return response()->json($prov, 200);
    }

    public function delete($id)
    {
        Prov::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
