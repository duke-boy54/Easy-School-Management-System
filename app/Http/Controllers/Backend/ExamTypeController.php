<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function ViewExamType()
    {
        $data['exam_data'] = ExamType::all();
       return view('admin.setups.exam_types.view_exam',$data);
    }

    public function AddExamType()
    {
        return view('admin.setups.exam_types.add_exam_type');
    }

    public function StoreExamType(Request $request)
    {
        $validatedData = $request->validate([
            'exam_name'=>'required|unique:exam_types,exam_name',
        ]);

        $exam_type = new ExamType;
        $exam_type->exam_name = $request->exam_name;
        $exam_type->save();

        return redirect()->route('examtype.view',compact('exam_type'));

    }

    public function EditExamType($id)
    {
        $exam_type = ExamType::find($id);
        return view('admin.setups.exam_types.edit_examtype',compact('exam_type'));
    }

    public function UpdateExamType(Request $request,$id)
    {
        $validatedData = $request->validate([
            'exam_name'=>'required|unique:exam_types,exam_name',
        ]);

        $exam_type = ExamType::find($id);
        $exam_type->exam_name = $request->exam_name;
        $exam_type->save();

        return redirect()->route('examtype.view',compact('exam_type'));
    }

    public function DeleteExamType($id)
    {
        $exam_type = ExamType::find($id);
        $exam_type->exam_name;
        $exam_type->delete();

        return redirect()->route('examtype.view',compact('exam_type'));
        
    }
}
