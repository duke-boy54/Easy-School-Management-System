<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\StudentGroupController;
use App\Models\StudentGroup;

class StudentGroupController extends Controller
{
    public function ViewGroup()
    {
        $student_group = StudentGroup::all();
        return view('admin.setups.student_group.group_view',compact('student_group'));
    }

    public function AddGroup()
    {
        return view('admin.setups.student_group.group_add');
    }

    public function StoreGroup(Request $request)
    {
        $validatedData = $request->validate([
            'group_name'=>'required|unique:student_groups|min:5',
        ]);

        $student_group = new StudentGroup;
        $student_group->group_name = $request->group_name;
        $student_group->save();

        return redirect()->route('studentgroup.view',compact('student_group'));
    }

    public function EditGroup($id)
    {
        $student_group = StudentGroup::find($id);
       return view('admin.setups.student_group.group_edit',compact('student_group'));
    }

    public function UpdateGroup(Request $request,$id)
    {

        $validatedData = $request->validate([
            'group_name'=>'required|unique:student_groups|min:5',
        ]);
        
        $student_group =StudentGroup::find($id);
        $student_group->group_name = $request->group_name;
        $student_group->save();

        return redirect()->route('studentgroup.view',compact('student_group'));
    }

    public function DeleteGroup($id)
    {
        $student_group =StudentGroup::find($id);
        $student_group->delete();
        return redirect()->route('studentgroup.view');
    }
}
