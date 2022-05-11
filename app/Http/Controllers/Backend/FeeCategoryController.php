<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function ViewFee()
    {
        $fee_category = FeeCategory::all();
        return view('admin.setups.fee_category.fee_view',compact('fee_category'));
    }

    public function AddFeeCat()
    {
        return view('admin.setups.fee_category.fee_add');
    }

    public function StoreFeeCat(Request $request)
    {
        $validatedData = $request->validate([
            'fee_name' => 'required|unique:fee_categories,fee_name',
         ]);

        $fee_category = new FeeCategory;
        $fee_category->fee_name = $request->fee_name;
        $fee_category->save();

        $fee_category = FeeCategory::all();

       return redirect()->route('feecategory.view',compact('fee_category'));
      
    }

    public function EditFeeCat($id)
    {
        $fee_category = FeeCategory::find($id);
        return view('admin.setups.fee_category.fee_edit',compact('fee_category'));
    }

    public function UpdateFeeCat(Request $request,$id)
    {
        $validatedData = $request->validate([
            'fee_name' => 'required|unique:fee_categories,fee_name',
         ]);

        $fee_category = FeeCategory::find($id);
        $fee_category->fee_name = $request->fee_name;
        $fee_category->save();

        $fee_category = FeeCategory::all();

       return redirect()->route('feecategory.view',compact('fee_category'));
      
    }

    public function DeleteFeeCat($id)
    {
        $fee_category = FeeCategory::find($id);
        $fee_category->delete();

        return redirect()->route('feecategory.view',compact('fee_category'));
    }
}
