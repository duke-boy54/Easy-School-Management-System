<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    use HasFactory;
    protected $fillable = ([
        'class_id',
        'subject_id',
        'full_mark',
        'pass_mark',
        'subjective_mark',
    ]);

    public function student_class()
    {
        return $this->belongsTo(StudentClass::class, 'class_id','id');
    }

    public function student_subject()
    {
        return $this->belongsTo(StudentSubject::class, 'subject_id','id');
    }

    public function subject_marks()
    {
        return $this->belongsTo(AssignSubject::class, 'subject_id','id');
    }
}
