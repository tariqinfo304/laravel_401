<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("version",function(){
	echo "API-Version(1.1.9)";
});

use App\Http\Controllers\APIController;

Route::get("course_list",[APIController::class,"get_course_list"]);
Route::get("student_list",[APIController::class,"get_students_list"]);
Route::get("get_register_student",[APIController::class,"get_register_student"]);

Route::get("add_course",[APIController::class,"add_course"]);
