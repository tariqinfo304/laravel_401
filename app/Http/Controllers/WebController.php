<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
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
