<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('products',ProductController::class);
//https://chatgpt.com/c/680a22ef-75a4-8005-8d12-ef745b71d8d6