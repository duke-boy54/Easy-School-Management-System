<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentSubject;
use App\Models\StudentClass;
use App\Models\AssignSubject;

class AssignSubjectController extends Controller
{
    public function ViewAssignSubject()
    {
        $data['assign_subj'] = AssignSubject::select('class_id')->groupBy('class_id')->get();
        return view('admin.setups.assign_subject.view',$data);
    }

    public function AddAssignSubject()
    {
        $data['subjects'] = StudentSubject::all();
        $data['classes'] = StudentClass::all();
        return view('admin.setups.assign_subject.add',$data);
    }

    public function StoreAssignedSubject(Request $request)
    {
        $count_subj = count($request->subject_id);
        if($count_subj != NULL)
        {
            for($i=0; $i<$count_subj; $i++)
            {
              $assign_subj = new AssignSubject();
              $assign_subj->class_id = $request->class_id;
              $assign_subj->subject_id = $request->subject_id[$i];
              $assign_subj->full_mark = $request->full_mark[$i];
              $assign_subj->pass_mark = $request->pass_mark[$i];
              $assign_subj->subjective_mark =$request->subjective_mark[$i];
              $assign_subj->save();
            }
        }
        return redirect()->route('assignsubject.view',compact('assign_subj'));

    }

    public function EditAssignedSubject($class_id)
    {
        $data['editdata'] = AssignSubject::where('class_id',$class_id)->orderBy('subject_id','asc')->get();
        $data['subjects'] = StudentSubject::all();
        $data['classes'] = StudentClass::all();
        return view('admin.setups.assign_subject.edit',$data);
    }

    public function UpdateAssignedSubject(Request $request,$class_id)
    {

        if($request->subject_id == NULL)
        {
           dd('error you didnt select any subject');
           return redirect()->route('assignsubject.view');
        }
        else
        {
            $count_subject = count($request->subject_id);
            AssignSubject::where('class_id',$class_id)->delete();
            for($i=0; $i<$count_subject; $i++)
            {
                $assign_subj = new AssignSubject();
                $assign_subj->class_id = $request->class_id;
                $assign_subj->subject_id = $request->subject_id[$i];
                $assign_subj->full_mark = $request->full_mark[$i];
                $assign_subj->pass_mark = $request->pass_mark[$i];
                $assign_subj->subjective_mark =$request->subjective_mark[$i];
                $assign_subj->save();
            }

            return redirect()->route('assignsubject.view',compact('assign_subj'));
        }
    }

    public function SubjectDetails($class_id)
    {
        $data['detailsdata'] = AssignSubject::where('class_id',$class_id)->orderBy('class_id','asc')->get();
        return view('admin.setups.assign_subject.details',$data);
    }
    
}
