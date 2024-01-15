<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
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
