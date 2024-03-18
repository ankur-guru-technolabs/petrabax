<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class DayTripController extends Controller
{
    //
    public function dayTripActivities(){
        return view('web.DayTrip.day-trip-activities');
    }
    
    public function dayTripBookingFilter(){
        return view('web.DayTrip.day-trip-filter');
    }
}
