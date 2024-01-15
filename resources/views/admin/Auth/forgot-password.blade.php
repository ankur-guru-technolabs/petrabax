@extends('admin.master')
@section('content') 
<div class="container">
    <div class="col-12">
        <div class="signin-inner">
            <div class="signin-inner-form">
                <a href="{{route('signin')}}" class="text-center text-logo d-block"><img src="{{ asset('/assets_admin/images/logo.png')}}" alt="Site logo"></a>
                <h2 class="text-center">Forgot your password?</h2>
                <form id="forgot-pwd-admin-email-form" action="{{route('forgotPasswordSendOtp')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control custom-form-control" placeholder="Email" name="email">
                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
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