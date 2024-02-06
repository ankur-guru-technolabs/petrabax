<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerManagementController;
use App\Http\Controllers\Admin\BrochureManagementController;
use App\Http\Controllers\Admin\CommissionManagementController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContentManagementController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FeeManagementController;
use App\Http\Controllers\Admin\HotelManagementController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoleController;
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
        Route::get('/banner/list', [BannerManagementController::class, 'bannerList'])->name('bannerList');
        Route::get('/add/banner', [BannerManagementController::class, 'addBanner'])->name('addBanner');
        Route::post('/banner/submit', [BannerManagementController::class, 'bannerSubmit'])->name('bannerSubmit');
        Route::get('/banner/edit/{id}', [BannerManagementController::class, 'bannerEdit'])->name('bannerEdit'); 
        Route::post('/banner/update', [BannerManagementController::class, 'bannerUpdate'])->name('bannerUpdate');  
        Route::get('/banner/delete/{id}', [BannerManagementController::class, 'bannerDelete'])->name('bannerDelete'); 
        Route::get('/brochure/list', [BrochureManagementController::class, 'brochureList'])->name('brochureList');
        Route::get('/add/brochure', [BrochureManagementController::class, 'addBrochure'])->name('addBrochure');
        Route::post('/brochure/submit', [BrochureManagementController::class, 'brochureSubmit'])->name('brochureSubmit');
        Route::get('/brochure/edit/{id}', [BrochureManagementController::class, 'brochureEdit'])->name('brochureEdit'); 
        Route::post('/brochure/update', [BrochureManagementController::class, 'brochureUpdate'])->name('brochureUpdate');  
        Route::get('/brochure/delete/{id}', [BrochureManagementController::class, 'brochureDelete'])->name('brochureDelete'); 
        Route::get('/brochure/category/count/{id}', [BrochureManagementController::class, 'brochureCategoryCount'])->name('brochureCategoryCount'); 
        Route::get('/commission/list', [CommissionManagementController::class, 'commissionList'])->name('commissionList');
        Route::get('/content/list', [ContentManagementController::class, 'contentList'])->name('contentList'); 
        Route::post('/content/submit', [ContentManagementController::class, 'contentSubmit'])->name('contentSubmit'); 
        Route::get('/coupon/list', [CouponController::class, 'couponList'])->name('couponList'); 
        Route::get('/add/coupon', [CouponController::class, 'addCoupon'])->name('addCoupon');
        Route::post('/coupon/submit', [CouponController::class, 'couponSubmit'])->name('couponSubmit');
        Route::get('/coupon/edit/{id}', [CouponController::class, 'couponEdit'])->name('couponEdit'); 
        Route::post('/coupon/update', [CouponController::class, 'couponUpdate'])->name('couponUpdate');  
        Route::get('/coupon/delete/{id}', [CouponController::class, 'couponDelete'])->name('couponDelete'); 
        Route::get('/employee/list', [EmployeeController::class, 'employeeList'])->name('employeeList'); 
        Route::get('/add/employee', [EmployeeController::class, 'addEmployee'])->name('addEmployee');
        Route::post('/employee/submit', [EmployeeController::class, 'employeeSubmit'])->name('employeeSubmit');
        Route::get('/employee/edit/{id}', [EmployeeController::class, 'employeeEdit'])->name('employeeEdit'); 
        Route::post('/employee/update', [EmployeeController::class, 'employeeUpdate'])->name('employeeUpdate');  
        Route::get('/employee/delete/{id}', [EmployeeController::class, 'employeeDelete'])->name('employeeDelete');
        Route::get('/add/fee', [FeeManagementController::class, 'addFee'])->name('addFee');
        Route::get('/fee/list', [FeeManagementController::class, 'feeList'])->name('feeList');
        Route::get('/add/hotelbeds', [HotelManagementController::class, 'addHotelbeds'])->name('addHotelbeds');
        Route::get('/add/paradores', [HotelManagementController::class, 'addParadores'])->name('addParadores');
        Route::get('/order/list', [OrderController::class, 'orderList'])->name('orderList');
        Route::get('/order/detail', [OrderController::class, 'orderDetail'])->name('orderDetail');
        // Route::get('/page/attribute', [OrderController::class, 'pageAttribute'])->name('pageAttribute');
        // Route::get('/page/status', [OrderController::class, 'pageStatus'])->name('pageStatus');
        Route::get('/role/list', [RoleController::class, 'roleList'])->name('roleList');
        Route::get('/add/role', [RoleController::class, 'addRole'])->name('addRole');
        Route::post('/role/submit', [RoleController::class, 'roleSubmit'])->name('roleSubmit');
        Route::get('/role/delete/{id}', [RoleController::class, 'roleDelete'])->name('roleDelete'); 
        Route::post('/role/update', [RoleController::class, 'roleUpdate'])->name('roleUpdate'); 
        // Route::get('/add/genreral/seo', [SeoManagementController::class, 'addGeneralSeo'])->name('addGeneralSeo');
        // Route::get('/add/image/seo', [SeoManagementController::class, 'addImageSeo'])->name('addImageSeo');
        // Route::get('/add/page/seo', [SeoManagementController::class, 'addPageSeo'])->name('addPageSeo');
        Route::get('/support/list', [SupportController::class, 'supportList'])->name('supportList');
        Route::get('/video/list', [VideoController::class, 'videoList'])->name('videoList');
        Route::get('/add/video', [VideoController::class, 'addVideo'])->name('addVideo');
        Route::post('/video/submit', [VideoController::class, 'videoSubmit'])->name('videoSubmit');
        Route::get('/video/edit/{id}', [VideoController::class, 'videoEdit'])->name('videoEdit'); 
        Route::post('/video/update', [VideoController::class, 'videoUpdate'])->name('videoUpdate');  
        Route::get('/video/delete/{id}', [VideoController::class, 'videoDelete'])->name('videoDelete');
        Route::get('/category/list', [CategoryController::class, 'categoryList'])->name('categoryList');
        Route::get('/add/category', [CategoryController::class, 'addCategory'])->name('addCategory');
        Route::post('/category/submit', [CategoryController::class, 'categorySubmit'])->name('categorySubmit'); 
        Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('categoryDelete'); 
        Route::post('/category/update', [CategoryController::class, 'categoryUpdate'])->name('categoryUpdate'); 
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
