<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffTipeController extends Controller
{
    public function showAllStaffTipe()
    {
        return response()->json(staff_tipe::all());
    }

    public function showOneStaffTipe($id)
    {
        return response()->json(staff_tipe::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $staff_tipe = staff_tipe::create($request->all());

        return response()->json($staff_tipe, 201);
    }

    public function update($id, Request $request)
    {
        $staff_tipe = staff_tipe::findOrFail($id);
        $staff_tipe->update($request->all());

        return response()->json($staff_tipe, 200);
    }

    public function delete($id)
    {
        staff_tipe::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
