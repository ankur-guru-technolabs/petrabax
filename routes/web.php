<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

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

Route::get('/', [HomeController::class,'index'])->name('/');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::get('/register/travel-agent', [HomeController::class,'registerTravelAgent'])->name('registerTravelAgent');
Route::post('/register/travel/agent/submit', [HomeController::class,'registerTravelAgentSubmit'])->name('registerTravelAgentSubmit');
Route::post('/register/regular/user/submit', [HomeController::class,'registerRegularUserSubmit'])->name('registerRegularUserSubmit');
Route::get('/register/regular-user', [HomeController::class,'registerRegularUser'])->name('registerRegularUser');
Route::get('/resend/otp', [HomeController::class,'resendOtp'])->name('resendOtp');
Route::get('/verify/otp', [HomeController::class,'verifyOtp'])->name('verifyOtp');
Route::post('/verify/otp/submit', [HomeController::class,'verifyOtpSubmit'])->name('verifyOtpSubmit');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/forgot/password', [HomeController::class,'forgotPassword'])->name('forgotPassword');
Route::get('/forgot/otp', [HomeController::class,'forgotOtp'])->name('forgotOtp');
Route::get('/reset/password', [HomeController::class,'resetPassword'])->name('resetPassword');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
