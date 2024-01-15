@extends('admin.master')
@section('content') 
<div class="container">
    <div class="col-12">
        <div class="signin-inner">
            <div class="signin-inner-form">
                <a href="{{route('signin')}}" class="text-center text-logo d-block"><img src="{{ asset('/assets_admin/images/logo.png')}}" alt="Site logo"></a>
                <h2 class="text-center">Reset Password!</h2>
                <form id="reset-password-admin-form" action="{{route('resetPasswordSubmit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="position-relative">
                            <input id="password-field1" type="password" class="form-control custom-form-control" placeholder="New Password" name="password">
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative">
                            <input id="password-field" type="password" class="form-control custom-form-control" placeholder="Confirm Password" name="cpwd">
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>

                    <div class="form-submit-btn text-center mt-5">
                        <button type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection