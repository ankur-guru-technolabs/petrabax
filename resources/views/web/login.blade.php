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
                <form>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                        <input id="password-field1" type="password" class="form-control" name="email" placeholder="Password" required>
                        <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
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