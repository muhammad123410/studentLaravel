<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function subjects(){
        return $this->belongsToMany('App\Subject','subject_teachers');
    }
    public function students(){
        return $this->belongsToMany('App\Student','student_teachers');
    }
   
}
