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



//route middleware
Route::get('orm',[TeacherController::class,"orm"])
		->middleware(['testtest','test']);


use App\Http\Controllers\CourseController;
Route::get('c_orm',[CourseController::class,"orm"]);


//group middleware//

Route::get("group",function(){

	echo "<br/>group route is called<br/>";

})->middleware(['group_test']);


//apply middleware on groups of routes

use App\Http\Middleware\TestMiddleware;
Route::middleware([TestMiddleware::class])->group(function(){


	Route::get("test1",function(){

	});
	Route::get("test2",function(){

	});
	Route::get("test3",function(){

	});


});



use App\Http\Controllers\OrmRelation;
Route::get("relation",[OrmRelation::class,"orm"]);

use App\Http\Controllers\DBController;
Route::get("/db",[DBController::class,"index"]);



Route::get('view',[CourseController::class,"index"]);
Route::get('layout',[CourseController::class,"layout"]);


use App\Http\Controllers\WebController;
Route::get('shop',[WebController::class,"index"]);


Route::get('website/contact-us',[WebController::class,"contact"]);


Route::get('website/register',[WebController::class,"register"]);


Route::get('website/checkout',[WebController::class,"checkout"]);


use App\Http\Controllers\CourseResourceController;
Route::resource("course",CourseResourceController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
