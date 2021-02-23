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

Route::get('/', function () {
    return view('welcome');
});

Route::get('firstroute',function(){
    return "Anelya Zharylkapova";
});

Route::get('secondroute', function () {
    return view('lab4');
}); 

Route::get('fourthroute/{fname}/{lname}',function($fname,$lname){
    return "My full name is: ".$fname." ".$lname;
});