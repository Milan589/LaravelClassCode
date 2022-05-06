<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Staff;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function create(){
        return view('employee/create');
    }
    function store(Request $request){
        // dd($request->all());
        Employee::create($request->all());
    }
    function staff(){
        return view('employee/staff');
    }
    function file(Request $request)
    {
        Staff::create($request->all());
        //redirect for call route contact without define name
        // return redirect('/contact');
        //redirect for call route employee/staff while define name
       // return redirect()->route('employee.staff');

    }
}
