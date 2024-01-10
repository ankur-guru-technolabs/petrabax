@extends('web.master')
@section('content') 
<div class="pending-order-section order-completed">
    <div class="container">
        <div class="link-text d-flex align-items-center justify-content-start">
            <a href="#">Booked Order</a>
            <a href="{{route('completedOrder')}}" class="active">Completed Order</a>
        </div>
        <div class="pending-box">
            <div class="pending-box-inner">
                <div class="carousel-block">
                    <div class="pending-box-image-carousel owl-theme owl-carousel">
                        <div class="items">
                            <img src="{{ asset('assets/images/completed-order-new.jpg')}}" alt="Pending">
                        </div>
                        <div class="items">
                            <img src="{{ asset('assets/images/completed-order-new.jpg')}}" alt="Pending">
                        </div>
                    </div>
                    <h2>Hotel Name</h2>
                </div>
                <div class="pednig-booking-content">
                    <div class="order-booking-main-content">
                        <div class="booking-checkinout-box">
                            <div class="booking-checkinout-box-inner">
                                <h6>Check-in</h6>
                                <p>20-10-2023</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Rooms</h6>
                                <p class="text-center">2</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Night</h6>
                                <p class="text-center">2</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Check-out</h6>
                                <p>22-10-2023</p>
                            </div>
                        </div>
                        <div class="booking-other-details">
                            <h5>Airline</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>08:35 AM,20 Dec</h6>
                                    <p>Barra Airport</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">14hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>10:20 PM,20 Dec</h6>
                                    <p>Barcelona Airport</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>
                        <div class="booking-other-details">
                            <h5>Taxi</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>11:02 AM, 21 Dec</h6>
                                    <p>Place Name-1</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">1hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>12:20 PM, 20 Dec</h6>
                                    <p>Place Name-2</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>

                        <div class="booking-other-details">
                            <h5>Train</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>03:00 PM, 21 Dec</h6>
                                    <p>Place Name-1</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">1hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>06:20 PM, 20 Dec</h6>
                                    <p>Place Name-2</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>
                    </div>
                </div>
                <div class="button-box-options">
                    <div class="button-box-options-inner">
                        <div class="btn-list">
                            <a href="detail-review.html">Review</a>
                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#chatModal">Chat</a>
                            <a href="javascript:void();">Documentation</a>
                            <a href="javascript:void();">Tour guide</a>
                        </div>
                        <div class="total-price-pending text-center mt-3">
                            <p>Total Prices&nbsp;&nbsp;&nbsp;<span>$ 9789</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pending-box">
            <div class="pending-box-inner">
                <div class="carousel-block">
                    <div class="pending-box-image-carousel owl-theme owl-carousel">
                        <div class="items">
                            <img src="{{ asset('assets/images/completed-order-new.jpg')}}" alt="Pending">
                        </div>
                        <div class="items">
                            <img src="{{ asset('assets/images/completed-order-new.jpg')}}" alt="Pending">
                        </div>
                    </div>
                    <h2>Hotel Name</h2>
                </div>
                <div class="pednig-booking-content">
                    <div class="order-booking-main-content">
                        <div class="booking-checkinout-box">
                            <div class="booking-checkinout-box-inner">
                                <h6>Check-in</h6>
                                <p>20-10-2023</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Rooms</h6>
                                <p class="text-center">2</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Night</h6>
                                <p class="text-center">2</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Check-out</h6>
                                <p>22-10-2023</p>
                            </div>
                        </div>
                        <div class="booking-other-details">
                            <h5>Airline</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>08:35 AM,20 Dec</h6>
                                    <p>Barra Airport</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">14hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>10:20 PM,20 Dec</h6>
                                    <p>Barcelona Airport</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>
                        <div class="booking-other-details">
                            <h5>Taxi</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>11:02 AM, 21 Dec</h6>
                                    <p>Place Name-1</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">1hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>12:20 PM, 20 Dec</h6>
                                    <p>Place Name-2</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>

                        <div class="booking-other-details">
                            <h5>Train</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>03:00 PM, 21 Dec</h6>
                                    <p>Place Name-1</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">1hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>06:20 PM, 20 Dec</h6>
                                    <p>Place Name-2</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>
                    </div>
                </div>
                <div class="button-box-options">
                    <div class="button-box-options-inner">
                        <div class="btn-list">
                            <a href="detail-review.html">Review</a>
                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#chatModal">Chat</a>
                            <a href="javascript:void();">Documentation</a>
                            <a href="javascript:void();">Tour guide</a>
                        </div>
                        <div class="total-price-pending text-center mt-3">
                            <p>Total Prices&nbsp;&nbsp;&nbsp;<span>$ 9789</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pending-box">
            <div class="pending-box-inner">
                <div class="carousel-block">
                    <div class="pending-box-image-carousel owl-theme owl-carousel">
                        <div class="items">
                            <img src="{{ asset('assets/images/completed-order-new.jpg')}}" alt="Pending">
                        </div>
                        <div class="items">
                            <img src="{{ asset('assets/images/completed-order-new.jpg')}}" alt="Pending">
                        </div>
                    </div>
                    <h2>Hotel Name</h2>
                </div>
                <div class="pednig-booking-content">
                    <div class="order-booking-main-content">
                        <div class="booking-checkinout-box">
                            <div class="booking-checkinout-box-inner">
                                <h6>Check-in</h6>
                                <p>20-10-2023</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Rooms</h6>
                                <p class="text-center">2</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Night</h6>
                                <p class="text-center">2</p>
                            </div>
                            <div class="booking-checkinout-box-inner">
                                <h6>Check-out</h6>
                                <p>22-10-2023</p>
                            </div>
                        </div>
                        <div class="booking-other-details">
                            <h5>Airline</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>08:35 AM,20 Dec</h6>
                                    <p>Barra Airport</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">14hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>10:20 PM,20 Dec</h6>
                                    <p>Barcelona Airport</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>
                        <div class="booking-other-details">
                            <h5>Taxi</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>11:02 AM, 21 Dec</h6>
                                    <p>Place Name-1</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">1hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>12:20 PM, 20 Dec</h6>
                                    <p>Place Name-2</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>

                        <div class="booking-other-details">
                            <h5>Train</h5>
                            <div class="d-flex align-items-center flex-content-data">
                                <div class="booking-other-details-inner">
                                    <h6>03:00 PM, 21 Dec</h6>
                                    <p>Place Name-1</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <p class="date">1hrs 18mins</p>
                                </div>
                                <div class="booking-other-details-inner">
                                    <h6>06:20 PM, 20 Dec</h6>
                                    <p>Place Name-2</p>
                                </div>
                            </div>
                            <span class="price">$ 2145</span>
                        </div>
                    </div>
                </div>
                <div class="button-box-options">
                    <div class="button-box-options-inner">
                        <div class="btn-list">
                            <a href="detail-review.html">Review</a>
                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#chatModal">Chat</a>
                            <a href="javascript:void();">Documentation</a>
                            <a href="javascript:void();">Tour guide</a>
                        </div>
                        <div class="total-price-pending text-center mt-3">
                            <p>Total Prices&nbsp;&nbsp;&nbsp;<span>$ 9789</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Chat Modal -->
