<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentSubject;

class StudentSubjectController extends Controller
{
    public function ViewStudentSubject()
    {
        $stu_subject = StudentSubject::all();
        return view('admin.setups.stu_subject.subject_view',compact('stu_subject'));
    }

    public function AddStuSubject()
    {
        return view('admin.setups.stu_subject.add_stu_subject');
    }

  
    public function StoreStuSubject(StudentSubjectStore $request)
    {
    //   TODO" add fiabble to model
         StudentSubject::create([
             'subj_name' => $request->subj_name,

         ]);
       
         StudentSubject::create($request->all());
        
        return redirect()->route('studentsubject.view');
    }

    public function EditStuSubject($id)
    {
        $stu_subject = StudentSubject::find($id);
        return view('admin.setups.stu_subject.subject_edit',compact('stu_subject'));
    }

    public function UpdateStuSubject(Request $request,$id)
    {
        $validatedData = $request->validate([
            'subj_name'=>'required|unique:student_subjects,subj_name',
        ]);

        $stu_subject = StudentSubject::find($id);
        $stu_subject->subj_name = $request->subj_name;
        $stu_subject->save();

        return redirect()->route('studentsubject.view',compact('stu_subject'));

    }

    public function DeleteStuSubject($id)
    {
        $stu_subject = StudentSubject::find($id);
        $stu_subject->subj_name;
        $stu_subject->delete();

        return redirect()->route('studentsubject.view',compact('stu_subject'));
        
    }


}
