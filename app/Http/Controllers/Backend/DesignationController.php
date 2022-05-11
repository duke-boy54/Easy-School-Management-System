<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function ViewDesignation()
    {
        $designation = Designation::all();
        return view('admin.setups.designation.view_designation',compact('designation'));
    }

    public function AddDesignation()
    {
        return view('admin.setups.designation.add_designation');
    }

    public function StoreDesignation(Request $request)
    {
      $validatedData = $request->validate([
         'designation_name' => 'required|unique:designations,designation_name',
        
      ]);

      $designation = new Designation;
      $designation->designation_name = $request->designation_name;
      $designation->save();
      return redirect()->route('designation.view');
    }

    public function EditDesignation($id)
    {
        $designation = Designation::find($id);
        return view('admin.setups.designation.edit_designation',compact('designation'));

    }

    public function UpdateDesignation(Request $request,$id)
    {
        $validatedData = $request->validate([
            'designation_name' => 'required|unique:student_classes,name',
           
         ]);

        $designation = Designation::find($id);
        $designation->designation_name = $request->designation_name;
        $designation->save();

        return redirect()->route('designation.view');

    }

    public function DeleteDesignation($id)
    {
        $designation = Designation::find($id);
        $designation->delete();
        return redirect()->route('designation.view');

    }
}
