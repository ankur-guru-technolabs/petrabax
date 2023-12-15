@extends('web.master')
@section('content') 
<div class="login-section forgot-password-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6 login-right-text">
                <!--<h1>Petrabax</h1>-->
                <img src="{{ asset('assets/images/login-bg.jpg')}}" alt="Login">
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-sm-6 col-lg-5 login-form">
                <h2>Forgot Password</h2>
                <form>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-submit-btn text-center">
                        <button type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection