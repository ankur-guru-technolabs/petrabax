@extends('web.master')
@section('content') 
<div class="daytrips-booked-section">
    <div class="container">
        <div class="daytrips-booked-details">
            <form>
                <h3>Details</h3>
                <div class="booking-user-details">
                    <div class="row">
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Airline (if applicable)</label>
                            <input type="text" class="form-control" placeholder="Airline">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Airline (if applicable)</label>
                            <input type="text" class="form-control" placeholder="Airline">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Flight Number</label>
                            <input type="text" class="form-control" placeholder="Flight Number">
                        </div>
                        <div class="col-md-3 col-6 form-group mb-3">
                            <label>Additional Comments</label>
                            <input type="text" class="form-control" placeholder="Comments">
                        </div>
                    </div>
                </div>

                <div class="termsbooking-checkbox mb-3">
                    <input type="checkbox" id="termsbooking">
                    <label for="termsbooking">I have read and accept all of the Terms and Conditions of this booking.</label>
                </div>

                <div class="form-submit-btn text-center">
                    <a href="{{route('transferBookingCart')}}" class="add-cart-btn">Add to cart</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
</script>
@endsection