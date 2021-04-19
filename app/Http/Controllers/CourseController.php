<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function orm()
    {
    	dd(Course::all());
    }

    function index()
    {
    	$list = Course::all();
    	return view("show_course",
    		[
    			"heading" => "List Of Courses Detail",
    			"list" => $list,
    			"list1" => $list
    		]);
    }

    function layout()
    {
    	return view("child")->with("title","Child");
    }
}
