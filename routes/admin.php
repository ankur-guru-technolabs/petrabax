<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrochureManagementController;
use App\Http\Controllers\Admin\CommissionManagementController;
use App\Http\Controllers\Admin\ContentManagementController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FeeManagementController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\VideoController;
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
        Route::get('/order/list', [OrderController::class, 'orderList'])->name('orderList');
        Route::get('/order/detail', [OrderController::class, 'orderDetail'])->name('orderDetail');
        Route::get('/add/video', [VideoController::class, 'addVideo'])->name('addVideo');
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
