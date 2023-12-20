@extends('web.master')
@section('content') 
<div class="login-section otp-section forgot-otp-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6 login-right-text">
                <!--<h1>Petrabax</h1>-->
                <img src="{{ asset('assets/images/login-bg.jpg')}}" alt="Login">
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>Forgot Password</h2>
                <p class="otp-text">Please enter the OTP sent to your email</p>

                <form id="forgot-otp-verify-form" action="{{route('forgotVerifyOtpSubmit')}}" method="post">
                    @csrf
                    <input class="otp otp-input" name="digit1" id="digit1" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                    <input class="otp otp-input" name="digit2" id="digit2" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                    <input class="otp otp-input" name="digit3" id="digit3" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                    <input class="otp otp-input" name="digit4" id="digit4" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                    @error('otp')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                    <p class="mt-2 error" id="forgot-otp-error-message"></p>
                    <p class="mt-2" id="forgot-concate-otp"><input type="hidden" name="otp"></p>
                    <div class="submit-btn text-center">
                        <div class="resend-btn">
                            <a href="{{route('forgotPasswordResendOtp')}}">Resend</a>
                        </div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection