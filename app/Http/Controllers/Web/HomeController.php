<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('web.index');
    }
    
    public function register(){
        return view('web.register');
    }
  
    public function registerTravelAgent(){
        return view('web.register-travel-agent');
    }
  
    public function registerRegularUser(){
        return view('web.register-regular-user');
    }
 
    public function verifyOtp(){
        return view('web.otp-verify');
    }
  
    public function login(){
        return view('web.login');
    }
  
    public function forgotPassword(){
        return view('web.forgot-password');
    }
   
    public function forgotOtp(){
        return view('web.forgot-otp');
    }
    
    public function resetPassword(){
        return view('web.reset-password');
    }
}
