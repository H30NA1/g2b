<?php

use App\Http\Controllers\Web\HomeController;
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

Route::name('web.')->group(function () {
    Route::get("/", [HomeController::class, "index"])->name('index');
    Route::get("/about", [HomeController::class, "about"])->name('about');
    Route::get("/contact", [HomeController::class, "contact"])->name('contact');
});
