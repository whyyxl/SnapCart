<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::middleware('auth')->group(function () {
    // Product routes
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    // Cart routes
    Route::post('/cart/add', [CartController::class, 'add']);
    Route::get('/cart', [CartController::class, 'view']);
    Route::delete('/cart/remove/{productId}', [CartController::class, 'remove']);

    // Order routes
    Route::post('/order/place', [OrderController::class, 'place']);
    Route::get('/order/history', [OrderController::class, 'history']);
});
