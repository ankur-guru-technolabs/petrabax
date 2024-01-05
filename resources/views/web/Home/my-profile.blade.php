@extends('web.master')
@section('content') 
<div class="edit-profile-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center">
                    <h2>Edit Profile</h2>
                </div>
                <form  id="edit-travel-agent-form" action="{{route('updateProfile')}}" method="post">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="user_type" id="user_type" class="form-control" value="{{$user->type}}">
                        <div class="col-6 form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$user->first_name ?? ''}}">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$user->last_name ?? ''}}">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{$user->email ?? ''}}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if($user->type == 'travel_agent')
                            <div class="col-6 form-group">
                                <label>Secondary Email Address</label>
                                <input type="email" name="secondary_email" class="form-control" placeholder="Second Email Address" value="{{$user->secondary_email ?? ''}}">
                                @error('secondary_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif

                        <div class="col-6 form-group">
                            <label>Password</label>
                            <div class="position-relative hideshow-pwd">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 form-group">
                            <label>Confirm Password</label>
                            <div class="position-relative hideshow-pwd">
                                <input id="password-field1" type="password" name="cpwd" class="form-control" placeholder="Confirm Password">
                                <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                            </div>
                        </div>

                        @if($user->type == 'travel_agent')
                            <div class="col-6 form-group">
                                <label>Agency</label>
                                <input type="text" name="agency" class="form-control" placeholder="Name of Agency" value="{{$user->agency ?? ''}}">
                                @error('agency')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 form-group">
                                <label>ARC / IATAN / CLIA</label>
                                <input type="text" name="arc" class="form-control" placeholder="ARC, IATAN, or CLIA Number" value="{{$user->arc ?? ''}}">
                                @error('arc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif
                        <div class="col-6 form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" value="{{$user->address ?? ''}}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Suite/Apt</label>
                            <input type="text" name="suite" class="form-control" placeholder="Suite or Apt." value="{{$user->suite ?? ''}}">
                        </div>

                        <div class="col-6 form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="City" value="{{$user->city ?? ''}}">
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>State/Province</label>
                            <input type="text" name="state" class="form-control" placeholder="State/Province" value="{{$user->state ?? ''}}">
                            @error('state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control" placeholder="Country" value="{{$user->country ?? ''}}">
                            @error('country')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Zip Code</label>
                            <input type="text" name="zip_code" class="form-control" placeholder="Zip Code" value="{{$user->zip_code ?? ''}}">
                            @error('zip_code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{$user->phone_number ?? ''}}">
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label>Fax</label>
                            <input type="text" name="fax" class="form-control" placeholder="Fax Number" value="{{$user->fax ?? ''}}">
                        </div>

                        <div class="col-6 form-group">
                            <label>Home Number</label>
                            <input type="text" name="home_number" class="form-control" placeholder="Home Number" value="{{$user->home_number ?? ''}}">
                        </div>

                        <div class="col-6 form-group">
                            <label>Remarks</label>
                            <textarea class="form-control"  name="remarks"  rows="3" placeholder="Remarks">{{$user->remarks ?? ''}}</textarea>
                        </div>

                        <div class="col-12 form-submit-btn text-center">
                            <button type="submit">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection