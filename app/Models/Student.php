<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table="student";
    public $timestamps=false;



    function listOfCourses()
    {
    	return $this->belongsToMany(Course::class,"student_course","student_id","course_id");
    }
}
