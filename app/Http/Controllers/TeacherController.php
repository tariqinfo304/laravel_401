<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Login;
use App\Models\Customer;

//Resource Controller
//CRUD 
class TeacherController extends Controller
{

    function orm()
    {
        echo "<pre>";
        echo "<h1>Teacher Model ORM</h1>";


        // $teacher = new Teacher();
        // //dd($teacher);

        // $list = $teacher->all();

        // dd($list);


       // dd(Customer::all());

       // $list= Customer::where("c_id","1")->get();

       // $list= Customer::where("name","RMZAN")->get();


        //$list = Customer::take(5)->get();

       // $list = Customer::orderBy("name","ASC")->get();
       // $list = Customer::orderBy("name","DESC")->get();

       // $list = Customer::orderBy("name","ASC")->skip(1)->take(1)->get();

        //$list = Customer::where("c_id","2")->first();


        /*
        $customer_obj = Customer::where("c_id","2")->first();

        sleep(10);
        
        echo $customer_obj->name;

        $customer_obj = $customer_obj->fresh();

        echo "<br/> After Modification <br/>";
        echo $customer_obj->name;
        */  


        /*
        Customer::chunk(2,function($customer_obj){


            foreach($customer_obj as $obj)
                echo "Customer Name : " . $obj->name . "<br/>";


        });
        */


        //$list = Customer::select('name')->get();
        
        //$list = Customer::find(1);

       // $list = Customer::where("c_id",1)->first();
       // $list = Customer::firstWhere("c_id",1);


        // $list = Customer::where("c_id",111)->firstOrFail();

        // dd($list);



        //save //
        /*
        $obj = new Customer();
        $obj->name="ali new";
        $obj->date_added=Date("y-m-d h:i:s");
        $obj->save();
        */

        //bulk insert 

        /*
        Customer::insert(
            [
                ["name" => "abc 1", "date_added" => Date("y-m-d h:i:s")],
                ["name" => "abc 2", "date_added" => Date("y-m-d h:i:s")],
                ["name" => "abc 3", "date_added" => Date("y-m-d h:i:s")]
            ]
        );
        */

        //update

        /*
        $obj = Customer::find(1);
        $obj->name = "zohaib updated";
        $obj->save();
        */

        //bulk update

        /*
        Customer::where("c_id",">","8")
                ->update(["date_added"=>Date("y-m-d")]);
                */


        //delete
            /*
        $is_delete = Customer::where("c_id",1)->delete();
        if($is_delete)
        {
            echo "Deleted";
        }
        else
        {
            echo "error on deletion";
        }
        */

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET
       // echo "Teacher Index() method call here";
            return view("form");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET Method
        echo "Teacher create()  method call here";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST Method
        echo "store() method call here";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //GET
        echo "show() method call here with ID  : " .$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //GET        //

        echo "edit() method call with ID : " .$id;
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
        //PUT
        echo "update() method call here with ID : " . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete

        echo "destory() method call here with ID : " . $id; 
    }


    //custom method

    function show_data()
    {
        echo "show_data() method";
    }
}
