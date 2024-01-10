<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class PaymentController extends Controller
{
    //
    public function payment(){
        return view('web.Payment.payment');
    }
    
    public function payOnline(){
        return view('web.Payment.pay-online');
    }
}
