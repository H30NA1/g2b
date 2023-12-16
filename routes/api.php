<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Admin\DashboardController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\Api\Admin\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class, 'index']);
        });

        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index']);
        });

        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'index']);
        });

        Route::post('logout', [AuthController::class, 'logout']);
    });
});
