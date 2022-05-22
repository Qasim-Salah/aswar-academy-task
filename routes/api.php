<?php

use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['throttle:60,1'])->prefix('v1')->group(function () {

    Route::prefix('/products')->name('products.')->controller(ProductController::class)->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');

    });
});

