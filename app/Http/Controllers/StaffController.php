<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function showAllStaffs()
    {
        return response()->json(Staff::all());
    }

    public function showOneStaff($id,$name)
    {
        return response()->json(Staff::find('id LIKE :id AND name LIKE :name'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:staff',
        ]);

        $staff = staff::create($request->all());

        return response()->json($staff, 201);
    }

    public function update($id, Request $request)
    {
        $staff = staff::findOrFail($id);
        $staff->update($request->all());

        return response()->json($staff, 200);
    }

    public function delete($id)
    {
        Staff::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
