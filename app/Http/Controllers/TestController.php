<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function hello()
    {
    	echo "Hello first Lecture of Laravel about Controller";
    }

    function get_student($id)
    {
    	echo "Student Id : " . $id;
    }
}
