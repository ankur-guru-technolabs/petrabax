@extends('web.master')
@section('content') 
<div class="login-section reset-password-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6 login-right-text">
                <!--<h1>Petrabax</h1>-->
                <img src="{{ asset('assets/images/login-bg.jpg')}}" alt="Login">
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>Reset Account Password</h2>
                <form>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field1" type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>

                    <div class="form-submit-btn text-center">
                        <button type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection