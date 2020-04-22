<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use student_subject;
class Subject extends Model
{
    public function students(){
        return $this->belongsToMany('App\Student','student_subjects');
    }
    public function teachers(){
        return $this->belongsToMany('App\Teacher','subject_teachers');
    }
    // public function student(){
    //     return $this->belongsToMany('App\Student','student_subject_teachers');//'teacher_id','student_id')->withPivot('student_id');
    // }
}
