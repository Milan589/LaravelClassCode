<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// dd('test from inside');
//static

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function(){
    return view('about');
});
// Route::get('/hello/sandil', function(){
//     dd('test from inside');
// });

Route::get('welcome',[\App\Http\Controllers\MyController::class,'getMe']);
Route::get('about',[\App\Http\Controllers\MyController::class,'aboutMe']);
Route::get('home',[App\Http\Controllers\MyController:: class,'homePage']);
Route::get('contact',[App\Http\Controllers\MyController:: class,'contactUs']);
Route::get('address',[App\Http\Controllers\MyController:: class,'addressPage']);
Route::get('service',[App\Http\Controllers\MyController:: class,'servicePage']);
Route::get('/', function(){
    return view('welcome');
});
//############## employee #############
Route::get('employee/create',[App\Http\Controllers\EmployeeController:: class,'create'])->name('employee.create');
Route::post('employee/save',[App\Http\Controllers\EmployeeController:: class,'store'])->name('employee.store');
//############ staff ##################
//############ route to list all employee for get method ################
Route::get('employee/staff',[App\Http\Controllers\EmployeeController:: class,'staff'])->name('employee.staff');
//############ route to store employee for post method ##################
Route::post('employee/file',[App\Http\Controllers\EmployeeController:: class,'file'])->name('employee.file');
//############ display employee ###########
Route::get('employee',[App\Http\Controllers\EmployeeController:: class,'index'])->name('employee.index');

///############# products #############
Route::get('employee/product',[App\Http\Controllers\EmployeeController:: class,'product'])->name('employee.product');
Route::post('employee/done',[App\Http\Controllers\EmployeeController:: class,'done'])->name('employee.done');
############## display products list ##############
Route::get('product',[App\Http\Controllers\EmployeeController:: class,'pdisplay'])->name('product.pdisplay');
//dynamic route
Route::get('hello/{name}', function($name){
    return "Hello $name";
});
