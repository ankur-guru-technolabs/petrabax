@extends('web.master')
@section('content') 
<div class="login-section reset-password-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>Reset Password</h2>
                <form id="reset-password-form" action="{{route('resetPasswordSubmit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field1" type="password" class="form-control" name="cpwd" placeholder="Confirm Password" value="{{ old('password') }}">
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
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