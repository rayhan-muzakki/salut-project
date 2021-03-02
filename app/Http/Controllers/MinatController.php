<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinatController extends Controller
{
    public function showAllMinat()
    {
        return response()->json(Minat::all());
    }

    public function showOneMinat($id)
    {
        return response()->json(Minat::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $minat = Minat::create($request->all());

        return response()->json($minat, 201);
    }

    public function update($id, Request $request)
    {
        $minat = Minat::findOrFail($id);
        $minat->update($request->all());

        return response()->json($kabko, 200);
    }

    public function delete($id)
    {
        Minat::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
