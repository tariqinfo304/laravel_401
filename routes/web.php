<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//base path  OR Home Path
//anonymous function =>  Closure Object
//Call Back function 

//Route::get('/' , function () { return view('welcome'); });


//Here are HTTP methods 
//https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods

/*
Route::get("/",function(){

	echo "First Lecture of Laravel About Routing";
});

Route::get("/student_info",function(){
	echo "It's a rote about Stduent information";
});


Route::get("/user/data",function(){

	echo "User/data Route";
});

//Route Parameters

Route::get("user/{id}",function($user_id){

	echo "User Id : " . $user_id;
});

//default route param
//optional case param 
Route::get("std/{id?}",function( $id = NULL ){

	echo "Stdudent ID : " . $id;
});


//two parametirc routes
Route::get("get_record/{id}/{name}",function($id,$name){

	echo "Name is : " . $name . "  with ID : " . $id;
});

Route::get("employee/{id}/data/{name?}",function($id,$name=NULL){

	echo "employee Record name is : " . $name  . " AND ID : " . $id;
});


//Route Parameters Validations

Route::get("subject/{id}",function($id){

	echo "Subject ID " . $id;

})->where("id","[0-9]{4}");

//Reguler Expression => [0-9]{4}

Route::get("subject/{id}/{name}",function($id,$name){

	echo "Subject ID " . $id . " With Name " . $name;

})->where(["id"=>"[0-9]{4}","name" => "[a-zA-Z]+"]);

//CNIC validation
//35202-0340608-8

Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->whereNumber('id')->whereAlpha('name');

Route::get('/user/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');

Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');
*/

//////////////////////////
//Controller ////////////


use App\Http\Controllers\TestController;

Route::get("hello",[TestController::class,"hello"]);
Route::get("student/{id}",[TestController::class,"get_student"]);


////Single action Controller
use App\Http\Controllers\StudentController;

Route::get("call_1",StudentController::class);
Route::get("call_2",StudentController::class);
Route::get("call_3/{name}",StudentController::class);

//end //

use App\Http\Controllers\TeacherController;
//Resource Controller 
Route::get("tariq" ,[TeacherController::class,"show_data"]);
Route::resource('teacher', TeacherController::class);



Route::get('orm',[TeacherController::class,"orm"]);


use App\Http\Controllers\CourseController;
Route::get('c_orm',[CourseController::class,"orm"]);


