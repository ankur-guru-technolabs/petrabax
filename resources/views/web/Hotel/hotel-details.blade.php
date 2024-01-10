@extends('web.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <div class="details-section">
        <div class="hotel-details">
            <div class="container">
                <div class="hotel-details-box">
                    <div class="left-details-img">
                        <img src="{{ asset('assets/images/hotel-details.jpg')}}" alt="Hotel Details">
                    </div>
                    <div class="details-right-content">
                        <h3>Four Seasons Hotels and Resorts</h3>
                        <span class="rating"><i class="fa-solid fa-star"></i> 4.3</span>
                        <p>Street : C/ Libertad 47 City : Nava De Arevalo State : Avila Zip Code : 05216</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tour-section">
            <div class="container">
                <div class="row row-lr-space-10">
                    <div class="col-lg-8 tour-update-block">
                        <div class="tour-update-inner">
                            <h2>Tour update</h2>
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-4 col-6 tourchek-box">
                                    <h3>Check-In</h3>
                                    <p>Tue 10 Oct 2023</p>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-6 tourchek-box">
                                    <h3>Check-Out</h3>
                                    <p>Wed 11 Oct 2023</p>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 tourchek-box">
                                    <h3>Night</h3>
                                    <p>1 Night</p>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-4 col-6 tourchek-box">
                                    <h3>Rooms</h3>
                                    <p>1 Room</p>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-6 tourchek-box">
                                    <h3>Adults</h3>
                                    <p>2 Adults</p>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 tourchek-box">
                                    <h3>Children</h3>
                                    <p>2 Children’s</p>
                                </div>
                            </div>
                        </div>
                        <div class="twinroom-details">
                            <h2>Twin Double Room</h2>
                            <ul>
                                <li>Room Only</li>
                                <li>No meals included</li>
                                <li>Free Early Check in, Subject to Availability</li>
                                <li>Air conditioning or heating</li>
                                <li>Non-Refundable</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 price-coupon-block">
                        <div class="price-coupon-block-inner">
                            <h2>Price</h2>
                            <table class="price-table">
                                <tbody>
                                    <tr>
                                        <td>1 Room x 1 Nights</td>
                                        <td class="text-end">$ 2564</td>
                                    </tr>
                                    <tr>
                                        <td>Total Discount</td>
                                        <td class="text-end">$ 125</td>
                                    </tr>
                                    <tr>
                                        <td>Taxes & Services Fees</td>
                                        <td class="text-end">$ 689</td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount</td>
                                        <td class="text-end">$ 2,689</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="couponcode-block">
                            <div class="title-block d-flex align-items-center">
                                <div class="left-title">
                                    <h2>Coupon Codes</h2>
                                </div>
                                <div class="right-modal-text text-end ms-auto">
                                    <a href="#" class="couponcode-modal" data-bs-toggle="modal" data-bs-target="#couponeModal">List</a>
                                </div>
                            </div>
                            <div class="coupon-form">
                                <form>
                                    <div class="input-groups position-relative m-0">
                                        <input type="text" class="form-control" placeholder="We offer promo codes." required>
                                        <button type="submit" class="coupon-btn"><i class="fa-solid fa-angle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="guest-section">
            <div class="container">
                <div class="guest-content-inner">
                    <h2>Guest Details</h2>
                    <form class="guest-form">
                        <div class="row align-items-center">
                            <div class="col-md-4 form-filed">
                                <div class="form-group">
                                    <label class="mb-1">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-md-4 form-filed">
                                <div class="form-group">
                                    <label class="mb-1">Address</label>
                                    <input type="text" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Contact</label>
                                    <input type="text" class="form-control" placeholder="Contact" required>
                                </div>
                            </div>

                            <div class="col-md-4 form-group-btn">
                                <div class="form-group">
                                    <label class="mb-1 blank-lable"></label>
                                    <button type="submit" class="form-btn custom-btn">Pay Now</button>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1 blank-lable"></label>
                                    <a href="#" class="add-to-cart custom-btn">Add to cart</a>
                                </div>
                            </div>

                            <div class="col-12 gstdetails-block mb-3">
                                <label>
                                    <input id="includegst" type="checkbox" name="gst"> Enter GST Details <span>(Optional)</span>
                                </label>
                            </div>
                            <div class="col-md-4  gst-block-filed">
                                <div class="form-group">
                                    <label class="mb-1">Registration Number</label>
                                    <input type="text" class="form-control" placeholder="Registration No." required>
                                </div>
                            </div>
                            <div class="col-md-4 gst-block-filed">
                                <div class="form-group">
                                    <label class="mb-1">Registration Company Name</label>
                                    <input type="text" class="form-control" placeholder="Company Name" required>
                                </div>
                            </div>
                            <div class="col-md-4 gst-block-filed">
                                <div class="form-group">
                                    <label class="mb-1">Registration Company Address</label>
                                    <input type="text" class="form-control" placeholder="Company Address" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="attraction-section">
            <div class="container">
                <div class="section-header">
                    <h2>Find the attraction</h2>
                </div>
                <div class="attraction-carousel owl-carousel owl-theme">
                    <div class="attraction-items">
                        <div class="attraction-img">
                            <img src="{{ asset('assets/images/attraction-1.jpg')}}" alt="attraction">
                        </div>
                        <div class="post-header">
                            <h3>Hotel Palacio Alcazar Seville, Spain</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                            <span class="availability">4 Rooms available</span>
                        </div>
                        <div class="post-content">
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="boook-btn">
                            <a href="#">Book Now</a>
                        </div>
                    </div>

                    <div class="attraction-items">
                        <div class="attraction-img">
                            <img src="{{ asset('assets/images/attraction-2.jpg')}}" alt="attraction">
                        </div>
                        <div class="post-header">
                            <h3>Miro, Vizcaya - Bilbao, SPAIN</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                            <span class="availability">4 Rooms available</span>
                        </div>
                        <div class="post-content">
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="boook-btn">
                            <a href="#">Book Now</a>
                        </div>
                    </div>

                    <div class="attraction-items">
                        <div class="attraction-img">
                            <img src="{{ asset('assets/images/attraction-1.jpg')}}" alt="attraction">
                        </div>
                        <div class="post-header">
                            <h3>Hotel Palacio Alcazar Seville, Spain</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                            <span class="availability">4 Rooms available</span>
                        </div>
                        <div class="post-content">
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="boook-btn">
                            <a href="#">Book Now</a>
                        </div>
                    </div>

                    <div class="attraction-items">
                        <div class="attraction-img">
                            <img src="{{ asset('assets/images/attraction-2.jpg')}}" alt="attraction">
                        </div>
                        <div class="post-header">
                            <h3>Miro, Vizcaya - Bilbao, SPAIN</h3>
                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                            <span class="availability">4 Rooms available</span>
                        </div>
                        <div class="post-content">
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="boook-btn">
                            <a href="#">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="book-trip-section">
            <div class="container">
                <div class="section-header">
                    <h2>Book Your Trip</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                        <div class="booktrip-box-inner text-center position-relative">
                            <div class="icon-box position-absolute">
                                <img src="{{ asset('assets/images/car.png')}}" alt="Car">
                            </div>
                            <div class="title-text">
                                <h3>Book a Car</h3>
                                <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                            </div>
                            <div class="book-btn btn-small">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                        <div class="booktrip-box-inner text-center position-relative">
                            <div class="icon-box position-absolute">
                                <img src="{{ asset('assets/images/train.png')}}" alt="Train">
                            </div>
                            <div class="title-text">
                                <h3>Book a Train</h3>
                                <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                            </div>
                            <div class="book-btn btn-small">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                        <div class="booktrip-box-inner text-center position-relative">
                            <div class="icon-box position-absolute">
                                <img src="{{ asset('assets/images/flight.png')}}" alt="Flight">
                            </div>
                            <div class="title-text">
                                <h3>Book a Flight</h3>
                                <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                            </div>
                            <div class="book-btn btn-small">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 booktrip-box">
                        <div class="booktrip-box-inner text-center position-relative">
                            <div class="icon-box position-absolute">
                                <img src="{{ asset('assets/images/send.png')}}" alt="Send">
                            </div>
                            <div class="title-text">
                                <h3>Book a Transfers & Day Trips</h3>
                                <span class="rating"><i class="fa-solid fa-star"></i>  4.3</span>
                            </div>
                            <div class="book-btn btn-small">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Coupon Modal -->
    <div class="modal fade couponeModal" id="couponeModal" tabindex="-1" aria-labelledby="couponModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="couponModalLabel">Coupons</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 promocode-box">
                            <div class="promocode-inner">
                                <div class="custom-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="promocode-1" checked>
                                        <label for="promocode-1">WELCOMEMMT</label>
                                    </div>
                                </div>
                                <p>Exclusive offer on Caixa Bank Credit Cards. Get $ 1200 off</p>
                            </div>
                        </div>

                        <div class="col-lg-6 promocode-box">
                            <div class="promocode-inner">
                                <div class="custom-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="promocode-2" checked>
                                        <label for="promocode-2">WELCOMEMMT</label>
                                    </div>
                                </div>
                                <p>Discount of $ 1796 Applied</p>
                            </div>
                        </div>

                        <div class="col-lg-6 promocode-box">
                            <div class="promocode-inner">
                                <div class="custom-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="promocode-3">
                                        <label for="promocode-3">CITIUMS</label>
                                    </div>
                                </div>
                                <p>If you apply for this coupon for the first time in the hotels and airline you get the 20% off.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 promocode-box">
                            <div class="promocode-inner">
                                <div class="custom-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="promocode-4">
                                        <label for="promocode-4">MMTIDFCEMI</label>
                                    </div>
                                </div>
                                <p>If you apply for this coupon for the first time in the Trains you get the 25% off.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 promocode-box">
                            <div class="promocode-inner">
                                <div class="custom-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="promocode-5">
                                        <label for="promocode-5">MMTCANARA</label>
                                    </div>
                                </div>
                                <p>If you pay more than $ 1250 on Hotel booking then you get $250 off</p>
                            </div>
                        </div>

                        <div class="col-lg-6 promocode-box">
                            <div class="promocode-inner">
                                <div class="custom-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="promocode-6">
                                        <label for="promocode-6">AIRANDCAR</label>
                                    </div>
                                </div>
                                <p>If you apply for this coupon for the first time in the Airline and car booking then you get $750.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection