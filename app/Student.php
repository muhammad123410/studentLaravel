<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use student_subject;
class Student extends Model
{
    public function subjects(){
        return $this->belongsToMany('App\Subject','student_subjects');
    }
    public function teachers(){
        return $this->belongsToMany('App\Teacher','student_teachers');
        
    }

   

}
