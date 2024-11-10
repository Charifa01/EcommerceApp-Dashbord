<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;


// Route::namespace('Api')->group(function () {
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/register',[AuthController::class,'register']);
    // user Routes
    Route::apiResource('users', UserController::class);
    Route::get('/allCustomers',[UserController::class , 'getAllCostumers']);
    // product Routes
    Route::apiResource('product', ProductController::class);
    Route::get('/allProducts',[ProductController::class , 'getAllProducts']);
    // order Routes
    Route::apiResource('order', OrderController::class);
    Route::get('/allOrders',[OrderController::class , 'getAllOrders']);
// });

