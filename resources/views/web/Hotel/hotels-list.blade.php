@extends('web.master')
@section('content')
    <div class="hero-section-two">
        <div class="container position-relative">
            <img src="{{ asset('assets/images/herosection-two.jpg')}}" alt="Petrabax">
            <div class="hero-content-text">
                <h1>Petrabax</h1>
            </div>
        </div>
    </div>

    <div class="hotel-filter-section">
        <div class="container">
            <form>
                <div class="filter-content">
                    <div class="filter-grid-box filter-search-box">
                        <label>Select Your Destination or Hotels</label>
                        <input type="text" class="form-control custom-form-control" placeholder="Search" required>
                    </div>
                    <div class="filter-grid-box filter-check-in filte-same-width">
                        <label>Check-In</label>
                        <input type="text" id="checkin" class="datepicker form-control custom-form-control" placeholder="Select" required>
                    </div>
                    <div class="filter-grid-box filter-check-out filte-same-width">
                        <label>Check-Out</label>
                        <input type="text" id="checkout" class="datepicker form-control custom-form-control" placeholder="Select" required>
                    </div>
                    <div class="filter-grid-box filter-night filte-same-width">
                        <label>Night</label>
                        <input type="text" id="night" class="form-control custom-form-control" placeholder="Select" readonly>
                    </div>

                    <div class="filter-grid-box filter-room-guest filte-same-width  position-relative">
                        <label>Rooms & Guest</label>

                        <p id="roomguest" class="mb-0 text-center">Select</p>

                        <!--<input type="text" id="roomguest" class="form-control custom-form-control" placeholder="Select" required>-->
                        <div class="dropdown-menu room-select-dropdown">
                            <div class="dropdown-inner">
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Rooms</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" id="sub" class="sub"><i class="fa fa-minus"></i></button>
                                                <input class="count" type="text" id="1" value="1" min="1" max="100" />
                                                <button type="button" id="add" class="add"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" id="sub" class="sub"><i class="fa fa-minus"></i></button>
                                                <input class="count" type="text" id="1" value="1" min="1" max="100" />
                                                <button type="button" id="add" class="add"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Children's to 12 YRS</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" id="sub" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count" type="text" id="1" value="0" min="0" max="100" />
                                                <button type="button" id="add" class="add children-add"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child-block dropdown-block">
                                    <p>Children’s ages:</p>
                                    <div class="row m-0">
                                        <div class="ps-0 left-child-box">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child-1</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" id="sub" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" id="1" value="0" min="0" max="12" />
                                                        <button type="button" id="add" class="add child-add"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-child-box">
                                            <div class="d-flex align-items-center">
                                                <div class="left-child-lable">
                                                    <label>Child-2</label>
                                                </div>
                                                <div class="wrap right-qnt-select">
                                                    <div class="qnt-box">
                                                        <button type="button" id="sub" class="sub child-sub"><i class="fa fa-minus"></i></button>
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" id="1" value="0" min="0" max="12" />
                                                        <button type="button" id="add" class="add child-add"><i class="fa fa-plus"></i></button>
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
                        <!--<label class="text-white">Search</label>-->
                        <button type="submit">Search</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="hotel-list-section">
        <div class="container">
            <div class="section-header mb-50">
                <h2>Featured Hotel</h2>
            </div>
            <div class="row  row-space-20">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 left-sidebar-widget">
                    <p class="mobile-view-widget-btn d-md-none ">Filter <i class="fa-solid fa-filter"></i> </p>
                    <div class="sidebar-inner">
                        <div class="widget widget-price-filter">
                            <h3 class="widget-title">Price range</h3>
                            <div class="price-filter-content">
                                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                                <div class="price-filter-input d-flex position-relative align-items-center">
                                    <div class="minprice-prifix">
                                        <span class="min-price-prifix">$</span>
                                        <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                                    </div>
                                    <div class="maxprice-input position-relative">
                                        <span class="max-price-prifix">$</span>
                                        <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-property-type">
                            <h3 class="widget-title">Property Type</h3>
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="hotel">
                                    <label for="hotel">Hotel</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="apartment">
                                    <label for="apartment">Apartment</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="residence">
                                    <label for="residence">Residence</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="houseboat">
                                    <label for="houseboat">House boat</label>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-amenities">
                            <h3 class="widget-title">Hotel Amenities</h3>
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="amenities-1">
                                    <label for="amenities-1">Outdoor space</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="amenities-2">
                                    <label for="amenities-2">Electric car charging station</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="amenities-3">
                                    <label for="amenities-3">Washer and dryer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="amenities-4">
                                    <label for="amenities-4">Ocean view</label>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-rating">
                            <h3 class="widget-title">Star-ratings</h3>
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="rating-1">
                                    <label for="rating-1">3 Star</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="rating-2">
                                    <label for="rating-2">4 Star</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="rating-3">
                                    <label for="rating-3">5 Star</label>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-user-rating">
                            <h3 class="widget-title">User-ratings</h3>
                            <div class="property-list custom-checkbox">
                                <div class="form-group">
                                    <input type="checkbox" id="userrating-1">
                                    <label for="userrating-1">Excellent 4+</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="userrating-2">
                                    <label for="userrating-2">Very Good 3+</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="userrating-3">
                                    <label for="userrating-3">Good 2+</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 listing-right-content-area">
                    <div class="listing-content-inner">
                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-1.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-2.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-3.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-4.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-5.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-6.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-7.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-8.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-9.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-box">
                            <div class="row row-space-20">
                                <div class="col-lg-6 listing-image-box">
                                    <img src="{{ asset('assets/images/listing-img-10.jpg')}}" alt="Featured Hotel">
                                </div>
                                <div class="col-lg-6 listing-right-content">
                                    <div class="listing-inner">
                                        <div class="post-header">
                                            <h3>Motel 6 Greenville, SC</h3>
                                            <span class="rating"><i class="fa-solid fa-star"></i>  4.3 Twin Bed</span>
                                            <span class="availablety">4 Rooms available</span>
                                        </div>
                                        <div class="post-content">
                                            <p>This cosy motel can be found in Piedmont. The establishment's common areas include Wi-Fi internet connection. Additionally, the premises provide a reception service the whole day through.</p>
                                        </div>
                                        <div class="post-btn-box d-flex align-items-center">
                                            <p>Price $184</p>
                                            <a href="{{route('hotelDetails')}}" class="more-detail-btn">More details</a>
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