<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Coupon;
use App\Models\Suggestion;
use App\Models\Temp;
use App\Models\User;
use Auth;
use Helper;
use Session;

use function Laravel\Prompts\password;

class HomeController extends Controller
{
    //
    public function mainProfile(){
        return view('web.Home.main-profile');
    }
 
    public function groupTravel(){
        return view('web.Home.group-travel');
    }

    public function suggestions(){
        return view('web.Home.suggestions');
    }
    
    public function couponsList(){
        $user_type = Auth::user()->type;
        $today_date = date('Y-m-d');
        $coupons =  Coupon::where('user_type',$user_type)->orWhere('user_type','both')->where('start_date','<=',$today_date)->where('end_date','>=',$today_date)->orderBy('id','desc')->get();
        return view('web.Home.coupon-list',compact('coupons'));
    }
    
    public function submitSuggestions(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
        ],[
            'phone_number' => 'The contact number field is required.',
        ]);
     
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        $input['user_id'] = Auth::id();
        Suggestion::create($input);
        return redirect()->route('mainProfile')->with('message','Suggestion Added Successfully');
    }
   
    public function myProfile(){
        $user = User::where('id',Auth::id())->first();
        return view('web.Home.my-profile', compact('user'));
    }
    
    public function updateProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => [
                'required',
                'email',
                'unique:users,email,' . Auth::id(),
                'unique:users,secondary_email,' . Auth::id(),
            ],
            'secondary_email' => [
                'nullable',
                'email',
                'unique:users,email,' . Auth::id(),
                'unique:users,secondary_email,' . Auth::id(),
            ],
            'password' => 'nullable|password_strength',
            'agency' => 'required_if:user_type,travel_agent',
            'arc' => 'required_if:user_type,travel_agent',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
        ],[
            'password_strength' => 'The :attribute must be at least 8 characters long and meet the specified criteria.',
            'agency.required_if' => 'Please enter the name of your travel agency.',
            'arc.required_if' => 'Please enter your ARC, IATAN, or CLIA number.',
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

        $input = \Arr::except($request->all(), ['_token', 'user_type','cpwd','email']);
        
        if(!empty($input['password'])){
            $input['password'] = bcrypt($request->password);
        }else{
            $input = \Arr::except($input, ['password']);
        }; 

        $user = User::where('id',Auth::id())->first();
        $user->update($input);
        if($user->email !== $request->email){
            $email_data   = [
                'email'               => $request->email,
                'email_update_otp'    => 'email_update_otp',
                'subject'             => 'Email Update OTP',
            ];
            Helper::sendMail('emails.email_update_otp', $email_data, $request->email, '');
            session()->put('update_old_email', $request->email);
            return redirect()->route('verifyOtp')->with('message','Profile Updated Successfully. Please verify email');
        }
        return redirect()->route('mainProfile')->with('message','Profile Updated Successfully');
    }
   
    public function logout(){
        Auth::logout();
        return redirect()->route('/')->with('message','Logout Successfully');

    }
}
