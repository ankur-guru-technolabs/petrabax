@extends('admin.master')
@section('content') 
<div class="container">
  <div class="col-12">
    <div class="signin-inner">
      <div class="signin-inner-form">
          <a href="{{route('signin')}}" class="text-center text-logo d-block"><img src="{{ asset('/assets_admin/images/logo.png')}}" alt="Site logo"></a>
        <h2 class="text-center">Sign in</h2>
        <form id="admin-login-form" action="{{route('loginSubmit')}}" method="post">
          @csrf 
          <div class="form-group">
            <input type="email" class="form-control custom-form-control" placeholder="Email" name="email">
            @error('email')
              <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <div class="position-relative">
              <input id="password-field" type="password" class="form-control custom-form-control" placeholder="Password" name="password">
              <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
              @error('password')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="form-group d-flex align-item-center">
            <div class="left-rember-content">
              <input type="checkbox" id="rememberme" name="remember_me">
              <label for="rememberme">Remember me</label>
            </div>
            <div class="forgot-link text-end ms-auto">
              <a href="{{route('forgotPassword')}}">FORGOT PASSWORD</a>
            </div>
          </div>
          <div class="form-submit-btn text-center">
            <button class="btn-primary-color" type="submit">Sign-in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection