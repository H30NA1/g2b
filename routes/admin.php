<?php

use App\Http\Controllers\Admin\AppController;
use App\Http\Controllers\Admin\AppUploadController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRolesController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\TasksController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ServerProjectsController;
use App\Http\Controllers\Admin\ServersController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ServicesAccountController;
use App\Http\Controllers\Admin\ServicesProjectController;
use App\Http\Controllers\Admin\ServicesServerController;
use App\Http\Controllers\Admin\NotificationController;
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

Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');
Route::match(['get', 'post'], 'forget-pass', [AuthController::class, 'forgot'])->name('forgot');
Route::match(['get', 'post'], 'reset-pass', [AuthController::class, 'reset'])->name('reset');

Route::get("/", [DashboardController::class, "index"])->name('index');
Route::get("/provinces", [DashboardController::class, "getProvinces"])->name('provinces');
Route::get("/districts/{province_code}", [DashboardController::class, "getDistricts"])->name('districts');
Route::get("/wards/{district_code}", [DashboardController::class, "getWards"])->name('wards');

Route::prefix('employees')->name('employees.')->group(function () {
    Route::get("/", [UserController::class, "index"])->name('index');
    Route::get("/detail/{id?}", [UserController::class, "detail"])->name('detail');
    Route::post("/store", [UserController::class, "store"])->name('store');
    Route::post("/update/{id}", [UserController::class, "update"])->name('update');
    Route::post("/delete/{id}", [UserController::class, "destroy"])->name('delete');
    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get("/{id}", [UserRolesController::class, "index"])->name('index');
        Route::post("/update/{id}", [UserRolesController::class, "update"])->name('update');
        Route::get("/refresh/{id}", [UserRolesController::class, "refresh"])->name('refresh');
    });
    Route::post("/delete/{id}", [UserController::class, "destroy"])->name('delete');
});

Route::prefix('projects')->name('projects.')->group(function () {
    Route::get("/", [ProjectsController::class, "index"])->name('index');
    Route::get("/create", [ProjectsController::class, "create"])->name('create');
    Route::post("/store", [ProjectsController::class, "store"])->name('store');
    Route::get("/{id}", [ProjectsController::class, "show"])->name('detail');
    Route::post("/update/{id}", [ProjectsController::class, "update"])->name('update');
    Route::post("/delete/{id}", [ProjectsController::class, "destroy"])->name('delete');
    Route::get("/{id}/permissions", [ProjectsController::class, "permission"])->name('permission');
    Route::get("/{id}/user-permissions", [ProjectsController::class, "loadUserPermission"])->name('user.permission');
    Route::post("/{id}/update-permission", [ProjectsController::class, "updatePermission"])->name('update.permission');
    Route::post("/change/{id}", [ProjectsController::class, "change"])->name('change');
});

Route::prefix('tasks')->name('tasks.')->group(function () {
    Route::get("/", [TasksController::class, "index"])->name('index');
    Route::get("/create", [TasksController::class, "create"])->name('create');
    Route::post("/store", [TasksController::class, "store"])->name('store');
    Route::get("/{id}", [TasksController::class, "show"])->name('detail');
    Route::get("/summary", [TasksController::class, "index"])->name('summary');
    Route::post("/change/{id}", [TasksController::class, "change"])->name('change');
    Route::post("/update/{id}", [TasksController::class, "update"])->name('update');
});

Route::prefix('reports')->name('reports.')->group(function () {
    Route::get("/", [ReportsController::class, "index"])->name('index');
    Route::get("/allow/{id}", [ReportsController::class, "allow"])->name('allow');
    Route::get("/reject/{id}", [ReportsController::class, "reject"])->name('reject');
    Route::get("/revert/{id}", [ReportsController::class, "revert"])->name('revert');
    Route::get("/delete/{id}", [ReportsController::class, "destroy"])->name('delete');
});

Route::prefix('notifications')->name('notifications.')->group(function () {
    Route::get("/", [NotificationController::class, "index"])->name('index');
    Route::get("/read/{id}", [NotificationController::class, "read"])->name('read');
    Route::get("/revert/{id}", [NotificationController::class, "revert"])->name('revert');
    Route::get("/delete/{id}", [NotificationController::class, "destroy"])->name('delete');
});

Route::prefix('profile')->name('profile.')->group(function () {
    Route::get("/", [ProfileController::class, "index"])->name('index');
    Route::get("/edit", [ProfileController::class, "edit"])->name('edit');
    Route::get("/setting", [ProfileController::class, "setting"])->name('setting');
    Route::post("/update", [ProfileController::class, "update"])->name('update');
});

Route::prefix('permission')->name('permission.')->group(function () {
    Route::get("/", [PermissionController::class, "index"])->name('index');
    Route::get("/detail/{id}", [PermissionController::class, "detail"])->name('detail');
    Route::post("/update/{id}", [PermissionController::class, "update"])->name('update');
    Route::get("/refresh/{id}", [PermissionController::class, "refresh"])->name('refresh');
    Route::get("/reset/{id}", [PermissionController::class, "reset"])->name('reset');
});

Route::prefix('servers')->name('servers.')->group(function () {
    Route::get("/", [ServersController::class, "index"])->name('index');
    Route::post("/store", [ServersController::class, "store"])->name('store');
    Route::get("/detail/{id?}", [ServersController::class, "detail"])->name('detail');
    Route::post("/update/{id}", [ServersController::class, "update"])->name('update');
    Route::post("/delete/{id}", [ServersController::class, "destroy"])->name('delete');
});

Route::prefix('services')->name('services.')->group(function () {
    Route::get("/", [ServicesController::class, "index"])->name('index');
    Route::post("/store", [ServicesController::class, "store"])->name('store');
    Route::get("/detail/{id?}", [ServicesController::class, "detail"])->name('detail');
    Route::post("/update/{id}", [ServicesController::class, "update"])->name('update');
    Route::post("/delete/{id}", [ServicesController::class, "destroy"])->name('delete');
});

Route::group(['prefix' => 'app', 'as' => 'apps.', 'middleware' => 'auth'], function () {
    Route::get('/', [AppController::class, "index"])->name('index');
    Route::get('previous/{id}', [AppController::class, "previous"])->name('previous');
    Route::group(['prefix' => 'upload', 'as' => 'upload.'], function () {
        Route::post('/file', [AppUploadController::class, "file"])->name('file');
        Route::match(['get', 'post'], '/app/{id?}', [AppUploadController::class, "app"])->name('app');
        Route::match(['get', 'post'], '/app-version', [AppUploadController::class, "appVersion"])->name('app.vesion');
    });
    Route::post('/delete/{id}', [AppController::class, "destroy"])->name('delete');
});

Route::get("/logout", [AuthController::class, "logout"])->name('logout');

Route::post('receive-slack-notify', [DashboardController::class, "receiveSlackNotify"])->name('receive.slack.notify');
