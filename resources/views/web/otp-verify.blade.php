@extends('web.master')
@section('content')
<div class="login-section otp-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6 login-right-text">
                <!--<h1>Petrabax</h1>-->
                <img src="{{ asset('assets/images/login-bg.jpg')}}" alt="Login">
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>OTP</h2>
                <p class="otp-text">Please enter the OTP</p>

                <form action="">
                    <input class="otp otp-input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                    <input class="otp otp-input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                    <input class="otp otp-input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                    <input class="otp otp-input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>

                    <div class="submit-btn text-center">
                        <div class="resend-btn">
                            <a href="#">Resend</a>
                        </div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
