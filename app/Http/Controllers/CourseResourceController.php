<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        /*
        //It will get all config related information of laravel config folder
        //dd(config("app"));
        
        //dd(config("app.name"));

       // dd(config("database.connections.mysql"));
        
            dd(config("tariq"));
        */

        //set configuration at run time  //

        /*

        //show name
        echo config("app.name");
        echo "<hr/>";
        //set 
        echo config(["app.name"=>"tariq"]);
        //show value 
        echo config("app.name");
        die();
        */

        /*
        // Get the current URL without the query string...
        echo url()->current();
        echo "<br/>";

        // Get the current URL including the query string...
        echo url()->full();
        echo "<br/>";

        // Get the full URL for the previous request...
        echo url()->previous();
        echo "<br/>";
        */

        //die();
        //dd(Course::paginate(5));
        return view("website.course",[
                "title" => "Course",
                "list" => Course::paginate(4)

                //"list" => Course::simplePaginate(5)
            ]);
        //SimplePaginate will give you next and previous button for gettin page data
        //paginate will give you all info like total records, total pages and current page and //last page etc..

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("website/add_course");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
        $request->validate(
            [

                "name" => "required|max:50",
                "duration" => "required|integer"

            ]);
        $cou = new Course();
        $cou->name = $request->input("name");
        $cou->duration = $request->input("duration"); 

        $cou->save();

        return redirect("course");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("website.show_course",["row" => Course::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("website/add_course",["row" => Course::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $c = Course::find($id);

        $c->name = $request->input("name");
        $c->duration = $request->input("duration");

        $c->save();

        return redirect("course");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where("id" , $id)->delete();

        return redirect("course");
    }
}
