@extends('web.master')
@section('content')
<div class="hotel-filter-section hotel-filter-section-two">
    <div class="container">
        <form>
            <div id="filter-content" class="filter-content">
                <div class="filter-grid-box filter-search-box">
                    <label>City or Region</label>
                    <input id="filter-serch-input" type="text" class="form-control custom-form-control filter-serch-input" placeholder="Type your destination" required>
                </div>

                <div class="filter-grid-box filter-check-out filte-same-width">
                    <label>Activity Date</label>
                    <input type="text" name="daterange" id="activedate" class="checkout form-control custom-form-control" placeholder="Select" required />
                </div>
                <div class="filter-grid-box filter-night filte-same-width">
                    <label>Days</label>
                    <input type="text" id="days" class="form-control custom-form-control" value="2" placeholder="Days">
                </div>

                <div class="filter-grid-box filter-room-guest filte-same-width position-relative">
                    <label>Travelers</label>
                    <p id="roomguest" class="mb-0 text-center"><span class="default-text">Select</span><span id="adultscount"></span><span id="childcount"></span></p>
                    <div id="room-select-dropdown" class="dropdown-menu room-select-dropdown">
                        <div class="dropdown-inner">
                            <div id="room-total-inner-dropdown-1" class="room-total-inner-dropdown room-total-inner-dropdown-1 active">
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub travelers-adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-1 travelers-adults-count" type="text" value="0" min="1" max="100" />
                                                <button type="button" class="add travelers-adults-add"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Children</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class=" travelers-children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count travelers-childerns-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class=" travelers-children-add"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="child-block dropdown-block">
                                    <p>Age</p>
                                    <div class="row m-0">
                                        <div class="ps-0 left-child-box children-box children-box-1">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 1</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" id="1" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-2">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 2</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-0 left-child-box children-box children-box-3">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 3</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-4">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 4</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-5">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 5</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-6">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 6</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-7">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 7</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-8">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 8</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-9">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 9</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-10">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 10</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-11">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 11</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-12">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 12</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-13">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 13</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-14">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 14</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-15">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 15</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-16">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 16</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-17">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 17</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-18">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 18</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ps-0 left-child-box children-box children-box-19">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 19</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box children-box children-box-20">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child - 20</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
                                                        <button type="button" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-grid-box filter-search-btn">
                    <a href="#" class="text-center">
                        <label class="text-white d-block">Search</label>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="daytrips-booking-section">
    <div class="container">
        <div class="row row-space-25">
            <div class="col-md-3 daytrips-booking-sidebar">
                <p class="mobile-view-widget-btn d-md-none "><span>Filter  <i class="fa-solid fa-filter"></i> </span></p>
                <div class="daytrips-booking-sidebar-inner">
                    <div class="back-btn-link back-btn-close-filter d-md-none">
                        <a href="javascript:void(0)"><i class="fa-solid fa-arrow-left-long"></i></a>
                    </div>
                    <div class="widget widget-search">
                        <h2 class="widget-title">Keyword</h2>
                        <div class="search-form-content">
                            <form>
                                <div class="position-relative search-input-field">
                                    <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="widget widget-activity-type">
                        <h2 class="widget-title">Activity Type</h2>
                        <div class="activity-type-content">
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="type-1">
                                    <label for="type-1">Sports Events</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="type-2">
                                    <label for="type-2">Transport Only</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="type-3">
                                    <label for="type-3">Theatre, Shows And Musicals</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="type-4">
                                    <label for="type-4">Cooking Class</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="type-5">
                                    <label for="type-5">Cooking Class</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="type-6">
                                    <label for="type-6">Cooking Class</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-duration">
                        <h2 class="widget-title">Duration</h2>
                        <div class="duration-list-content">
                            <div class="custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="duration-1">
                                    <label for="duration-1">Flexible</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="duration-2">
                                    <label for="duration-2">Full Day</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="duration-3">
                                    <label for="duration-3">Evening</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="duration-4">
                                    <label for="duration-4">Half Day Morning</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="duration-5">
                                    <label for="duration-5">Half Day Afternoon</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="duration-6">
                                    <label for="duration-6">Multiple Option</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-9 daytrips-booking-contentarea">
                <div class="daytrips-booking-listing-box">
                    <div class="row">
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-1.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Appian Way Bike Rental</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-2.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Immersive Audio Walks Rome</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-3.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Trevi Underground</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-4.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>I Love Rome Hop On Hop Off Tour</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-5.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Palazzo Valentini</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-6.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Roman National Museum</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-7.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Capitoline Museum</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                        <div class="col-6 booking-listing-box">
                            <div class="image-box">
                                <img src="{{asset('assets/images/booking-8.jpg')}}" alt="Day Trips">
                            </div>
                            <div class="box-heading">
                                <h2>Bike Rental with Tickets to Baths of Caracalla</h2>
                            </div>
                            <div class="box-content">
                                <p>Captivating views, modern comforts, and person- alized hospitality for a tranquil Mediterranean escape.</p>
                            </div>
                            <div class="box-btnl-list d-flex align-items-center">
                                <a href="{{route('dayTripBookingDetail')}}">More details</a>
                                <p class="mb-0">Price $184</p>
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
<script>
    $(".apply-filter-btn button").on("click",function(){
      $(".daytrips-booking-sidebar .daytrips-booking-sidebar-inner").removeClass("active");
    });

    $(".back-btn-close-filter").on("click",function(){
      $(".daytrips-booking-sidebar .daytrips-booking-sidebar-inner").removeClass("active");
    });
</script>
@endsection