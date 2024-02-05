<?php
  
namespace App\Helpers;
use Mail;
use App\Mail\EmailVerificationMail;
use App\Mail\EmployeePasswordMail;
use App\Models\Temp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Helper {

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function sendMail($view = '', $data = [], $to = '', $from = '', $attechMent = '')
    {
        if(empty($view) || empty($to)) {
            return false;
        }

        $subject = isset($data['subject']) ? $data['subject'] : '';
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@petrabax.com>' . "\r\n";

        // For sending otp to mail
        
        if(isset($data['registration_otp']) || isset($data['forgot_pwd_otp'])){
            $otp          = substr(number_format(time() * rand(),0,'',''),0,4);
            $temp         = Temp::firstOrNew(['key' => $data['email']]);
            $temp->key    = $data['email'];
            $temp->value  = $otp;
            $temp->save();
            Mail::to($data['email'])->send(new EmailVerificationMail($otp));
        }
       
        if(isset($data['email_update_otp'])){
            $otp            = substr(number_format(time() * rand(),0,'',''),0,4);
            $temp           = Temp::firstOrNew(['key' => $data['email']]);
            $temp->key      = $data['email'];
            $temp->value    = $otp;
            $temp->user_id  = Auth::id();
            $temp->save();
            Mail::to($data['email'])->send(new EmailVerificationMail($otp));
        }
    
        if(isset($data['employee_pwd'])){
            Mail::to($data['email'])->send(new EmployeePasswordMail($data['password']));
        }
        
        return true;

    }
}