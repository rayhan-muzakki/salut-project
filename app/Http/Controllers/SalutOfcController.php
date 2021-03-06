<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalutOfc;

class SalutOfcController extends Controller
{
    public function showAllOffices()
    {
        return response()->json(SalutOfc::all());
    }

    public function showOneOffice($id)
    {
        return response()->json(SalutOfc::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $office = SalutOfc::create($request->all());

        return response()->json($office, 201);
    }

    public function update($id, Request $request)
    {
        $office = SalutOfc::findOrFail($id);
        $office->update($request->all());

        return response()->json($office, 200);
    }

    public function delete($id)
    {
        SalutOfc::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
