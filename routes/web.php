<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerStudent;
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


// danh cho user


Route::get("/", [ControllerStudent::class, "all"]);
Route::get("/student", [ControllerStudent::class, "all"]);
Route::get('/student/add', [ControllerStudent::class, "add"]);
Route::post('/student/save', [ControllerStudent::class, "save"]);
Route::get('/student/edit/{id}', [ControllerStudent::class, "edit"]);
Route::post('/student/update/{id}', [ControllerStudent::class, "update"]);
Route::get('/student/delete/{id}', [ControllerStudent::class, "destroy"]);

