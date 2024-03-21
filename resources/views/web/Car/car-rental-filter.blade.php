@extends('web.master')
@section('content') 
<div class="hero-section-two">
    <div class="container position-relative">
        <img src="{{asset('assets/images/car-rental.jpg')}}" alt="Car">
    </div>
</div>
<div class="hotel-list-section car-rental-filter-section">
    <div class="container">
        <div class="row  row-space-20">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 left-sidebar-widget">
                <p class="mobile-view-widget-btn d-md-none "><span>Filter  <i class="fa-solid fa-filter"></i> </span></p>

                <div class="sidebar-inner">
                    <div class="back-btn-link back-btn-close-filter d-md-none">
                        <a href="javascript:void(0)"><i class="fa-solid fa-arrow-left-long"></i></a>
                    </div>
                    <form>
                        <div class="widget widget-found-title">
                            <h3 class="widget-title">2 Cars found</h3>
                        </div>
                        <div class="widget widget-price-filter">
                            <h3 class="widget-title">Price range</h3>
                            <div class="price-filter-content">
                                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                                <div class="price-filter-input d-flex position-relative align-items-center">
                                    <div class="minprice-prifix">
                                        <span class="min-price-prifix">$</span>
                                        <input type="number" min=0 max="1000" oninput="validity.valid||(value='76');" id="min_price" class="price-range-field" />
                                    </div>
                                    <div class="maxprice-input position-relative">
                                        <span class="max-price-prifix">$</span>
                                        <input type="number" min=0 max="1000" oninput="validity.valid||(value='1000');" id="max_price" class="price-range-field" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-property-type">
                            <h3 class="widget-title">Transmission Type</h3>
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="type-1">
                                    <label for="type-1">Manual Transmission</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="type-2">
                                    <label for="type-2">Automatic Transmission</label>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-amenities">
                            <h3 class="widget-title">Numbers of Passenagers</h3>
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="passengers-1">
                                    <label for="passengers-1">4 Passengers</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="passengers-2">
                                    <label for="passengers-2">5 Passengers</label>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-country widget-same-box-design">
                            <h3 class="widget-title">Pick Up Country</h3>
                            <div class="widget-inner">
                                <select id="selectcountry" class="form-control widget-common-form-control selecttwodrp">
                                    <option value="" selected="selected"></option>
                                    <option disabled>------- Please select -------</option>
                                    <option selected>Spain</option>
                                    <option>Portugal</option>
                                    <option>Argentina</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Belgium</option>
                                    <option>Brazil</option>
                                    <option>Bulgaria</option>
                                    <option>Canada</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Colombia</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget widget-country widget-same-box-design">
                            <h3 class="widget-title">Pick Up City</h3>
                            <div class="widget-inner">
                                <select id="pickupcity" class="form-control widget-common-form-control selecttwodrp">
                                    <option value="" selected="selected"></option>
                                    <option disabled>------- Please select -------</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget widget-country widget-same-box-design">
                            <h3 class="widget-title">Pick Up Location</h3>
                            <div class="widget-inner">
                                <select id="pickuplocation" class="form-control widget-common-form-control selecttwodrp">
                                    <option value="" selected="selected"></option>
                                    <option disabled>------- Please select -------</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget widget-date widget-same-box-design">
                            <h3 class="widget-title">Pick Up Date</h3>
                            <div class="widget-inner">
                                <input type="text" id="pickupdate" class="form-control widget-common-form-control" placeholder="Select" />
                            </div>
                        </div>
                        <div class="widget widget-time widget-same-box-design">
                            <h3 class="widget-title">Time</h3>
                            <div class="widget-inner">
                                <input type="text" class="timepicker form-control widget-common-form-control" placeholder="Select" />
                            </div>
                        </div>
                        <div class="widget widget-date widget-same-box-design">
                            <h3 class="widget-title">Drop Off Date</h3>
                            <div class="widget-inner">
                                <input type="text" id="dropoffdate" class="form-control widget-common-form-control" placeholder="Select" />
                            </div>
                        </div>
                        <div class="widget widget-time widget-same-box-design">
                            <h3 class="widget-title">Time</h3>
                            <div class="widget-inner">
                                <input type="text" class="timepicker form-control widget-common-form-control" placeholder="Select" />
                            </div>
                        </div>
                        <div class="widget widget-submit-btn">
                            <button type="submit" class="submit-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 listing-right-content-area car-filter-content-area">
                <!--<div class="daytrips-booking-contentarea-inner">
                <div class="daytrips-booking-contentarea-top">
                  <p>Pick-up location - <span>Albufeira city office | February 29, 2024 at 10:00 AM</p>
                  <p>Return location - <span>Albufeira city office | March 03, 2024 at 10:15 AM</span></p>
                  <p>Duration - <span>4 days</span></p>
                </div>
              </div>-->

                <div class="car-filter-tabs-content">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">
                                <span>Economy</span>
                                <span>From $ 100</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">
                                <span>Compact</span>
                                <span>From $ 100</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">
                                <span>Intermediate</span>
                                <span>From $ 100</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">
                                <span>Standard</span>
                                <span>From $ 100</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">
                                <span>Full Size</span>
                                <span>From $ 100</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false">
                                <span>Premium</span>
                                <span>From $ 100</span>
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-1.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-2.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-1.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-2.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab" tabindex="0">
                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-1.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab" tabindex="0">
                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-2.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab" tabindex="0">
                            <div class="transfer-filter-listing-box">
                                <div class="row">
                                    <div class="col-md-5 transfer-filter-img">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/car-filter-1.jpg')}}" alt="car filter">
                                        </div>
                                    </div>
                                    <div class="col-md-7 transfer-filter-content">
                                        <div class="transfer-filter-content-inner">
                                            <div class="top-header-content">
                                                <h2>Seat Ibiza</h2>
                                                <span>or similar</span><span>Compact Class</span>
                                            </div>
                                            <div class="cars-include-list">
                                                <span class="badge badge-default">Manual Transmission</span>
                                                <span class="badge badge-default">4 Passengers</span>
                                                <span class="badge badge-default">2 Hand bags</span>
                                                <span class="badge badge-default">5 Doors</span>
                                                <span class="badge badge-default">1 Suit case</span>
                                                <span class="badge badge-default">Air Conditioner</span>
                                            </div>
                                            <p>Unlimited Kilometers | Value Added Tax (VAT)</p>
                                            <div class="bottom-more-details d-flex flex-wrap align-items-center">
                                                <div class="left-link-text">
                                                    <a href="{{route('carRentalTerms')}}" class="d-block">Terms And Conditions</a>
                                                    <a href="{{route('carRentalDetails')}}" class="d-block">More Details</a>
                                                </div>
                                                <div class="right-car-info-img">
                                                    <img src="{{asset('assets/images/europcar.png')}}" alt="Car">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-rental-booking-price booking-tab-price-content">
                                    <div class="price-full-details">
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Insurance with deductible More details <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero Excess including tires and glass <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Zero deductible insurance <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Excess with Super Cover <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
                                            </div>
                                        </div>
                                        <div class="price-full-details-inner">
                                            <div class="price-details-box">
                                                <p>Price includes applicable taxes. Zero Insurance Excess <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Inclusive Package Rate Includes: VAT tax, liability, fire and theft insurances with deductible"><img src="{{asset('assets/images/info-circle.png')}}" alt="Info"></span></p>
                                            </div>
                                            <div class="price-details-box">
                                                <p>$184</p>
                                            </div>
                                            <div class="price-details-box">
                                                <a href="{{route('carRentalBooking')}}" class="custom-btn">Select</a>
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
    </div>
