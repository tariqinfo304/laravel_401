<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

use DB;

class APIController extends Controller
{

	private function send_response($list,$total=0,$status=200)
	{
		$res = [
					"status" => $status,
					"total_record" => $total,
					"data" => $list
			];

		return response()->json($res);
	}

    function get_course_list(Request $req)
    {
    	$name = "%". $req->input("name"). "%";

    	$list = Course::where("name","like",$name)->get();
    	return $this->send_response($list,count($list));
    }

    function get_students_list()
    {
    	$list = Student::all();
    	return $this->send_response($list,count($list));
    }

    function get_register_student()
    {
    	$list = DB::table("courses as c")
    		->join("student_course as sc","sc.course_id","=","c.id")
    		->join("student as s","s.id" , "=","sc.student_id")
    		->select("c.id as course_id","c.name as course_name","s.id as std_id","s.name as student_name")
    		->get();

    	return $this->send_response($list,count($list));
    }

    function add_course(Request $req)
    {
    	$name = $req->input("name");
    	$duration = $req->input("duration");

    	if(!empty($name) && !empty($duration))
    	{

		    $c = new Course();
	    	$c->name = $name;
	    	$c->duration = $duration;

	    	$c->save();
	    	return $this->send_response(["Data save successfully"],1);
    	}
    	else
    	{
    		return $this->send_response(["error" =>  "Name or duration is required"],0,400);
    	}
    }
}
