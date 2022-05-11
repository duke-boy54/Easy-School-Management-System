<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;



class StudentYearController extends Controller
{
    public function ViewYear()
    {
        $student_year = StudentYear::all();
        return view('admin.setups.student_class.student_year.stuyear_view',compact('student_year'));
    }

    public function AddYear()
    {
        return view('admin.setups.student_class.student_year.stuyear_add');
    }

    public function StoreYear(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:student_classes,name',
         ]);

        $student_year = new StudentYear;
        $student_year->name = $request->name;
        $student_year->save();

        $student_year = StudentYear::all();

       return redirect()->route('studentyear.view',compact('student_year'));
      
    }

    public function EditYear($id)
    {
        $student_year = StudentYear::find($id);
        return view('admin.setups.student_class.student_year.stuyear_edit',compact('student_year'));
    }

    public function UpdateYear(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:student_classes,name',

         ]);

        $student_year = StudentYear::find($id);
        $student_year->name = $request->name;
        $student_year->save();

        return redirect()->route('studentyear.view');

    }

    public function DeleteYear($id)
    {
        $student_year = StudentYear ::find($id);
        $student_year->delete();
        return redirect()->route('studentyear.view');

    }
}
