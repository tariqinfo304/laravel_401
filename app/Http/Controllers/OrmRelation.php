<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerHouse;
use App\Models\CustomerAddress;
use App\Models\Student;
use App\Models\Course;

class OrmRelation extends Controller
{
    function orm()
    {

    	/*
    	//One to one relationship
    	//direct relationship
    	//$cus = Customer::find(2);
    	//dd($cus->houseInfo);
		
		//echo "Customer Name : " . $cus->name . "  with House No : " . $cus->houseInfo->house_number;
		

    	
    	//Indirect relationship
    	//$cus = CustomerHouse::find(1);
    	//dd($cus->customerInfo);
    	//echo "House name : " . $cus->house_number . " with Customer Name : " . $cus->customerInfo->name;
    	

    	*/


    	// One to Many relationship

    	//$cus = Customer::find(2);
    	//dd($cus->listOfAddress);

    	//Indirect

    	//$cus = CustomerAddress::find(1);
    	//dd($cus->customerInfo);



    	//many to many relationship


    	//$s = Student::find(1);
    	//dd($s->listOfCourses);

    	//$c = Course::find(1);
    	//dd($c->listOfStudents);


    }
}
