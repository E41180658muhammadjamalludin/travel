<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
