<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class WebController extends Controller
{

    function login(Request $req)
    {
        
        $req->validate([
            "email" => "required",
            "password" => "required"
        ]);


        $user = User::where("email",$req->input("email"))->first();

        if(!empty($user))
        {
            if (Hash::check($req->input("password"), $user->password)) {
                
                session(
                    [
                        'email' => $user->email,
                        'name' => $user->name
                    ]);

                return response()->json([ "msg" => "login successfully"]);
            }
            else
            {   
                return response()->json(["msg" => "invalid user"]);
            }

        }
        else
        {
            return response()->json(["msg" => "invalid user"]);
        }
    }

    function logout(Request $req)
    {
        $req->session()->forget('email');
         $req->session()->forget('name');
        return redirect("shop");
    }

    function index()
    {

    	return view("website/home");
    }

    function contact()
    {
    	return view("website/contact");
    }

    function register()
    {
    	return view("website/register");
    }


    function save_user(Request $req)
    {   

        $req->validate([

            "name" => "required",
            "email" => "required",
            "password" => "required|min:5"
        ]);

        $user = new User();
        $user->name = $req->input("name");
        $user->email = $req->input("email");
        $user->password = Hash::make( $req->input("password") );


        $user->save();
        return redirect("/shop");
    }

    function checkout()
    {
    	return view("website/checkout");
    }
}
