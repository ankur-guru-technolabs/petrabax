<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CarController;
use App\Http\Controllers\Web\DayTripController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\HotelController;
use App\Http\Controllers\Web\InfoController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\PaymentController;

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
    Route::middleware(['auth'])->group(function () {
        Route::get('/detail/review', [HotelController::class, 'detailReview'])->name('detailReview');
        
        Route::get('/completed/order', [OrderController::class, 'completedOrder'])->name('completedOrder');

        Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
        Route::get('/pay/online', [PaymentController::class, 'payOnline'])->name('payOnline');

        Route::get('/main/profile', [HomeController::class, 'mainProfile'])->name('mainProfile');
        Route::get('/group/travel', [HomeController::class, 'groupTravel'])->name('groupTravel');
        Route::get('/coupon/list', [HomeController::class, 'couponsList'])->name('couponsList');
        Route::get('/suggestions', [HomeController::class, 'suggestions'])->name('suggestions');
        Route::post('/submit/suggestions', [HomeController::class, 'submitSuggestions'])->name('submitSuggestions');
        Route::get('/my/profile', [HomeController::class, 'myProfile'])->name('myProfile');
        Route::get('/my-booked-order', [HomeController::class, 'myBookedOrder'])->name('myBookedOrder');
        Route::get('/my-completed-order', [HomeController::class, 'myCompletedOrder'])->name('myCompletedOrder');
        Route::post('/update/profile', [HomeController::class, 'updateProfile'])->name('updateProfile');
        Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    });
});

Route::get('/', [AuthController::class, 'index'])->name('/');
Route::get('/hotels', [HotelController::class, 'hotels'])->name('hotels');
Route::get('/hotels/list', [HotelController::class, 'hotelsList'])->name('hotelsList');
Route::get('/hotel/detail', [HotelController::class, 'hotelDetails'])->name('hotelDetails');

Route::get('/paradores', [HotelController::class, 'paradores'])->name('paradores');

Route::get('/daytrips/activities', [DayTripController::class, 'dayTripActivities'])->name('dayTripActivities');
Route::get('/daytrips/booking/filter', [DayTripController::class, 'dayTripBookingFilter'])->name('dayTripBookingFilter');
Route::get('/daytrips/booking/detail', [DayTripController::class, 'dayTripBookingDetail'])->name('dayTripBookingDetail');
Route::get('/daytrips/booking', [DayTripController::class, 'dayTripBooking'])->name('dayTripBooking');
Route::get('/dayTrip/booking/cart', [DayTripController::class, 'dayTripBookingCart'])->name('dayTripBookingCart');

Route::get('/transfer', [DayTripController::class, 'transfer'])->name('transfer');
Route::get('/transfer/terminal', [DayTripController::class, 'transferTerminal'])->name('transferTerminal');
Route::get('/transfer/booking', [DayTripController::class, 'transferBooking'])->name('transferBooking');
Route::get('/transfer/booking/cart', [DayTripController::class, 'transferBookingCart'])->name('transferBookingCart');

Route::get('/car-rental', [CarController::class, 'carRental'])->name('carRental');
Route::get('/car-rental/filter', [CarController::class, 'carRentalFilter'])->name('carRentalFilter');
Route::get('/car-rental/terms', [CarController::class, 'carRentalTerms'])->name('carRentalTerms');
Route::get('/car-rental/details', [CarController::class, 'carRentalDetails'])->name('carRentalDetails');
Route::get('/car-rental/booking', [CarController::class, 'carRentalBooking'])->name('carRentalBooking');
Route::get('/car-rental/booking/cart', [CarController::class, 'carRentalBookingCart'])->name('carRentalBookingCart');

Route::get('/cart', [HotelController::class, 'cart'])->name('cart');
Route::get('/thank-you', [HotelController::class, 'thankYou'])->name('thankYou');
Route::get('/destination/guides', [HotelController::class, 'destinationGuides'])->name('destinationGuides');

Route::get('/verify/otp', [AuthController::class,'verifyOtp'])->name('verifyOtp');
Route::post('/verify/otp/submit', [AuthController::class,'verifyOtpSubmit'])->name('verifyOtpSubmit');
Route::get('/resend/otp', [AuthController::class,'resendOtp'])->name('resendOtp');

Route::group(['middleware' => ['guest']], function () {

    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::get('/register/travel-agent', [AuthController::class,'registerTravelAgent'])->name('registerTravelAgent');
    Route::post('/register/travel/agent/submit', [AuthController::class,'registerTravelAgentSubmit'])->name('registerTravelAgentSubmit');
    Route::post('/register/regular/user/submit', [AuthController::class,'registerRegularUserSubmit'])->name('registerRegularUserSubmit');
    Route::get('/register/regular-user', [AuthController::class,'registerRegularUser'])->name('registerRegularUser');
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

Route::get('/about-us', [InfoController::class,'aboutUs'])->name('aboutUs');
Route::any('/video-libary/{search?}', [InfoController::class,'videoLibrary'])->name('videoLibrary');
Route::any('/brochure-list/{catid?}/{search?}', [InfoController::class,'brochureList'])->name('brochureList');
Route::get('/terms-conditions', [InfoController::class,'termsCondition'])->name('termsCondition');
Route::get('/privacy-policy', [InfoController::class,'privacyPolicy'])->name('privacyPolicy');
Route::get('/contact-us', [InfoController::class,'contactUs'])->name('contactUs');
Route::post('/contact-us/submit', [InfoController::class,'contactUsSubmit'])->name('contactUsSubmit');
Route::get('/cookie', [InfoController::class,'cookieStatement'])->name('cookie');
Route::get('/trip-planning', [InfoController::class,'tripPlanning'])->name('tripPlanning');
Route::get('/special-offer', [InfoController::class,'specialOffer'])->name('specialOffer');
Route::get('/order-brochure', [InfoController::class,'orderBrochure'])->name('orderBrochure');
Route::post('/order-brochure/submit', [InfoController::class,'orderBrochureSubmit'])->name('orderBrochureSubmit');
Route::any('/find-agent', [InfoController::class,'findAgent'])->name('findAgent');

Route::any('{fallback}', function () {
    return redirect()->route('/');
})->where('fallback', '.*')->middleware(['guest']); 
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
