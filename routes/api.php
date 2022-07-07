<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    'as' => 'auth.'
], function () {
//    Version 1
    Route::group([
        "prefix" => "v1",
        'as' => 'v1.'
    ], function () {
        Route::post('register', [\App\Http\Controllers\API\Auth\v1\AuthController::class, 'register'])->name('register');
        Route::post('login', [\App\Http\Controllers\API\Auth\v1\AuthController::class, 'login'])->name('login');
        Route::middleware('auth:sanctum')->post('logout', [\App\Http\Controllers\API\Auth\v1\AuthController::class, 'logout'])->name('logout');
    });

});


