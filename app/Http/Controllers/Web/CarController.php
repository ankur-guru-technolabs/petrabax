<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class CarController extends Controller
{
    //
    public function carRental(){
        return view('web.Car.car-rental');
    }
    
    public function carRentalFilter(){
        return view('web.Car.car-rental-filter');
    }
    
    public function carRentalTerms(){
        return view('web.Car.car-rental-terms');
    }

    public function carRentalDetails(){
        return view('web.Car.car-rental-details');
    }

    public function carRentalBooking(){
        return view('web.Car.car-rental-booking');
    }

    public function carRentalBookingCart(){
        return view('web.Car.car-rental-booking-cart');
    }
}
