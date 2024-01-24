<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Dashboards\BiddingController;
use App\Http\Controllers\Admin\Dashboards\CallCenterController;
use App\Http\Controllers\Admin\Dashboards\CryptoController;
use App\Http\Controllers\Admin\Dashboards\DeliveryController;
use App\Http\Controllers\Admin\Dashboards\EcommerceController;
use App\Http\Controllers\Admin\Dashboards\FinancePerformanceController;
use App\Http\Controllers\Admin\Dashboards\LogisticsController;
use App\Http\Controllers\Admin\Dashboards\MarketingController;
use App\Http\Controllers\Admin\Dashboards\OnlineCoursesController;
use App\Http\Controllers\Admin\Dashboards\PodcastController;
use App\Http\Controllers\Admin\Dashboards\PosController;
use App\Http\Controllers\Admin\Dashboards\ProjectsController;
use App\Http\Controllers\Admin\Dashboards\SchoolController;
use App\Http\Controllers\Admin\Dashboards\SocialController;
use App\Http\Controllers\Admin\Dashboards\StoreAnalyticsController;
use App\Http\Controllers\Admin\Dashboards\WebsiteAnalyticsController;
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
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::prefix('bidding')->name('bidding.')->group(function () {
            Route::get("/", [BiddingController::class, "index"])->name('index');
        });
        Route::prefix('call-center')->name('call-center.')->group(function () {
            Route::get("/", [CallCenterController::class, "index"])->name('index');
        });
        Route::prefix('crypto')->name('crypto.')->group(function () {
            Route::get("/", [CryptoController::class, "index"])->name('index');
        });
        Route::prefix('delivery')->name('delivery.')->group(function () {
            Route::get("/", [DeliveryController::class, "index"])->name('index');
        });
        Route::prefix('ecommerce')->name('ecommerce.')->group(function () {
            Route::get("/", [EcommerceController::class, "index"])->name('index');
        });
        Route::prefix('finance-performance')->name('finance-performance.')->group(function () {
            Route::get("/", [FinancePerformanceController::class, "index"])->name('index');
        });
        Route::prefix('logistics')->name('logistics.')->group(function () {
            Route::get("/", [LogisticsController::class, "index"])->name('index');
        });
        Route::prefix('marketing')->name('marketing.')->group(function () {
            Route::get("/", [MarketingController::class, "index"])->name('index');
        });
        Route::prefix('online-courses')->name('online-courses.')->group(function () {
            Route::get("/", [OnlineCoursesController::class, "index"])->name('index');
        });
        Route::prefix('podcast')->name('podcast.')->group(function () {
            Route::get("/", [PodcastController::class, "index"])->name('index');
        });
        Route::prefix('pos')->name('pos.')->group(function () {
            Route::get("/", [PosController::class, "index"])->name('index');
        });
        Route::prefix('projects')->name('projects.')->group(function () {
            Route::get("/", [ProjectsController::class, "index"])->name('index');
        });
        Route::prefix('school')->name('school.')->group(function () {
            Route::get("/", [SchoolController::class, "index"])->name('index');
        });
        Route::prefix('social')->name('social.')->group(function () {
            Route::get("/", [SocialController::class, "index"])->name('index');
        });
        Route::prefix('store-analytics')->name('store-analytics.')->group(function () {
            Route::get("/", [StoreAnalyticsController::class, "index"])->name('index');
        });
        Route::prefix('website-analytics')->name('website-analytics.')->group(function () {
            Route::get("/", [WebsiteAnalyticsController::class, "index"])->name('index');
        });
    });
});
