<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class HotelController extends Controller
{
    //
     public function hotels(){
          return view('web.Hotel.hotels');
     }
 
     public function hotelsList(){
          return view('web.Hotel.hotels-list');
     }
    
     public function hotelDetails(){
          return view('web.Hotel.hotel-details');
     }
     
     public function paradores(){
          return view('web.Hotel.paradores');
     }

     public function cart(){
          return view('web.Cart.cart');
     }
     
     public function thankYou(){
          return view('web.ThankYou.thank-you');
     }
    
     public function destinationGuides(){
          return view('web.Hotel.destination-guides');
     }
    
     public function detailReview(){
          return view('web.Hotel.detail-review');
     }
}
