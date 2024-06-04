<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

//user controller
Route::get('/user',[UserController::class,'index']);
Route::get('/user/create',[UserController::class,'create']);
Route::post('/user/proses',[UserController::class,'proses']);
Route::get('/user/edit/{id}',[UserController::class,'edit']);
Route::post('/user/update',[UserController::class,'update']);
Route::get('/user/hapus/{id}',[UserController::class,'delete']);

//user controller
Route::get('/car',[CarController::class,'index']);
Route::get('/car/create',[CarController::class,'create']);
Route::post('/car/proses',[CarController::class,'proses']);
Route::get('/car/edit/{id}',[CarController::class,'edit']);
Route::post('/car/update',[CarController::class,'update']);
Route::get('/car/hapus/{id}',[CarController::class,'delete']);

//driver Controller
Route::get('/driver',[DriverController::class,'index']);
Route::get('/driver/create',[DriverController::class,'create']);
Route::post('/driver/proses',[DriverController::class,'proses']);
Route::get('/driver/edit/{id}',[DriverController::class,'edit']);
Route::post('/driver/update',[DriverController::class,'update']);
Route::get('/driver/hapus/{id}',[DriverController::class,'delete']);
