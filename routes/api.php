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
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
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
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
});


