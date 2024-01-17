<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Auth;
use Helper;
use Session;

class HotelManagementController extends Controller
{
    //
    public function addHotelbeds(){
        return view('admin.Hotel.add-hotelbeds');
    }
    
    public function addParadores(){
        return view('admin.Hotel.add-paradores');
    }
 
}
