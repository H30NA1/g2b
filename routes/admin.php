<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CalendarController;
/*
|--------------------------------------------------------------------------
| END of Project Routes
|--------------------------------------------------------------------------
*/

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
    Route::get("/", [HomeController::class, "index"])->name('index');
    Route::prefix('pages')->name('pages.')->group(function () {
        Route::prefix('users')->name('users.')->group(function () {
            Route::get("/", [UserController::class, "index"])->name('index');
            Route::get("/campaigns", [UserController::class, "campaigns"])->name('campaigns');
            Route::get("/documents", [UserController::class, "documents"])->name('documents');
            Route::get("/followers", [UserController::class, "followers"])->name('followers');
            Route::get("/overview", [UserController::class, "overview"])->name('overview');
            Route::get("/projects", [UserController::class, "projects"])->name('projects');
        });
        Route::prefix('projects')->name('projects.')->group(function () {
            Route::get("/", [ProjectController::class, "index"])->name('index');
            Route::get("/overview/{id?}", [ProjectController::class, "overview"])->name('overview');
            Route::get("/activities/{id?}", [ProjectController::class, "activities"])->name('activities');
            Route::get("/budgets/{id?}", [ProjectController::class, "budgets"])->name('budgets');
            Route::get("/files/{id?}", [ProjectController::class, "files"])->name('files');
            Route::get("/settings/{id?}", [ProjectController::class, "settings"])->name('settings');
            Route::get("/targets/{id?}", [ProjectController::class, "targets"])->name('targets');
            Route::get("/users/{id?}", [ProjectController::class, "users"])->name('users');
        });

        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get("/", [ProfileController::class, "index"])->name('index');
            Route::get("/activity", [ProfileController::class, "activity"])->name('activity');
            Route::get("/logs", [ProfileController::class, "logs"])->name('logs');
            Route::get("/security", [ProfileController::class, "security"])->name('security');
            Route::get("/settings", [ProfileController::class, "settings"])->name('settings');
        });

        Route::prefix('file-manager')->name('file-manager.')->group(function () {
            Route::get("/", [FileManagerController::class, "index"])->name('index');
            Route::get("/settings", [FileManagerController::class, "settings"])->name('settings');
        });

        Route::prefix('calendar')->name('calendar.')->group(function () {
            Route::get("/", [CalendarController::class, "index"])->name('index');
        });
    });
});
