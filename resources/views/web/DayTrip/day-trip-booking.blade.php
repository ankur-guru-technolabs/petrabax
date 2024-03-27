@extends('web.master')
@section('content')
<div class="daytrips-booked-section">
    <div class="container">
        <div class="daytrips-booked-top-header mb-3">
            <p><span>Day Trip & Activities</span><span>Barcelona, Spain</span><span>2 Adults and 1 Children</span></p>
        </div>

        <div class="daytrips-booked-details">
            <h3>Booking Details</h3>
            <form>
                <div class="booking-details">
                    <div class="row">
                        <div class="col-md-6 col-6 form-group mb-3">
                            <label>Trip Title</label>
                            <input type="text" class="form-control" placeholder="Golondrinas Barcelona Port" readonly>
                        </div>
                        <div class="col-md-3 col-3 form-group mb-3">
                            <label>Price</label>
                            <input type="text" class="form-control" value="$ 254" readonly>
                        </div>
                        <div class="col-md-3 col-3 form-group mb-3">
                            <label>Date</label>
                            <input id="bookeddate" type="text" class="form-control" placeholder="DD/MM/YY">
                        </div>
                    </div>
                </div>
                <h3>Details</h3>
                <div class="booking-user-details">
                    <div class="row">
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" placeholder="Middle Name">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" placeholder="Contact Number">
                        </div>
                    </div>
                </div>
                <h3 class="mb-3">Mandatory</h3>
                <div class="booking-user-details">
                    <div class="row">
                        <div class="col-md-12 col-12 form-group mb-3 pb-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 col-12 form-group mb-3 pb-1">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="termsbooking-checkbox mb-3">
                    <input type="checkbox" id="termsbooking">
                    <label for="termsbooking">I have read and accept all of the Terms and Conditions of this booking.</label>
                </div>

                <div class="form-submit-btn text-center">
                    <a href="{{route('dayTripBookingCart')}}" class="add-cart-btn">Add to cart</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
@endsection