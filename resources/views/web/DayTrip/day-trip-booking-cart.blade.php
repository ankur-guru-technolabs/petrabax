@extends('web.master')
@section('content')
<div class="cart-section">
    <div class="container">
        <div class="back-btn-link d-md-none">
            <a href="daytrips-booking.html"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <h1 class="page-title">Cart page</h1>
        <form>
            <div id="cart-item-1" class="cart-items-content">
                <div class="cart-top-header d-flex align-items-center">
                    <div class="cart-item-number">
                        01
                    </div>
                    <div class="cart-item-header d-flex align-items-center">
                        <h2 class="mb-0">Activity : <span>Golondrinas Barcelona Pot</span></h2>
                        <div class="right-price-text  ms-auto text-end">
                            <p class="mb-0">$ 4558</p>
                        </div>
                    </div>
                </div>
                <div class="cart-right-item-content">
                    <div class="cartbox-item-details">
                        <div class="cartbox">
                            <label>Date</label>
                            <p>2 feb 2024 || 1:00 PM</p>
                        </div>
                        <div class="cartbox">
                            <label>Included</label>
                            <p>Tickets</p>
                        </div>
                        <div class="cartbox">
                            <label>Duration</label>
                            <p>3 Hours</p>
                        </div>
                        <div class="cartbox">
                            <label>Lead Traveller</label>
                            <p>John</p>
                        </div>
                        <div class="cartbox">
                            <label>Passengers</label>
                            <p>2</p>
                        </div>
                        <div class="cartbox cart-items-delete p-0">
                            <a href="#" class="remove-cart"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>
                </div>
                <div class="termsbooking-checkbox mb-3 mt-3 left-space">
                    <input type="checkbox" id="termsbooking">
                    <label for="termsbooking">I have read and accept all of the Terms and Conditions of this booking.</label>
                </div>
                <div class="form-submit-btn text-center">
                    <a href="#" class="add-cart-btn large-btn me-2">Pay Now</a>
                    <a href="javascript:void(0)" class="add-cart-btn large-btn w-auto continue-shop-btn">Continue Shopping</a>
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
            <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                <div class="booktrip-box-inner text-center position-relative">
                    <div class="icon-box position-absolute">
                        <img src="{{asset('assets/images/car-new.png')}}" alt="Car">
                    </div>
                    <div class="title-text">
                        <h3>Book a Car</h3>
                        <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                    </div>
                    <div class="book-btn btn-small">
                        <a href="{{route('carRental')}}" title="book now">Book Now</a>
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
                        <a href="javascript::void(0)" title="book now">Book Now</a>
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

            <div class="col-lg-3 col-md-3 col-6 booktrip-box d-none">
                <div class="booktrip-box-inner text-center position-relative">
                    <div class="icon-box position-absolute">
                        <img src="{{asset('assets/images/trips.png')}}" alt="Trip">
                    </div>
                    <div class="title-text">
                        <h3>Book a Transfers & Day Trips</h3>
                        <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                    </div>
                    <div class="book-btn btn-small">
                        <a href="#" title="book now">Book Now</a>
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