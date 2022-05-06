<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function getMe(){
        return view('welcome');
    }

    function aboutMe(){
        return view('about');
    }

    function homePage(){
        return view('home');
    }
    function contactUs(){
        return view('contact');
    }
    function servicePage(){
        return view('service');
    }
    function addressPage(){
        return view('address');
    }
}
