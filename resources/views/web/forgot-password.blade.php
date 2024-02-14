@extends('web.master')
@section('content') 
<div class="login-section forgot-password-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>Forgot Password</h2>
                <form id="forgot-pwd-email-form" action="{{route('forgotPasswordSendOtp')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-submit-btn">
                        <button type="submit">Submit</button>
                    </div>

                </form>
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-sm-6 col-lg-6 login-right-text">
                <!--<h1>Petrabax</h1>-->
                <img src="{{ asset('assets/images/logo-2.png')}}" alt="Login">
            </div>
        </div>
    </div>
</div>
@endsection