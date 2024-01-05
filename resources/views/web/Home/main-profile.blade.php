@extends('web.master')
@section('content') 
<div class="travel-users-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="{{route('myProfile')}}">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/profile-icon.png')}}" alt="Profile"></span>
                        </div>
                        <h2>My Profile</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/online-booking.png')}}" alt="My Online Bookings"></span>
                        </div>
                        <h2>My Online Bookings</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/pay-online.png')}}" alt="Pay Online"></span>
                        </div>
                        <h2>Pay Online</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/coupon.png')}}" alt="Coupons"></span>
                        </div>
                        <h2>Offers/Coupons</h2>
                    </a>
                </div>
            </div>
            @if(Auth::user()->type == 'user')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/people.png')}}" alt="Group Travel"></span>
                        </div>
                        <h2>Group Travel</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'travel_agent')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/people.png')}}" alt="Group Travel"></span>
                        </div>
                        <h2>Commission Page</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'user')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/terms.png')}}" alt="Terms"></span>
                        </div>
                        <h2>Terms & Conditions</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'travel_agent')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/terms.png')}}" alt="Terms"></span>
                        </div>
                        <h2>Download Our CC Form</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'travel_agent')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/terms.png')}}" alt="Terms"></span>
                        </div>
                        <h2>Brochure Request</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'travel_agent')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/terms.png')}}" alt="Terms"></span>
                        </div>
                        <h2>Commission Policy</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'travel_agent')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/terms.png')}}" alt="Terms"></span>
                        </div>
                        <h2>Group Travel</h2>
                    </a>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'travel_agent')
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="#">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/terms.png')}}" alt="Terms"></span>
                        </div>
                        <h2>Terms & Conditions</h2>
                    </a>
                </div>
            </div>
            @endif
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="{{route('suggestions')}}">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/note-text.png')}}" alt="Suggestions"></span>
                        </div>
                        <h2>Suggestions</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#notificationmodal">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/note-text.png')}}" alt="Notification"></span>
                        </div>
                        <h2>Notification</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-6 travel-box">
                <div class="travel-box-inner">
                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#logoutmodal">
                        <div class="icon-box">
                            <span><img src="{{ asset('assets/images/note-text.png')}}" alt="Log-out"></span>
                        </div>
                        <h2>Log-out</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Logout Modal  -->
<div class="modal fade couponeModal logoutmodal" id="logoutmodal" tabindex="-1" aria-labelledby="logoutmodallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="logoutmodallabel">Log out</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="logout-content">
                    <h2>Come again</h2>
                    <p>Are You sure you want to Logout?</p>
                    <div class="button-block d-flex align-items-center">
                        <a href="{{route('logout')}}">Log out</a>
                        <a href="">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Logout Modal End  -->

<!-- Notification Modal  -->
<div class="modal fade couponeModal notificationmodal" id="notificationmodal" tabindex="-1" aria-labelledby="notificationmodallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="notificationmodallabel">Notification</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="notification-list">
                    <div class="notification-box">
                        <div class="notification-image">
                            <img src="{{ asset('assets/images/notification-icon.png')}}" alt="Notifications">
                        </div>
                        <div class="notification-content">
                            <h2>Payment Successfully Made</h2>
                            <p>Hotel booking confirmed! Prepare for a comfortable stay at your chosen accommodation.</p>
                        </div>
                    </div>

                    <div class="notification-box">
                        <div class="notification-image">
                            <img src="{{ asset('assets/images/notification-icon.png')}}" alt="Notifications">
                        </div>
                        <div class="notification-content">
                            <h2>Booking Cancelled</h2>
                            <p>Hotel booking confirmed! Prepare for a comfortable stay at your chosen accommodation.</p>
                        </div>
                    </div>

                    <div class="notification-box">
                        <div class="notification-image">
                            <img src="{{ asset('assets/images/notification-icon.png')}}" alt="Notifications">
                        </div>
                        <div class="notification-content">
                            <h2>Payment Successfully Made</h2>
                            <p>Hotel booking confirmed! Prepare for a comfortable stay at your chosen accommodation.</p>
                        </div>
                    </div>

                    <div class="notification-box">
                        <div class="notification-image">
                            <img src="{{ asset('assets/images/notification-icon.png')}}" alt="Notifications">
                        </div>
                        <div class="notification-content">
                            <h2>Refund Processed</h2>
                            <p>Hotel booking confirmed! Prepare for a comfortable stay at your chosen accommodation.</p>
                        </div>
                    </div>

                    <div class="notification-box">
                        <div class="notification-image">
                            <img src="{{ asset('assets/images/notification-icon.png')}}" alt="Notifications">
                        </div>
                        <div class="notification-content">
                            <h2>Commission Earned</h2>
                            <p>Hotel booking confirmed! Prepare for a comfortable stay at your chosen accommodation.</p>
                        </div>
                    </div>

                    <div class="notification-box">
                        <div class="notification-image">
                            <img src="{{ asset('assets/images/notification-icon.png')}}" alt="Notifications">
                        </div>
                        <div class="notification-content">
                            <h2>Commission Payment Made</h2>
                            <p>Hotel booking confirmed! Prepare for a comfortable stay at your chosen accommodation.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Notification Modal End  -->
@endsection