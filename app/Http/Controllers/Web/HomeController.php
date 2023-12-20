<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Temp;
use App\Models\User;
use Auth;
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
        session()->put('registration_email', $request->email);

        return redirect()->route('verifyOtp')->with('message','Registered Successfully');
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
        session()->put('registration_email', $request->email);

        return redirect()->route('verifyOtp')->with('message','Registered Successfully');
    }

    public function resendOtp(){
        if(!session('registration_email')){
            return redirect()->back()->with('error','Can not find email');
        }
        $email = session('registration_email');
        $email_data   = [
            'email'               => $email,
            'registration_otp'    => 'registration_otp',
            'subject'             => 'Registration OTP',
        ];
        Helper::sendMail('emails.registration_otp', $email_data, $email, '');
        return redirect()->back()->with('message','OTP send Successfully');
    }
  
    public function verifyOtpSubmit(Request $request){
        if(!session('registration_email')){
            return redirect()->back()->with('error','Can not find email');
        }

        $validator = Validator::make($request->all(), [
            'otp' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = session('registration_email');
        
        $temp         = Temp::where('key',$email)->first();
        if($temp != null){
            $is_data_present = Temp::where('key',$email)->where('value',$request->otp)->first();
            if($is_data_present != null){
                $updatedAt = $is_data_present->updated_at;
                $currentTime = now();

                $minutesDifference = $currentTime->diffInMinutes($updatedAt);
                if ($minutesDifference > 10) {
                    return redirect()->back()->with('error','OTP expired. Please resend');
                }

                $user = User::where('email', '=', $email)->first();

                if ($user) {
                    $user->is_verified = 1;
                    $user->save();
                } 
                $is_data_present->delete();
                session()->forget('registration_email');
                Auth::login($user);
                return redirect()->route('/')->with('message','OTP verified Successfully');
            }
            return redirect()->back()->with('error','OTP is wrong');
        }
        return redirect()->back()->with('error','Sorry we can not find data with this credentials');
    }

    public function forgotPasswordSendOtp(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $email = $request->email;
        $user = User::where('email', '=', $email)->first();
        
        if (!$user) {
            $validator = Validator::make([], []);
            $validator->errors()->add('email', 'The user with the provided email does not exist.');
            return redirect()->back()->withErrors($validator)->withInput();
        } 
        
        $email_data   = [
            'email'               => $email,
            'forgot_pwd_otp'      => 'forgot_pwd_otp',
            'subject'             => 'Forgot Password OTP',
        ];
        Helper::sendMail('emails.forgot_pwd_otp', $email_data, $email, '');
        session()->put('forgot_pwd_email', $request->email);
        return redirect()->route('forgotOtp')->with('message','OTP send Successfully');
    }

    public function forgotPasswordResendOtp(){
        if(!session('forgot_pwd_email')){
            return redirect()->back()->with('error','Can not find email');
        }
        $email = session('forgot_pwd_email');
        $email_data   = [
            'email'               => $email,
            'forgot_pwd_otp'      => 'forgot_pwd_otp',
            'subject'             => 'Forgot Password OTP',
        ];
        Helper::sendMail('emails.forgot_pwd_otp', $email_data, $email, '');
        return redirect()->back()->with('message','OTP send Successfully');
    }

    public function forgotVerifyOtpSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = session('forgot_pwd_email');
        
        $temp         = Temp::where('key',$email)->first();
        if($temp != null){
            $is_data_present = Temp::where('key',$email)->where('value',$request->otp)->first();
            if($is_data_present != null){
                $updatedAt = $is_data_present->updated_at;
                $currentTime = now();

                $minutesDifference = $currentTime->diffInMinutes($updatedAt);
                if ($minutesDifference > 10) {
                    return redirect()->back()->with('error','OTP expired. Please resend');
                }

                $is_data_present->delete();
                return redirect()->route('resetPassword')->with('message','OTP verified Successfully');
            }
            return redirect()->back()->with('error','OTP is wrong');
        }
        return redirect()->back()->with('error','Sorry we can not find data with this credentials');
    }

    public function resetPasswordSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|password_strength',
        ]);
    
        $validator->addExtension('password_strength', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $value);
        });
    
        $validator->sometimes('password', 'password_strength', function ($input) {
            return !empty($input->password);
        });
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = session('forgot_pwd_email');

        $user = User::where('email', '=', $email)->first();

        if ($user) {
            $user->password = bcrypt($request->password);
            $user->update();
        } 
        session()->forget('forgot_pwd_email');
        return redirect()->route('/')->with('message','Password Reset Successfully');
    }
}
