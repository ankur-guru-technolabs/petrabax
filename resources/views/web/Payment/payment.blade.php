@extends('web.master')
@section('content') 
<div class="payment-section">
    <div class="container">
        <div class="row row-space-10">
            <div class="col-lg-8 col-md-7 col-sm-7 payment-options">
                <div class="payment-options-inner">
                    <h2 class="position-relative">Payment Options</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>

                                <div class="form-group">
                                    <label>Card Type</label>
                                    <input type="text" class="form-control" placeholder="Card Type" required>
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="number" class="form-control" placeholder="Card Number" required>
                                </div>
                                <div class="col-sm-12 ">
                                    <label>Expiry Month & Year</label>
                                    <div class="row row-space-10">
                                        <div class="col-md-6 lr-space-10 form-group">
                                            <input type="number" class="form-control" placeholder="Month" required>
                                        </div>
                                        <div class="col-md-6 lr-space-10 form-group">
                                            <input type="number" class="form-control" placeholder="Year" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>CVV</label>
                                    <input type="number" class="form-control" placeholder="CVV" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <label>Suite (optional)</label>
                                    <input type="text" name="address" class="form-control" placeholder="Suite" required>
                                </div>
                                <div class="form-group">
                                    <label>Province/State (optional)</label>
                                    <input type="text" name="address" class="form-control" placeholder="State" required>
                                </div>

                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="address" class="form-control" placeholder="Country" required>
                                </div>

                                <div class="form-group">
                                    <label>Zip Code/Postal Code</label>
                                    <input type="text" name="address" class="form-control" placeholder="Zip Code/Postal Code  " required>
                                </div>
                            </div>

                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 paynow-btn">
                                <button type="submit">Pay Now</button>
                            </div>
                            <div class="col-md-6 total-text ">
                                <p class="d-flex align-items-center">Total Price <span>$ 2,689</span></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 payment-order-details">
                <div class="payment-order-inner">
                    <div class="order-box">
                        <img src="{{ asset('assets/images/payment-new.jpg')}}" alt="Order">
                        <h3>Four Seasons Hotels and Resorts</h3>
                        <p>384/5A, JM Vista Suites, Sodiem, Siolim North Spain</p>
                    </div>
                    <div class="payment-book-info-box">
                        <h3>Airline</h3>
                        <div class="payment-book-info-box-inner d-flex align-items-center">
                            <div class="booking-info-box">
                                <h6>08:35 AM,20 Dec</h6>
                                <p>Barra Airport</p>
                            </div>
                            <div class="booking-info-box">
                                <p class="date">14hrs 18mins</p>
                            </div>
                            <div class="booking-info-box">
                                <h6>10:20 PM,20 Dec</h6>
                                <p>Barcelona Airport</p>
                            </div>
                        </div>

                        <h3>Taxi</h3>
                        <div class="payment-book-info-box-inner d-flex align-items-center">
                            <div class="booking-info-box">
                                <h6>11:02 AM, 21 Dec</h6>
                                <p>Place Name-1</p>
                            </div>
                            <div class="booking-info-box">
                                <p class="date">1hrs 18mins</p>
                            </div>
                            <div class="booking-info-box">
                                <h6>12:20 PM, 20 Dec</h6>
                                <p>Place Name-2</p>
                            </div>
                        </div>

                        <h3>Train</h3>
                        <div class="payment-book-info-box-inner d-flex align-items-center">
                            <div class="booking-info-box">
                                <h6>03:00 PM, 21 Dec</h6>
                                <p>Place Name-1</p>
                            </div>
                            <div class="booking-info-box">
                                <p class="date">14hrs 18mins</p>
                            </div>
                            <div class="booking-info-box">
                                <h6>06:20 PM, 20 Dec</h6>
                                <p>Place Name-2</p>
                            </div>
                        </div>
                    </div>


                    <div class="checkin-out-details white-bg">
                        <div class="checkin d-flex mb-1 align-items-center">
                            <p>Check-In</p>
                            <span>Thu, 12 Oct'23</span>
                        </div>
                        <div class="checkout d-flex align-items-center">
                            <p>Check-out</p>
                            <span>Fri, 13 Oct'23</span>
                        </div>
                        <span>3 Rooms x 1 Night</span>
                    </div>
                    <div class="traveler-details">
                        <h3>Traveler’s Details</h3>
                        <p>Bob Odenkirk</p>
                        <p>Bob.ode@gmail.com</p>
                        <p>+34 8763 421 568</p>
                    </div>
                    <div class="order-total">
                        <h3>Total</h3>
                        <div class="d-flex align-items-center">
                            <label>Hotel Price + Tax</label>
                            <span>$ 1,589 + $200</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label>Airline Flight</label>
                            <span>$ 405</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label>Taxi</label>
                            <span>$ 405</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label>Train</label>
                            <span>$ 405</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="total-text-bold">Total</label>
                            <span class="total-price-bold">$ 3,004</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection