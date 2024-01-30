<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'view']);
                                       //function_name                                        

Route::get('/home',[HomeController::class,'index']);
//        route_name, controller_name,      function_name


Route::POST('/upload',[HomeController::class,'upload']);

Route::get('/view',[HomeController::class,'view']);

Route::get('/delete/{id}',[HomeController::class,'delete']);

Route::get('/search',[HomeController::class,'search']);

Route::get('/update_view/{id}',[HomeController::class,'update_view']);

Route::post('/update/{id}',[HomeController::class,'update']);





// Route::get('/', function () {
//     return view('hello');                            //views ---> resourses > views > welcome.blade.php
// });
