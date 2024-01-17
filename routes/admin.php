<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrochureManagementController;
use App\Http\Controllers\Admin\CommissionManagementController;
use App\Http\Controllers\Admin\ContentManagementController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FeeManagementController;
use App\Http\Controllers\Admin\HotelManagementController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RolePermissionController;
// use App\Http\Controllers\Admin\SeoManagementController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\WithdrawManagementController;
use App\Http\Controllers\Admin\UserController;
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
Route::prefix('/admin')->group(function () {
    Route::middleware(['auth','admin.check'])->group(function () {
        Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
        Route::get('/add/brochure', [BrochureManagementController::class, 'addBrochure'])->name('addBrochure');
        Route::get('/commission/list', [CommissionManagementController::class, 'commissionList'])->name('commissionList');
        Route::get('/content/list', [ContentManagementController::class, 'contentList'])->name('contentList'); 
        Route::get('/add/coupon', [CouponController::class, 'addCoupon'])->name('addCoupon');
        Route::get('/add/employee', [EmployeeController::class, 'addEmployee'])->name('addEmployee');
        Route::get('/add/fee', [FeeManagementController::class, 'addFee'])->name('addFee');
        Route::get('/fee/list', [FeeManagementController::class, 'feeList'])->name('feeList');
        Route::get('/add/hotelbeds', [HotelManagementController::class, 'addHotelbeds'])->name('addHotelbeds');
        Route::get('/add/paradores', [HotelManagementController::class, 'addParadores'])->name('addParadores');
        Route::get('/order/list', [OrderController::class, 'orderList'])->name('orderList');
        Route::get('/order/detail', [OrderController::class, 'orderDetail'])->name('orderDetail');
        // Route::get('/page/attribute', [OrderController::class, 'pageAttribute'])->name('pageAttribute');
        // Route::get('/page/status', [OrderController::class, 'pageStatus'])->name('pageStatus');
        Route::get('/add/role', [RolePermissionController::class, 'addRole'])->name('addRole');
        // Route::get('/add/genreral/seo', [SeoManagementController::class, 'addGeneralSeo'])->name('addGeneralSeo');
        // Route::get('/add/image/seo', [SeoManagementController::class, 'addImageSeo'])->name('addImageSeo');
        // Route::get('/add/page/seo', [SeoManagementController::class, 'addPageSeo'])->name('addPageSeo');
        Route::get('/support/list', [SupportController::class, 'supportList'])->name('supportList');
        Route::get('/add/video', [VideoController::class, 'addVideo'])->name('addVideo');
        Route::get('/withdraw/list', [WithdrawManagementController::class, 'withdrawList'])->name('withdrawList');
        Route::get('/withdraw/agent/detail', [WithdrawManagementController::class, 'withdrawAgentDetail'])->name('withdrawAgentDetail');
        Route::get('/withdraw/detail', [WithdrawManagementController::class, 'withdrawDetail'])->name('withdrawDetail');
        Route::get('/user/list', [UserController::class, 'userList'])->name('userList');
        Route::get('/user/view', [UserController::class, 'userView'])->name('userView');
    });

    Route::group(['middleware' => ['guest']], function () {
        Route::get('/signin', [AuthController::class,'signin'])->name('signin');
        Route::post('/login/submit', [AuthController::class,'loginSubmit'])->name('loginSubmit');
        Route::get('/forgot/password', [AuthController::class,'forgotPassword'])->name('forgotPassword');
        Route::post('/forgot/password/send/otp', [AuthController::class,'forgotPasswordSendOtp'])->name('forgotPasswordSendOtp');
        Route::get('/forgot/otp', [AuthController::class,'forgototp'])->name('forgototp');
        Route::post('/forgot/verify/otp/submit', [AuthController::class,'forgotVerifyOtpSubmit'])->name('forgotVerifyOtpSubmit');
        Route::get('/reset/password', [AuthController::class,'resetPassword'])->name('resetPassword');
        Route::post('/reset/password/submit', [AuthController::class,'resetPasswordSubmit'])->name('resetPasswordSubmit');
    });
});


Route::any('{fallback}', function () {
})->where('fallback', '.*')->middleware(['admin.check']);
