<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AuthController;

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

Route::middleware(['checkUserSession'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::get('/logout', function () {
        Auth::logout();
    });
});



Route::group(['middleware' => ['guest']], function () {

    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::get('/register/travel-agent', [AuthController::class,'registerTravelAgent'])->name('registerTravelAgent');
    Route::post('/register/travel/agent/submit', [AuthController::class,'registerTravelAgentSubmit'])->name('registerTravelAgentSubmit');
    Route::post('/register/regular/user/submit', [AuthController::class,'registerRegularUserSubmit'])->name('registerRegularUserSubmit');
    Route::get('/register/regular-user', [AuthController::class,'registerRegularUser'])->name('registerRegularUser');
    Route::get('/resend/otp', [AuthController::class,'resendOtp'])->name('resendOtp');
    Route::get('/verify/otp', [AuthController::class,'verifyOtp'])->name('verifyOtp');
    Route::post('/verify/otp/submit', [AuthController::class,'verifyOtpSubmit'])->name('verifyOtpSubmit');
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login/submit', [AuthController::class,'loginSubmit'])->name('loginSubmit');
    Route::get('/forgot/password', [AuthController::class,'forgotPassword'])->name('forgotPassword');
    Route::post('/forgot/password/send/otp', [AuthController::class,'forgotPasswordSendOtp'])->name('forgotPasswordSendOtp');
    Route::get('/forgot/password/resend/otp', [AuthController::class,'forgotPasswordResendOtp'])->name('forgotPasswordResendOtp');
    Route::get('/forgot/otp', [AuthController::class,'forgotOtp'])->name('forgotOtp');
    Route::post('/forgot/verify/otp/submit', [AuthController::class,'forgotVerifyOtpSubmit'])->name('forgotVerifyOtpSubmit');
    Route::get('/reset/password', [AuthController::class,'resetPassword'])->name('resetPassword');
    Route::post('/reset/password/submit', [AuthController::class,'resetPasswordSubmit'])->name('resetPasswordSubmit');

});
Route::get('/main/profile', [HomeController::class,'mainProfile'])->name('mainProfile');

Route::any('{fallback}', function () {
    return redirect()->route('/');
})->where('fallback', '.*')->middleware(['guest']); 
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
