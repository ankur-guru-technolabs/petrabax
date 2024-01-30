<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;
use Carbon\Carbon;

use function Laravel\Prompts\password;

class HotelController extends Controller
{
    //
     public function hotels(){
          $client = new \GuzzleHttp\Client();


          $apiKey = "be842e80d1ef295b88040f0a62925a3c";
          $secret = "9e5bc9fc0f";

          $assemble = $apiKey . $secret . Carbon::now()->timestamp;

          // $hash = Hash::make($assemble);
          $hash =  (hash('sha256', $assemble));

          $headers = [
               'Content-Type' => 'application/json',
               'Accept' => 'application/json',
               'Api-key' => $apiKey,
               'X-Signature' => $hash,
          ];
          
          $baseUrl = 'https://api.test.hotelbeds.com/hotel-content-api/1.0/hotels';

          $params = [
               'from' => 1,
               'to' => 6,
          ];

          $res = \Http::withHeaders($headers)->get($baseUrl, $params);

          $statusCode = $res->getStatusCode();
          $responseBody = json_decode($res->getBody(), true);
          $hotels = $responseBody['hotels'];
          return view('web.Hotel.hotels')->with('hotels', $hotels);
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
