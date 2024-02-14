@extends('web.master')
@section('content')
<div class="register-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 user-register-image">
                <div class="register-image position-relative">
                    <img src="{{ asset('assets/images/register-regular.jpg')}}" alt="Regular User">
                    <div class="register-text">
                        <h2>Non-Travel Agent</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 user-register-form">
                <h2>Non-Travel Agent</h2>
                <form id="register-regular-user-form" action="{{route('registerRegularUserSubmit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field" type="password" class="form-control"  name="password"  placeholder="Password" value="{{ old('password') }}">
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field1" type="password" class="form-control"  name="cpwd"  placeholder="Confirm Password"  value="{{ old('password') }}">
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Suite/Apt</label>
                        <input type="text" class="form-control" name="suite" placeholder="Suite/Apt"  value="{{ old('suite') }}">
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" value="{{ old('city') }}">
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>State/Province</label>
                        <input type="text" class="form-control" name="state" placeholder="State/Province" value="{{ old('state') }}">
                        @error('state')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Country" value="{{ old('country') }}">
                        @error('country')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" value="{{ old('zip_code') }}">
                        @error('zip_code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" name="fax" placeholder="Fax"  value="{{ old('fax') }}">
                    </div>

                    <div class="form-group">
                        <label>Home Number</label>
                        <input type="text" class="form-control" name="home_number" placeholder="Home Number"  value="{{ old('home_number') }}">
                    </div>


                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea class="form-control" name="remarks" placeholder="Remarks">{{ old('remarks') }}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="d-flex  align-items-center">
                            <label class="terms-condtions-label ps-0 mb-0">
                                <input type="checkbox" name="terms" {{ old('terms') ? 'checked' : '' }}> I agree to petrabax <a href="#">privacy policy</a> and <a href="#">terms & conditions</a>.</label>
                        </div>
                    </div>

                    <div class="form-submit-btn d-flex align-items-center">
                        <div class="left-news">
                            <label class="checknewsletter">
                                <input type="checkbox" name=""> Newsletter(optional)
                            </label>
                        </div>
                        <div class="form-btn">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection