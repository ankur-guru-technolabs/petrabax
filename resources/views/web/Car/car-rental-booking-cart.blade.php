@extends('web.master')
@section('content')
<div class="site-main-content">
    <div class="cart-section transfer-booking-cart car-rental-cart-section">
        <div class="container">
            <div class="back-btn-link d-md-none">
                <a href="car-rental-booking.html"><i class="fa-solid fa-arrow-left-long"></i></a>
            </div>
            <h1 class="page-title">Cart page</h1>
            <form>
                <div id="cart-item-1" class="cart-items-content">
                    <div class="cart-top-header d-flex align-items-center">
                        <div class="cart-item-number">
                            01
                        </div>
                        <div class="cart-item-header d-flex align-items-center">
                            <h2 class="mb-0">Car Rental : <span>Category Economy - Seat Ibiza (Or Similar)</span></h2>
                            <div class="right-price-text  ms-auto text-end">
                                <p class="mb-0">$ 4558</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-right-item-content">
                        <div class="cartbox-item-details">
                            <div class="cartbox">
                                <label>Pick Up</label>
                                <p>29 feb 2024</p>
                            </div>
                            <div class="cartbox">
                                <label>Drop Off</label>
                                <p>10 March 2024</p>
                            </div>
                            <div class="cartbox">
                                <label>Driver</label>
                                <p>John</p>
                            </div>
                            <div class="cartbox">
                                <label>Pick Up Location</label>
                                <p>Albufeira City, Portugal</p>
                            </div>
                            <div class="cartbox">
                                <label>Drop Off Location</label>
                                <p>Albufeira City, Portugal</p>
                            </div>
                            <div class="cartbox cart-items-delete p-0">
                                <a href="#" class="remove-cart"><i class="fa-solid fa-xmark"></i></a>
                            </div>
                        </div>
                        <div class="cartbox-item-details">
                            <div class="cartbox">
                                <label>Driver Age</label>
                                <p>30</p>
                            </div>
                            <div class="cartbox">
                                <label>Rate</label>
                                <p>$ 105</p>
                            </div>
                            <div class="cartbox">
                                <label>GPS</label>
                                <p>Yes</p>
                            </div>
                            <div class="cartbox">
                                <label>Infant Seat</label>
                                <p>01</p>
                            </div>
                            <div class="cartbox">
                                <label>Child Seat</label>
                                <p>01</p>
                            </div>
                        </div>
                        <div class="car-rental-booking-information">
                            <p><strong>Driver age </strong>: Sales tax as of Booking Date: 20-Feb-2024.Liability Insurance for injuries or damages to persons or things outside the vehicle.Rental includes Collision Damage coverage . Rental limits potential
                                vehicle damage liability to deductible of approximately EUR 0.00.Rental includes Theft Protection for the vehicle. Rental limits potential vehicle loss liability to deductible of approximately EUR 0.00.Glass and Tire Insurance.Road
                                Tax.Credit Card Block: EUR 300.00 will be blocked on the client's credit card at time of pick up.Unlimited Kilometers.</p>

                            <p><strong>Price does not include </strong>: Insurance coverage for personal injuries to driver or passengers. Optional coverage may be offered locally for an additional fee .Local toll, highway fees or travel stickers which may
                                be required by local authoritiesGasoline or Diesel. Vehicles are rented with a full tank of fuel and should be returned with a full tank of fuel to avoid a locally determined refueling charge.Client should retain copies
                                of fuel receipts.For pick ups at any location outside of the normal operating hours listed above, an out of hours fee of approximately EUR 30.75 will be charged (even if due to delayed flight).Toll Management Device, if
                                accepted, of EUR 2.15 per day (maximum charge of approximately EUR 21.50), plus the cost of tolls. If declined client is responsible for payment of any incurred tolls at designated pay spots.In the event of damage or theft
                                of the rental vehicle, an administration fee of approx. EUR 37 will be charged locally for management of the accident.Traffic violation fee of approx. EUR 37 per fine.Airport Surcharge: Approximately EUR 30.75, VAT included,
                                paid locally for pick up or drop off at an airport location (charged only once if both pick up and drop off is at the airport).</p>

                            <p><strong>One way drop off fees </strong>: Additional One Way Fee may apply, if dropping at a different station.</p>

                            <p><strong>Cancellation policy </strong>: Cancellations within 7 days of arrival are subject to penalties + any applicable administrative fees according to Petrabax terms and conditions.</p>
                        </div>
                    </div>
                    <div class="form-submit-btn text-center">
                        <a href="#" class="add-cart-btn large-btn me-2">Pay Now</a>
                        <a href="javascript::void(0)" class="add-cart-btn large-btn w-auto continue-shop-btn">Continue Shopping</a>
                    </div>
                </div>
            </form>
            <p class="empty-cart-message">Your cart is empty</p>
        </div>
    </div>

    <div id="book-trip" class="book-trip-section book-trip-section-two d-none">
        <div class="container">
            <div class="section-header">
                <h2>Book Your Trip</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 booktrip-box d-none">
                    <div class="booktrip-box-inner text-center position-relative">
                        <div class="icon-box position-absolute">
                            <img src="{{asset('assets/images/car-new.png')}}" alt="Car">
                        </div>
                        <div class="title-text">
                            <h3>Book a Car</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                        </div>
                        <div class="book-btn btn-small">
                            <a href="#" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                    <div class="booktrip-box-inner text-center position-relative">
                        <div class="icon-box position-absolute">
                            <img src="{{asset('assets/images/train-new.png')}}" alt="Train">
                        </div>
                        <div class="title-text">
                            <h3>Book a Train</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                        </div>
                        <div class="book-btn btn-small">
                            <a href="#" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                    <div class="booktrip-box-inner text-center position-relative">
                        <div class="icon-box position-absolute">
                            <img src="{{asset('assets/images/book-hotel.png')}}" alt="Hotel">
                        </div>
                        <div class="title-text">
                            <h3>Book a Hotel</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                        </div>
                        <div class="book-btn btn-small">
                            <a href="{{route('hotels')}}" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                    <div class="booktrip-box-inner text-center position-relative">
                        <div class="icon-box position-absolute">
                            <img src="{{asset('assets/images/trips.png')}}" alt="Trip">
                        </div>
                        <div class="title-text">
                            <h3>Book a Transfers & Day Trips</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                        </div>
                        <div class="book-btn btn-small">
                            <a href="{{route('dayTripActivities')}}" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
  
    $(".continue-shop-btn").on("click",function() {
        $(".book-trip-section").removeClass('d-none');
    })

    var arr = $("[id*='cart-item-']" );
    arr.each(function(index, item) {
        var cart_id = $(this).attr('id');
        $("[id*="+cart_id+"] .remove-cart").on("click", function() {
            $("[id*="+cart_id+"]").remove();
            var is_last_item = (index == (arr.length - 1));
            if ($(".cart-items-content").length < 1) {
                $(".cart-section").addClass('cartempty');
                $(".cart-section form").remove();
                $(".cart-section .empty-cart-message").addClass('show');
            }
        })
    });
</script>
@endsection
