@extends('web.master')
@section('content')
<div class="site-main-content">
    <div class="hero-section-two">
        <div class="container position-relative">
            <img src="{{asset('assets/images/day-trips-1.jpg')}}" alt="Petrabax">
        </div>
    </div>
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
                        <a href="{{route('dayTripBookingFilter')}}" class="text-center">
                            <label class="text-white d-block">Search</label>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="featured-hotels-section featured-destinations">
        <div class="container">
            <div class="section-header mb-50">
                <h2 class="text-color-2">Featured Destinations</h2>
            </div>
            <div class="row">
                <div id="featured-post-1" class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                    <div class="hotel-box-inner">
                        <div class="hotel-img">
                            <img src="{{asset('assets/images/paradores-1.jpg')}}" alt="Featured">
                        </div>
                        <div class="hotel-content">
                            <h2>Paris</h2>
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="book-btn">
                            <a href="#filter-content" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div id="featured-post-2" class="col-md-4 col-6 hotel-box featured-hotels-box">
                    <div class="hotel-box-inner">
                        <div class="hotel-img">
                            <img src="{{asset('assets/images/paradores-2.jpg')}}" alt="Featured">
                        </div>
                        <div class="hotel-content">
                            <h2>Lisbon</h2>
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="book-btn">
                            <a href="#filter-content" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div id="featured-post-3" class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                    <div class="hotel-box-inner">
                        <div class="hotel-img">
                            <img src="{{asset('assets/images/paradores-3.jpg')}}" alt="Featured">
                        </div>
                        <div class="hotel-content">
                            <h2>Granada</h2>
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="book-btn">
                            <a href="#filter-content" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div id="featured-post-4" class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                    <div class="hotel-box-inner">
                        <div class="hotel-img">
                            <img src="{{asset('assets/images/paradores-4.jpg')}}" alt="Featured">
                        </div>
                        <div class="hotel-content">
                            <h2>Madrid</h2>
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="book-btn">
                            <a href="#filter-content" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div id="featured-post-5" class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                    <div class="hotel-box-inner">
                        <div class="hotel-img">
                            <img src="{{asset('assets/images/paradores-5.jpg')}}" alt="Featured">
                        </div>
                        <div class="hotel-content">
                            <h2>Seville</h2>
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="book-btn">
                            <a href="#filter-content" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>

                <div id="featured-post-6" class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                    <div class="hotel-box-inner">
                        <div class="hotel-img">
                            <img src="{{asset('assets/images/paradores-6.jpg')}}" alt="Featured">
                        </div>
                        <div class="hotel-content">
                            <h2>Barcelona</h2>
                            <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                        </div>
                        <div class="book-btn">
                            <a href="#filter-content" title="book now">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
@endsection