<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffTipe;

class StaffTipeController extends Controller
{
    public function showAllStaffTipe()
    {
        return response()->json(StaffTipe::all());
    }

    public function showOneStaffTipe($id)
    {
        return response()->json(StaffTipe::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $staff_tipe = StaffTipe::create($request->all());

        return response()->json($staff_tipe, 201);
    }

    public function update($id, Request $request)
    {
        $staff_tipe = StaffTipe::findOrFail($id);
        $staff_tipe->update($request->all());

        return response()->json($staff_tipe, 200);
    }

    public function delete($id)
    {
        StaffTipe::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
