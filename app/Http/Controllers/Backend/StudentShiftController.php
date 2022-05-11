<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentShift;

class StudentShiftController extends Controller
{
    public function ViewShift()
    {
        $student_shift = StudentShift::all();
        return view('admin.setups.student_shift.shift_view',compact('student_shift'));
    }

    
    public function AddShift()
    {
        return view('admin.setups.student_shift.shift_add');
    }

    public function StoreShift(Request $request)
    {
        $validatedData = $request->validate([
            'shift_name' => 'required|unique:student_shifts',
         ]);

        $student_shift = new StudentShift;
        $student_shift->shift_name = $request->shift_name;
        $student_shift->save();

        $student_shift = StudentShift::all();

       return redirect()->route('studentshift.view',compact('student_shift'));
    }

    public function EditShift($id)
    {
        $student_shift = StudentShift::find($id);
        return view('admin.setups.student_shift.shift_edit',compact('student_shift'));
    }

    public function UpdateShift(Request $request,$id)
    {
        $validatedData = $request->validate([
            'shift_name' => 'required|unique:student_shifts',

         ]);

        $student_shift = StudentShift::find($id);
        $student_shift->shift_name = $request->shift_name;
        $student_shift->save();

        return redirect()->route('studentshift.view');

    }

    public function DeleteShift($id)
    {
        $student_shift = StudentShift::find($id);
        $student_shift->delete();
        return redirect()->route('studentshift.view');

    }

}
