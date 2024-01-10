<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class OrderController extends Controller
{
    //
    public function completedOrder(){
        return view('web.Order.completed-order');
    }
    
}
