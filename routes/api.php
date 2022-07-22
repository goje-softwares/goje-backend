<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers namespace
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\ProductController;


// Auth routes
Route::group([
    "prefix" => "auth",
    'as' => 'api.auth.'
], function () {
    //    http://localhost:8000/api/auth/register
    Route::post('register', [AuthController::class, 'register'])->name('register');
//    http://localhost:8000/api/auth/login
    Route::post('login', [AuthController::class, 'login'])->name('login');
//    http://localhost:8000/api/auth/logout
    Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout'])->name('logout');
});
// Products
Route::group([
    'middleware' => ['auth:sanctum'],
    'prefix' => 'products',
    'as' => 'api.products.'
], function () {
//    http://localhost:8000/api/products
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
//    http://localhost:8000/api/products/{product_id}
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
//    http://localhost:8000/api/products
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::post('/destroy/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});


