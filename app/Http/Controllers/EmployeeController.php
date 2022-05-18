<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;
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
        ///redirect for call route contact without define name
        // return redirect('/contact');
        ///redirect for call route employee/staff while define name
       // return redirect()->route('employee.staff');

    }
    ///for index 
    function index(){
        // $data = employee::all();
        // $data = Employee::where('phone', '>',50)->get();
        // $data = Employee::where('phone', '>',50)->orderby('name')->limit(4)->get();
        $data =Employee::paginate(2);
        return view('employee.index',compact('data'));
        
        dd($data);
    }
    //for products form
    function product(){
        return view('employee.product');
    }
    //for store product data
    function done(Request $request){
        // dd($request->all());
        Product::create($request->all());
         return redirect()->route('employee.product');
    }
        ///for pdisplay 
        function pdisplay(){
            $data1 =Product::paginate(2);
            return view('employee.pdisplay',compact('data1'));
            
            dd($data1);
        }
}
