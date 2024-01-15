@extends('admin.master')
@section('content') 
<div class="container">
    <div class="col-12">
        <div class="signin-inner">
            <div class="signin-inner-form">
                <a href="{{route('signin')}}" class="text-center text-logo d-block"><img src="{{ asset('/assets_admin/images/logo.png')}}" alt="Site logo"></a>
                <h2 class="text-center mb-1">Check your mail!</h2>
                <p class="mb-5 text-center">OTP sent to your  <?php echo session('admin_forgot_pwd_email') ?></p>
                <form id="forgot-otp-admin-verify-form" action="{{route('forgotVerifyOtpSubmit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="number" class="form-control custom-form-control" name="otp" placeholder="OTP">
                        @error('otp')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-submit-btn text-center mt-5">
                        <button type="submit">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection