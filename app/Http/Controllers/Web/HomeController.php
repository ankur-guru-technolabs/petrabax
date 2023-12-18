<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Helper;

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

    public function registerTravelAgentSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:users,email|unique:users,secondary_email',
            'secondary_email' => 'nullable|email|unique:users,email|unique:users,secondary_email',
            'password' => 'required|password_strength',
            'agency' => 'required',
            'arc' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
        ],[
            'password_strength' => 'The :attribute must be at least 8 characters long and meet the specified criteria.',
        ]);
    
        $validator->sometimes('secondary_email', 'required|email', function ($input) {
            return !empty($input->secondary_email);
        });
    
        $validator->addExtension('password_strength', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $value);
        });
    
        $validator->sometimes('password', 'password_strength', function ($input) {
            return !empty($input->password);
        });
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
         
        $email_data   = [
            'email'               => $request->email,
            'registration_otp'    => 'registration_otp',
            'subject'             => 'Registration OTP',
        ];
        Helper::sendMail('emails.registration_otp', $email_data, $request->email, '');

        $input                   = $request->all();
        $input['password']       = bcrypt($request->password);
        $input['type']           = 'travel_agent'; 

        $user_data  = User::create($input);

        return redirect()->route('verifyOtp');
    }
    
    public function registerRegularUserSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:users,email|unique:users,secondary_email',
            'password' => 'required|password_strength',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
        ],[
            'password_strength' => 'The :attribute must be at least 8 characters long and meet the specified criteria.',
        ]);
    
        $validator->sometimes('secondary_email', 'required|email', function ($input) {
            return !empty($input->secondary_email);
        });
    
        $validator->addExtension('password_strength', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $value);
        });
    
        $validator->sometimes('password', 'password_strength', function ($input) {
            return !empty($input->password);
        });
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        $email_data   = [
            'email'               => $request->email,
            'registration_otp'    => 'registration_otp',
            'subject'             => 'Registration OTP',
        ];
        Helper::sendMail('emails.registration_otp', $email_data, $request->email, '');
        $input                   = $request->all();
        $input['password']       = bcrypt($request->password);
        $input['type']           = 'user'; 

        $user_data  = User::create($input);

        return redirect()->route('verifyOtp');
    }
}
