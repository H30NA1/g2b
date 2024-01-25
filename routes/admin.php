<?php

use App\Http\Controllers\Admin\HomeController;
/*
|--------------------------------------------------------------------------
| START of Admin Pages Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\Pages\BlogController;
use App\Http\Controllers\Admin\Pages\CareersController;
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
| START of Admin Dashboard Routes
|--------------------------------------------------------------------------
*/
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
/*
|--------------------------------------------------------------------------
| END of Admin Dashboard Routes
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
        Route::prefix('blog')->name('blog.')->group(function () {
            Route::get("/", [BlogController::class, "index"])->name('index');
            Route::get("/post", [BlogController::class, "post"])->name('post');
        });
        Route::prefix('careers')->name('careers.')->group(function () {
            Route::get("/", [CareersController::class, "index"])->name('index');
            Route::get("/apply", [CareersController::class, "apply"])->name('apply');
        });
        Route::prefix('faq')->name('faq.')->group(function () {
            Route::get("/classic", [BillingController::class, "classic"])->name('classic');
            Route::get("/extended", [BillingController::class, "extended"])->name('extended');
        });
        Route::prefix('pricing')->name('pricing.')->group(function () {
            Route::get("/", [LogsController::class, "index"])->name('index');
            Route::get("/table", [LogsController::class, "table"])->name('table');
        });
        Route::prefix('social')->name('social.')->group(function () {
            Route::get("/activity", [OverviewController::class, "activity"])->name('activity');
            Route::get("/feeds", [OverviewController::class, "feeds"])->name('feeds');
            Route::get("/followers", [OverviewController::class, "followers"])->name('followers');
            Route::get("/settings", [OverviewController::class, "settings"])->name('settings');
        });
        Route::prefix('user-profile')->name('user-profile.')->group(function () {
            Route::get("/activity", [OverviewController::class, "activity"])->name('activity');
            Route::get("/campaigns", [OverviewController::class, "campaigns"])->name('campaigns');
            Route::get("/documents", [OverviewController::class, "documents"])->name('documents');
            Route::get("/followers", [OverviewController::class, "followers"])->name('followers');
            Route::get("/overview", [OverviewController::class, "overview"])->name('overview');
            Route::get("/projects", [OverviewController::class, "projects"])->name('projects');
        });
        Route::prefix('about')->name('about.')->group(function () {
            Route::get("/", [SecurityController::class, "index"])->name('index');
        });
        Route::prefix('contact')->name('contact.')->group(function () {
            Route::get("/", [SettingsController::class, "index"])->name('index');
        });
        Route::prefix('licenses')->name('licenses.')->group(function () {
            Route::get("/", [StatementsController::class, "index"])->name('index');
        });
        Route::prefix('sitemap')->name('sitemap.')->group(function () {
            Route::get("/", [StatementsController::class, "index"])->name('index');
        });
        Route::prefix('team')->name('team.')->group(function () {
            Route::get("/", [StatementsController::class, "index"])->name('index');
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
