<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::redirect('/', '/products');
//->middleware('auth')
Route::prefix('/products')->name('products.')->controller(ProductController::class)->middleware('web')->group(function () {

    Route::get('/', 'index')->name('index');

});



