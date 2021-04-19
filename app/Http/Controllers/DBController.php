<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DBController extends Controller
{
    //Query builder

    function index()
    {
    	//get all records
    	//$list = DB::table("courses")->get();

    	/*$list = DB::table("courses")
    			->where('name',"C++")->get();
		*/

    	//$list = DB::table("courses")->first();
    	//dd($list);

    			/*
    	$is_save = DB::table("courses")->insert([
	    		"name" => "Molvi Dharna Course - 3 ",
	    		"duration" => 3
    		]);*/

    		/*
    	$is_save = DB::table("courses")->insert([
    		[

	    		"name" => "Molvi Dharna Course - 3 ",
	    		"duration" => 3
    		],
    		[

	    		"name" => "Molvi Dharna Course- 2",
	    		"duration" => 3
    		]
    	]
    	);
    	if($is_save)
    	{
    		echo "<br/>Save</br>";
    	}*/

    	//update 

    	// $is_update= DB::table("courses")
    	// 	->where("id",8)
    	// 	->update([
    	// 		"name" => "updated1"
    	// 	]);


    	//delete

        /*
    	$is_delete = DB::table("courses")
    		->where("name","updated")
    		->delete();
            */




        /*
        $list = DB::table("customer as c")
                ->join("customer_address as ca","ca.customer_id","=","c.c_id")
                ->select("c.c_id","c.name","ca.address")
                ->get();
                */

        /*
        $list = DB::table("courses as c")
                ->join("student_course as sc","sc.course_id","=","c.id")
                ->join("student as s","s.id","=","sc.student_id")
                ->select("c.name as course_name","s.name as student_name")
                ->orderBy("c.name","ASC")
                ->get();

        dd($list);
        */

    }
}
