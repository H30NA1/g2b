<?php

use App\Http\Controllers\Admin\HomeController;
/*
|--------------------------------------------------------------------------
| START of Admin Pages Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\Pages\UserProfile\ActivityController as UserProfileActivityController;
use App\Http\Controllers\Admin\Pages\UserProfile\CampaignController;
use App\Http\Controllers\Admin\Pages\UserProfile\DocumentController;
use App\Http\Controllers\Admin\Pages\UserProfile\FollowerController;
use App\Http\Controllers\Admin\Pages\UserProfile\OverviewController as UserProfileOverviewController;
use App\Http\Controllers\Admin\Pages\UserProfile\ProjectController;
/*
|--------------------------------------------------------------------------
| END of Admin Pages Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| START of Admin Account Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\Account\ActivityController;
use App\Http\Controllers\Admin\Account\ApiKeyController;
use App\Http\Controllers\Admin\Account\BillingController;
use App\Http\Controllers\Admin\Account\LogsController;
use App\Http\Controllers\Admin\Account\OverviewController;
use App\Http\Controllers\Admin\Account\ReferralsController;
use App\Http\Controllers\Admin\Account\SecurityController;
use App\Http\Controllers\Admin\Account\SettingsController;
use App\Http\Controllers\Admin\Account\StatementsController;
/*
|--------------------------------------------------------------------------
| END of Admin Dashboard Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| START of Project Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\Project\ActivityController as  ProjectActivityController;
use App\Http\Controllers\Admin\Project\BudgetController;
use App\Http\Controllers\Admin\Project\FilesController;
use App\Http\Controllers\Admin\Project\IndexController;
use App\Http\Controllers\Admin\Project\SettingsController as ProjectSettingsController;
use App\Http\Controllers\Admin\Project\TargetController;
use App\Http\Controllers\Admin\Project\UserController;
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
        Route::prefix('user-profile')->name('user-profile.')->group(function () {
            Route::get("/activity", [UserProfileActivityController::class, "index"])->name('activities');
            Route::get("/campaigns", [CampaignController::class, "index"])->name('campaigns');
            Route::get("/documents", [DocumentController::class, "index"])->name('documents');
            Route::get("/followers", [FollowerController::class, "index"])->name('followers');
            Route::get("/overview", [UserProfileOverviewController::class, "index"])->name('overview');
            Route::get("/projects", [ProjectController::class, "index"])->name('projects');
        });
        Route::prefix('project')->name('project.')->group(function () {
            Route::get("/", [IndexController::class, "index"])->name('index');
            Route::get("/project", [IndexController::class, "project"])->name('project');
            Route::get("/activities", [ProjectActivityController::class, "index"])->name('activities');
            Route::get("/budget", [BudgetController::class, "index"])->name('budget');
            Route::get("/files", [FilesController::class, "index"])->name('files');
            Route::get("/settings", [ProjectSettingsController::class, "index"])->name('settings');
            Route::get("/target", [TargetsController::class, "index"])->name('targets');
            Route::get("/users", [UsersController::class, "index"])->name('users');
        });
    });
    Route::prefix('account')->name('account.')->group(function () {
        Route::prefix('activity')->name('activity.')->group(function () {
            Route::get("/", [ActivityController::class, "index"])->name('index');
        });
        Route::prefix('api-keys')->name('api-keys.')->group(function () {
            Route::get("/", [ApiKeyController::class, "index"])->name('index');
        });
        Route::prefix('billing')->name('billing.')->group(function () {
            Route::get("/", [BillingController::class, "index"])->name('index');
        });
        Route::prefix('logs')->name('logs.')->group(function () {
            Route::get("/", [LogsController::class, "index"])->name('index');
        });
        Route::prefix('overview')->name('overview.')->group(function () {
            Route::get("/", [OverviewController::class, "index"])->name('index');
        });
        Route::prefix('referrals')->name('referrals.')->group(function () {
            Route::get("/", [ReferralsController::class, "index"])->name('index');
        });
        Route::prefix('security')->name('security.')->group(function () {
            Route::get("/", [SecurityController::class, "index"])->name('index');
        });
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get("/", [SettingsController::class, "index"])->name('index');
        });
        Route::prefix('statements')->name('statements.')->group(function () {
            Route::get("/", [StatementsController::class, "index"])->name('index');
        });
    });
});
