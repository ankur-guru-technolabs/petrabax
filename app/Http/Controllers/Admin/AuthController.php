<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Temp;
use App\Models\User;
use Auth;
use File;
use Helper;
use Session;

class AuthController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    
    public function profile(){
        $admin_data = Auth::user();
        return view('admin.profile',compact('admin_data'));
    }
    
    public function updateProfile(Request $request){
        $admin_data = User::where('id',$request->id)->first();
        $admin_data->first_name = $request->first_name;
        $admin_data->last_name = $request->last_name;
        $admin_data->email = $request->email;
        if(!empty($request->password)){
            $admin_data->password = bcrypt($request->password);
        }

        $folderPath = public_path().'/profile';
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        
        $imagename = '';
        if ($request->hasFile('image')) {
            $image_path = public_path('profile/' . $admin_data->profile_image);
            if (File::exists($image_path)) {
                if (!is_writable($image_path)) {
                    chmod($image_path, 0777);
                }
                File::delete($image_path);
            }

            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imagename = 'Profile_'.random_int(10000, 99999). '.' . $extension;
            $image->move(public_path('profile'), $imagename);
            $admin_data->profile_image = $imagename;
        }

        $admin_data->save();
        return redirect()->route('profile')->with('message','Profile Updated Successfully');
    }

    public function signin(){
        return view('admin.Auth.sign-in');
    }
  
    public function forgotPassword(){
        return view('admin.Auth.forgot-password');
    }

    public function forgotOtp(){
        return view('admin.Auth.forgot-otp');
    }
    
    public function resetPassword(){
        return view('admin.Auth.reset-password');
    }

    public function loginSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|password_strength',
        ],[
            'password_strength' => 'The :attribute must be at least 8 characters long and meet the specified criteria.',
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
       
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', '=', $email)->where('type','admin')->first();
        if (!$user) {
            $validator = Validator::make([], []);
            $validator->errors()->add('email', 'The user with the provided email does not exist.');
            return redirect()->back()->withErrors($validator)->withInput();
        } 

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Auth::login($user);
            $rememberMeLifetime = $request->has('remember_me') ? config('auth.remember_me_lifetime', 20160) : config('auth.without_remember_me_lifetime', 60);
    
            Session::put('login_expires_at', now()->addMinutes($rememberMeLifetime));
            Session::put('is_remembered', $request->has('remember_me'));
            return redirect()->route('dashboard')->with('message','Login Successfully');
        } 
        return redirect()->back()->with('error', 'Invalid Credentials')->withInput();
    }

    public function forgotPasswordSendOtp(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $email = $request->email;
        $user = User::where('email', '=', $email)->where('type','admin')->first();
        
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
        session()->put('admin_forgot_pwd_email', $request->email);
        return redirect()->route('forgototp')->with('message','OTP send Successfully');
    }

    public function forgotVerifyOtpSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = session('admin_forgot_pwd_email');
        
        $temp         = Temp::where('key',$email)->first();
        if($temp != null){
            $is_data_present = Temp::where('key',$email)->where('value',$request->otp)->first();
            if($is_data_present != null){
                $updatedAt = $is_data_present->updated_at;
                $currentTime = now();

                $minutesDifference = $currentTime->diffInMinutes($updatedAt);
                if ($minutesDifference > 10) {
                    // return redirect()->back()->with('error','OTP expired.');
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

        $email = session('admin_forgot_pwd_email');

        $user = User::where('email', '=', $email)->first();

        if ($user) {
            $user->password = bcrypt($request->password);
            $user->update();
        } 
        session()->forget('admin_forgot_pwd_email');
        return redirect()->route('signin')->with('message','Password Reset Successfully');
    }
}
