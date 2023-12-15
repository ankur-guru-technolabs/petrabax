@extends('web.master')
@section('content')
<div class="register-section travel-agent-from">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 user-register-image">
                <div class="register-image position-relative">
                    <img src="{{ asset('assets/images/travel-agent-register.jpg')}}" alt="Travel Agent">
                    <div class="register-text">
                        <h2>Travel Agents</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 user-register-form">
                <h2>Travel Agents</h2>
                <form>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label>Secondary Email Address</label>
                        <input type="email" class="form-control" name="semail" placeholder="Secondary Email Address" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field" type="password" class="form-control"  name="pwd"  placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field1" type="password" class="form-control"  name="cpwd"  placeholder="Confirm Password" required>
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Agency</label>
                        <input type="text" class="form-control" name="Agency" placeholder="Agency" required>
                    </div>

                    <div class="form-group">
                        <label>ARC / IATAN / CLIA</label>
                        <input type="text" class="form-control" name="arc" placeholder="ARC, IATAN, or CLIA Number" required>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>

                    <div class="form-group">
                        <label>Suite/Apt</label>
                        <input type="text" class="form-control" name="suite" placeholder="Suite or Apartment Number (Optional)" required>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" required>
                    </div>

                    <div class="form-group">
                        <label>State/Province</label>
                        <input type="text" class="form-control" name="State/Province" placeholder="State/Province" required>
                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="Country" placeholder="Country" required>
                    </div>

                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" class="form-control" name="zipcode" placeholder="Zip Code" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                    </div>

                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" name="fax" placeholder="Fax" required>
                    </div>

                    <div class="form-group">
                        <label>Home Number</label>
                        <input type="text" class="form-control" name="homephone" placeholder="Home Number" required>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea class="form-control" name="remarks" placeholder="Remarks" required></textarea>
                    </div>

                    <div class="form-group">
                        <div class="d-flex  align-items-center">
                            <label class="terms-condtions-label ps-0 mb-0">
                                <input type="checkbox" name="terms" required> I agree to petrabax <a href="#">privacy policy</a> and <a href="#">terms & conditions</a>.</label>
                        </div>
                    </div>

                    <div class="form-submit-btn d-flex align-items-center">
                        <div class="left-news">
                            <label class="checknewsletter">
                                <input type="checkbox" name="" required> Newsletter(optional)
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