</div>
@endsection
@section('jscontent')
<script>
    $("#min_price,#max_price").on('change', function () {

        $('#price-range-submit').show();
        var min_price_range = parseInt($("#min_price").val());
        var max_price_range = parseInt($("#max_price").val());

        if (min_price_range > max_price_range) {
            $('#max_price').val(min_price_range);
        }

        $("#slider-range").slider({
            values: [min_price_range, max_price_range]
        });
    });

    $("#min_price,#max_price").on("paste keyup", function () {                                      
        $('#price-range-submit').show();

        var min_price_range = parseInt($("#min_price").val());
        var max_price_range = parseInt($("#max_price").val());
        
        if(min_price_range == max_price_range){

            max_price_range = min_price_range + 100;
            
            $("#min_price").val(min_price_range);   
            $("#max_price").val(max_price_range);
        }

        $("#slider-range").slider({
            values: [min_price_range, max_price_range]
        });
    });

    $(function () {
        $("#slider-range").slider({
            range: true,
            orientation: "horizontal",
            min: 0,
            max: 1000,
            values: [0, 1000],
            step: 100,

            slide: function (event, ui) {
            if (ui.values[0] == ui.values[1]) {
                return false;
            }
            
            $("#min_price").val(ui.values[0]);
            $("#max_price").val(ui.values[1]);
            }
        });
        $("#min_price").val($("#slider-range").slider("values", 0));
        $("#max_price").val($("#slider-range").slider("values", 1));
    });

    if($("#selectcountry").length) { 
        $('#selectcountry').select2({
            placeholder: 'Select Country'
        });
    }

    if($("#pickupcity").length) { 
        $('#pickupcity').select2({
            placeholder: 'Select City'
        });
    }

    if($("#pickuplocation").length) { 
        $('#pickuplocation').select2({
            placeholder: 'Select Location'
        });
    }

    $('input.timepicker').timepicker({
        timeFormat: 'HH:mm',
        minTime: '00:00',
        maxHour: '24',
        maxMinutes: '15',
        interval: 15,
        dropdown: true,
        scrollbar: true
    });

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>
@endsection