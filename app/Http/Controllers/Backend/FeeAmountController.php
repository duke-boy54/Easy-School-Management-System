<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\FeeCategoryController;
use Illuminate\Http\Request;
use App\Models\FeeCategory;
use App\Models\StudentClass;
use App\Models\FeeAmount;

class FeeAmountController extends Controller
{
    public function ViewFeeAmount()
    {
        // $fee_amount = FeeAmount::all();
        $data['fee_amount'] = FeeAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('admin.setups.fee_amount.view_amount',$data);
    }

   public function AddFeeAmount()
   {
       $data['fee_categories'] = FeeCategory::all();
       $data['classes'] = StudentClass::all();
       return view('admin.setups.fee_amount.add_amount',$data);
   }

   public function StoreFeeAmount(Request $request)
   {
      $count_class = count($request->class_id);
      if($count_class != NULL)
      {
          for($i=0; $i<$count_class; $i++)
          {
              $fee_amount = new FeeAmount();
              $fee_amount->fee_category_id = $request->fee_category_id;
              $fee_amount->class_id = $request->class_id[$i];
              $fee_amount->amount = $request->amount[$i];
              $fee_amount->save();    
          }
      }

      return redirect()->route('feeamount.view',compact('fee_amount'));
     
   }

   public function EditFeeAmount($fee_category_id)
   {
     $data['editdata'] = FeeAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
     $data['fee_categories'] = FeeCategory::all();
     $data['classes'] = StudentClass::all();
     return view('admin.setups.fee_amount.edit_fee',$data);
   }

    public function UpdateFeeAmount(Request $request,$fee_category_id)
    {

        if($request->class_id == NULL)
        {
           dd('error');
        }
        else
        {
            $count_class = count($request->class_id);
            FeeAmount::where('fee_category_id',$fee_category_id)->delete();
            for($i=0; $i<$count_class; $i++)
            {
                $fee_amount = new FeeAmount;
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();    
            }

            return redirect()->route('feeamount.view',compact('fee_amount'));
        }
    }

    public function DetailsFeeAmount($fee_category_id)
    {
        $data['detailsdata'] = FeeAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get(); 
        return view('admin.setups.fee_amount.fee_details_view',$data);
    }

}
