<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\CoreController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\FinancesController;
use App\Http\Controllers\Admin\PerformanceController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\TasksController;
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
    Route::prefix('employees')->name('employees.')->group(function () {
        Route::get("/", [EmployeesController::class, "index"])->name('index');
        Route::get("/add", [EmployeesController::class, "add"])->name('add');
        Route::post("/store", [EmployeesController::class, "store"])->name('store');
        Route::get("/edit/{id}", [EmployeesController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [EmployeesController::class, "update"])->name('update');
    });
    Route::prefix('core')->name('core.')->group(function () {
        Route::get("/", [CoreController::class, "index"])->name('index');
        Route::get("/add", [CoreController::class, "add"])->name('add');
        Route::post("/store", [CoreController::class, "store"])->name('store');
        Route::get("/edit/{id}", [CoreController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [CoreController::class, "update"])->name('update');
    });
    Route::prefix('finances')->name('finances.')->group(function () {
        Route::get("/", [FinancesController::class, "index"])->name('index');
        Route::get("/add", [FinancesController::class, "add"])->name('add');
        Route::post("/store", [FinancesController::class, "store"])->name('store');
        Route::get("/edit/{id}", [FinancesController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [FinancesController::class, "update"])->name('update');
    });
    Route::prefix('tasks')->name('tasks.')->group(function () {
        Route::get("/", [TasksController::class, "index"])->name('index');
        Route::get("/summary", [TasksController::class, "summary"])->name('summary');
        Route::get("/add", [TasksController::class, "add"])->name('add');
        Route::post("/store", [TasksController::class, "store"])->name('store');
        Route::get("/edit/{id}", [TasksController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [TasksController::class, "update"])->name('update');
    });
    Route::prefix('performance')->name('performance.')->group(function () {
        Route::get("/", [PerformanceController::class, "index"])->name('index');
        Route::get("/summary", [PerformanceController::class, "summary"])->name('summary');
        Route::get("/add", [PerformanceController::class, "add"])->name('add');
        Route::post("/store", [PerformanceController::class, "store"])->name('store');
        Route::get("/edit/{id}", [PerformanceController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [PerformanceController::class, "update"])->name('update');
    });
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get("/", [ProjectsController::class, "index"])->name('index');
        Route::get("/summary", [ProjectsController::class, "summary"])->name('summary');
        Route::get("/add", [ProjectsController::class, "add"])->name('add');
        Route::post("/store", [ProjectsController::class, "store"])->name('store');
        Route::get("/edit/{id}", [ProjectsController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [ProjectsController::class, "update"])->name('update');
    });
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get("/", [ReportsController::class, "index"])->name('index');
        Route::get("/summary", [ReportsController::class, "summary"])->name('summary');
        Route::get("/add", [ReportsController::class, "add"])->name('add');
        Route::post("/store", [ReportsController::class, "store"])->name('store');
        Route::get("/edit/{id}", [ReportsController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [ReportsController::class, "update"])->name('update');
    });
    Route::prefix('clients')->name('clients.')->group(function () {
        Route::get("/", [ClientsController::class, "index"])->name('index');
        Route::get("/summary", [ClientsController::class, "summary"])->name('summary');
        Route::get("/add", [ClientsController::class, "add"])->name('add');
        Route::post("/store", [ClientsController::class, "store"])->name('store');
        Route::get("/edit/{id}", [ClientsController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [ClientsController::class, "update"])->name('update');
    });
    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get("/", [BlogController::class, "index"])->name('index');
        Route::get("/summary", [BlogController::class, "summary"])->name('summary');
        Route::get("/add", [BlogController::class, "add"])->name('add');
        Route::post("/store", [BlogController::class, "store"])->name('store');
        Route::get("/edit/{id}", [BlogController::class, "edit"])->name('edit');
        Route::post("/update/{id}", [BlogController::class, "update"])->name('update');
    });
});
