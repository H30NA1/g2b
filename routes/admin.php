<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BiddingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name('index');
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::prefix('bidding')->name('bidding.')->group(function () {
            Route::get("/", [BiddingController::class, "index"])->name('index');
        });
    });
});
