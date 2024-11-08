<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::namespace('Api')->group(function () {
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/register',[AuthController::class,'register']);

    Route::apiResource('users', UserController::class);
    Route::get('/allCustomers',[UserController::class , 'getAllCostumers']);
});