<div class="modal fade chatmodal" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-chat">
                <div class="modal-top-header">
                    <div class="user-profile d-flex align-items-center">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/chat-user.jpg')}}" alt="User">
                        </div>
                        <div class="user-name">
                            <h3 class="mb-0">Aren Pendrom</h3>
                        </div>
                    </div>
                </div>
                <div class="modal-chat-middle">
                    <div class="chart-right-text">
                        <div class="right-chart-content">
                            <p>Hello, i’m carrel from Budapest .</p>
                        </div>
                        <div class="right-chart-date">3.01 pm</div>
                    </div>

                    <div class="chart-left-text d-flex align-items-center">
                        <div class="left-chart-user">
                            <img src="{{ asset('assets/images/chat-user.jpg')}}" alt="User">
                        </div>
                        <div class="lefrt-chart-message">
                            <div class="left-chart-content">
                                <p>Hello, How can i assist you ?</p>
                            </div>
                            <div class="left-chart-date">3.01 pm</div>
                        </div>
                    </div>

                    <div class="chart-right-text">
                        <div class="right-chart-content">
                            <p>would you please check my travel details which i filed two days before.</p>
                        </div>
                        <div class="right-chart-date">3.01 pm</div>
                    </div>

                    <div class="chart-left-text d-flex align-items-center">
                        <div class="left-chart-user">
                            <img src="{{ asset('assets/images/chat-user.jpg')}}" alt="User">
                        </div>
                        <div class="lefrt-chart-message">
                            <div class="left-chart-content">
                                <p>Okay I'll check and inform you. </p>
                            </div>
                            <div class="left-chart-date">3.03 pm</div>
                        </div>
                    </div>

                    <div class="chart-right-text">
                        <div class="right-chart-content">
                            <p>I have faced some of the issues in filling the details time and that not showing in my details page.</p>
                        </div>
                        <div class="right-chart-date">3.01 pm</div>
                    </div>

                    <div class="chart-left-text d-flex align-items-center">
                        <div class="left-chart-user">
                            <img src="{{ asset('assets/images/chat-user.jpg')}}" alt="User">
                        </div>
                        <div class="lefrt-chart-message">
                            <div class="left-chart-content">
                                <p>we will check out our database and let see what's the issue is there then we will inform you asps</p>
                            </div>
                            <div class="left-chart-date">3.03 pm</div>
                        </div>
                    </div>

                </div>

                <div class="modal-chat-bottom">
                    <form>
                        <div class="form-data position-relative">
                            <button type="button" class="button-plus"><i class="fa-solid fa-plus"></i></button>
                            <input type="text" class="form-control" placeholder="Say something..." required>
                            <button type="submit" class="btn-submit"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection