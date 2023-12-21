@extends('web.master')
@section('content')
<div class="login-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6 login-right-text">
                <!-- <h1>Petrabax</h1>-->
                <img src="{{ asset('assets/images/login-bg.jpg')}}" alt="Login">
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>Log in to Your Account</h2>
                <form id="login-form" action="{{route('loginSubmit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                        <input id="password-field1" type="password" class="form-control" name="password" placeholder="Password"  value="{{ old('password') }}">
                        <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="custom-checkbox">
                        <div class="form-group mb-0">
                            <input type="checkbox" id="remember" name="remember_me">
                            <label class="mb-0" for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-submit-btn text-center">
                        <button type="submit">Submit</button>
                    </div>
                    <div class="forgot-link text-center">
                        <a href="{{route('forgotPassword')}}" title="Forgot password">Forgot password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection