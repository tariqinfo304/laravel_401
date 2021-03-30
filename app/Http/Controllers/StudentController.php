<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Single action Controller
class StudentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$name=NULL)
    {
        echo "Call Here with Magic Method __invoke";

        echo "<br/>";

        if(!empty($name))
        {
            if(method_exists($this, $name))
            {
                $this->{$name}();
            }
        }
    }


    private  function get_name()
    {
        echo "get_name() method call here";
    }
}
