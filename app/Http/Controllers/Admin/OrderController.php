<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class OrderController extends Controller
{
    //
    public function orderList(){
        return view('admin.Order.order-list');
    }
    
    public function orderDetail(){
        return view('admin.Order.order-details');
    }
 
}
