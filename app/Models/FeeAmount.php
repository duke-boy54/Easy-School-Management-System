<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeAmount extends Model
{
   public function FeeCatAmount()
   {
       return $this->belongsTo(FeeCategory::class,'fee_category_id','id');
   }

   public function FeeAmountDetails()
   {
       return $this->belongsTo(StudentClass::class,'class_id','id');
   }
}
