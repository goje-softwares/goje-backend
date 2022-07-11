<?php

use App\Http\Controllers\API\Product\v0\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers namespace
use App\Http\Controllers\API\Auth\v0\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth routes
Route::group([
    "prefix" => "auth",
    'as' => 'api.auth.'
], function () {
//    Version 1
    Route::group([
        "prefix" => "v0",
        'as' => 'v0.'
    ], function () {
        Route::post('register', [AuthController::class, 'register'])->name('register');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout'])->name('logout');
    });
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


