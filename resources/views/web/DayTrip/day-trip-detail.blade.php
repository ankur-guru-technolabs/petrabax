@extends('web.master')
<link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css')}}">
@section('content')

<div class="trip-booking-details">
    <div class="container">
        <div class="details-boobking-title-block">
            <a href="{{route('dayTripBooking')}}"><i class="fa-solid fa-chevron-left"></i></a>
            <h2>Golondrinas Barcelona Port Full Day Tour</h2>
        </div>

        <div class="trip-booking-details-inner">
            <div class="booking-top-gallery mb-3">
                <div class="row">
                    <div class="col-7 gallery-1 gallery-img">
                        <a href="{{asset('assets/images/booking-detail-1.jpg')}}" class="image-popup-gallery">
                            <img src="{{asset('assets/images/booking-detail-1.jpg')}}" alt="Gallery">
                        </a>
                    </div>
                    <div class="col-5 gallery-2 gallery-img">
                        <a href="{{asset('assets/images/booking-detail-2.jpg')}}" class="image-popup-gallery">
                            <img src="{{asset('assets/images/booking-detail-2.jpg')}}" alt="Gallery">
                        </a>
                    </div>
                    <div class="col-12 gallery-3 gallery-img">
                        <a href="{{asset('assets/images/booking-detail-3.jpg')}}" class="image-popup-gallery">
                            <img src="{{asset('assets/images/booking-detail-3.jpg')}}" alt="Gallery">
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="booking-details-tab">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Location</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Activity</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Price</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                        <div class="booking-tab-description-content">
                            <p><strong>Description:</strong> This is an activity that offers, during 40 minutes, the unique opportunity of enjoying the sea, viewing the most important icons of the port and seafront.</p>
                            <p>The Maremagnum, the new Puerta de Europa Bridge, the Clock Tower, the Sideroploide, great views of the castle and mountain of Montjuïc; the hotel W, and the diverse sports clubs where tie the particular boats.</p>
                            <p>We pass in front of the “Moll deLlevant” (Dock of the Levant), where the new dock entrance has been opened. In addition, the itinerary also shows the commercial wharves of merchantships and the cruises of luxury that moor in Barcelona, fourth port of the world in traffic of tourist cruises.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                        <div class="booking-tab-location-content">
                            <div class="row">
                                <div class="col-6 booking-location-box">
                                    <h3>Location</h3>
                                    <p>Start Point : Las Golondrinas</p>
                                    <p>End Point : Same as the starting point</p>
                                </div>
                                <div class="col-6 booking-location-box">
                                    <h3>Schedule</h3>
                                    <p>Duration : 40 Minutes</p>
                                </div>
                                <div class="col-6 booking-location-box">
                                    <h3>Guide Options</h3>
                                    <p>Guide Type: Guide</p>
                                </div>
                                <div class="col-6 booking-location-box">
                                    <h3>Location</h3>
                                    <p>Spain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                        <div class="booking-tab-activity booking-tab-location-content">
                            <div class="row">
                                <div class="col-6 booking-location-box">
                                    <h3>What’s included</h3>
                                    <p>Tickets</p>
                                </div>
                                <div class="col-6 booking-location-box">
                                    <h3>Activity Duration</h3>
                                    <p>Flexible</p>
                                    <p>End point : Same as the starting point</p>
                                </div>
                                <div class="col-6 booking-location-box">
                                    <h3>Activity Type </h3>
                                    <p>General admission and city pass </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                    <div class="booking-tab-price-content">
                        <div class="price-top-header">
                            <h2>Price Details</h2>
                        </div>
                        <div class="price-full-details">
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Boar Ride Seniors Over 65 (Downtime 14:00 to 15:00)</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$25</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Boat Ride</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$20</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Tour</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$20</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Boar Ride (Essential Tour 14:00 to 15:00 (1 hour)</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$25</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Boat Ride</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$20</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Tour</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$20</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Boar Ride (Essential Tour 14:00 to 15:00 (1 hour)</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$25</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Boat Ride</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$20</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                            <div class="price-full-details-inner">
                                <div class="price-details-box">
                                    <p>Tour</p>
                                </div>
                                <div class="price-details-box">
                                    <p>$20</p>
                                </div>
                                <div class="price-details-box">
                                    <a href="{{route('dayTripBooking')}}" class="custom-btn">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
    <script type="text/javascript" src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        if($('.image-popup-gallery').length) {
            $('.image-popup-gallery').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom', 
                gallery:{
                    enabled:true
                },
                zoom: {
                    enabled: true, 

                    duration: 300,
                    easing: 'ease-in-out',

                    opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        }
    </script>
@endsection
 