<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    public function ViewStudent()
    {
        $student = StudentClass::all();
        return view('admin.setups.student_class.student_view',compact('student'));
    }

    public function StudentAdd()
    {
        return view('admin.setups.student_class.student_add');
    }

    public function StudentStore(Request $request)
    {
      $validatedData = $request->validate([
         'name' => 'required|unique:student_classes,name',
        
      ]);

      $student = new StudentClass;
      $student->name = $request->name;
      $student->save();
      return redirect()->route('student.view');
    }

    public function StudentEdit($id)
    {
        $student = StudentClass::find($id);
        return view('admin.setups.student_class.student_edit',compact('student'));

    }

    public function StudentUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:student_classes,name',
           
         ]);

        $student = StudentClass::find($id);
        $student->name = $request->name;
        $student->save();

        return redirect()->route('student.view');

    }

    public function StudentDelete($id)
    {
        $student = StudentClass::find($id);
        $student->delete();
        return redirect()->route('student.view');

    }
}
