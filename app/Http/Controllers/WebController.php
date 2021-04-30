<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WebController extends Controller
{

    function login(Request $req)
    {
        session(['username' => 'tariq']);
    }

    function logout(Request $req)
    {
        $req->session()->forget('username');
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

    function checkout()
    {
    	return view("website/checkout");
    }
}
