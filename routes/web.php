<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{name?}',function($name=null){
//     $data=compact('name');
//     return view('home')->with($data);
// });

// Route::get('/bani', function () {
//     echo 'BANI';
// });

// Route::get('/demo',function(){
//     return view('demo');
// });

// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     $data=compact('name','id');
//     // print_r($data);
//     return view('demo')->with($data);
//     // echo $name;
//     // return view('demo');
// });


// url/api/get-data -> to get data from api
// Route::get('/get-data',function(){
//     return "GET DATA API";
// });


// controller 

Route::get("/",[DemoController::class,"index"]);  
// Route::get("/about",[DemoController::class,"about"]);
// or 
Route::get('/about','App\Http\Controllers\DemoController@about');

// single action controller 
Route::get('/courses',SingleActionController::class);