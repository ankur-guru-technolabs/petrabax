@extends('web.master')
@section('content') 
<div class="pay-online-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Payment</h2>
        </div>
        <div class="pay-online-inner">
            <form>
                <div class="row">
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Booking Number</label>
                        <input type="text" class="form-control" placeholder="Booking Number">
                    </div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Booking Agent Name</label>
                        <input type="text" class="form-control" placeholder="Booking Agent Name">
                    </div>
                    <div class="col-lg-2 d-none d-lg-block form-group"></div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Passenger's First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Passenger's Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-lg-2 d-none d-lg-block form-group"></div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Confirm Email Address</label>
                        <input type="text" class="form-control" placeholder="Confirm Email Address">
                    </div>
                    <div class="col-lg-2 d-none d-lg-block form-group"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>Credit Card Details</h3>
                    </div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <label>Card Number</label>
                        <input type="number" class="form-control" placeholder="Card Number">
                    </div>
                    <div class="col-lg-5 col-sm-6 form-group">
                        <div class="row">
                            <div class="col-6">
                                <label>Expiry Date</label>
                                <input type="text" llclass="form-control" placeholder="MM/YY">
                            </div>
                            <div class="col-6">
                                <label>CVV</label>
                                <input type="number" class="form-control" placeholder="CVV">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="custom-checkbox remember-details">
                            <div class="form-group mb-0">
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember my card details</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6 form-submit-btn">
                        <button type="submit">Payment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection