@extends('web.master')
@section('content')

<div class="masonary-content">
    <div class="container">
        <div class="masonary-inner">
            <div class="row m-0 align-items-center">
                <div class="col-lg-5 p-0 masonary-left-content">
                    <h2>Travel far and wide, but always carry a piece of each place with you.</h2>
                </div>
                <div class="col-lg-7 p-0 masonary-grid-image">
                    <div class="row masonry-grid">
                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-1.jpg')}}" alt="Masonary">
                                <div class="title-block">
                                    <h3>Park Guell</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-2.jpg')}}" alt="Masonary">
                                <div class="title-block">
                                    <h3>Guggenheim Museum</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box space-top">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-3.jpg')}}" alt="Masonary">
                                <div class="title-block">
                                    <h3>Barcelona</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-4.jpg')}}" alt="Masonary">
                                <div class="title-block">
                                    <h3>Tarifa</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-5.jpg')}}" alt="Masonary">
                                <div class="title-block">
                                    <h3>The Canary Islands</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-6.jpg')}}" alt="Masonary">
                                <div class="title-block">
                                    <h3>La Sagrada Familia</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box mb-0">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-7.jpg')}}" alt="Masonary">
                                <div class="title-block d-none">
                                    <h3>La Sagrada Familia</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-4 masonary-box mb-0">
                            <div class="masonary-box-inner">
                                <img src="{{ asset('assets/images/masonry-8.jpg')}}" alt="Masonary">
                                <div class="title-block d-none">
                                    <h3>La Sagrada Familia</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
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

<div class="featured-hotels-section paradores-section">
    <div class="container">
        <div class="section-header mb-50">
            <h2>Featured Paradores</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{ asset('assets/images/paradores-1.jpg')}}" alt="Paradores">
                    </div>
                    <div class="hotel-content">
                        <h2>Santiago - Hostal Dos Reis Catolicos</h2>
                        <div class="hotel-sort-details">
                            <span class="count-rating w-100 d-inline-block">
                                <i class="fa-solid fa-star"></i> 4.3  Twin Bed
                            </span>
                            <span class="availablety">Aragon</span>
                        </div>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{ asset('assets/images/paradores-2.jpg')}}" alt="Paradores">
                    </div>
                    <div class="hotel-content">
                        <h2>Toledo</h2>
                        <div class="hotel-sort-details">
                            <span class="count-rating w-100 d-inline-block">
                                <i class="fa-solid fa-star"></i> 4.3  Twin Bed
                            </span>
                            <span class="availablety">Andalucia</span>
                        </div>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{ asset('assets/images/paradores-3.jpg')}}" alt="Paradores">
                    </div>
                    <div class="hotel-content">
                        <h2>Tortosa</h2>
                        <div class="hotel-sort-details">
                            <span class="count-rating w-100 d-inline-block">
                                <i class="fa-solid fa-star"></i> 4.3  Twin Bed
                            </span>
                            <span class="availablety">Portugal</span>
                        </div>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{ asset('assets/images/paradores-4.jpg')}}" alt="Paradores">
                    </div>
                    <div class="hotel-content">
                        <h2>Nerja</h2>
                        <div class="hotel-sort-details">
                            <span class="count-rating w-100 d-inline-block">
                                <i class="fa-solid fa-star"></i> 4.3  Twin Bed
                            </span>
                            <span class="availablety">Andalucia</span>
                        </div>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{ asset('assets/images/paradores-5.jpg')}}" alt="Paradores">
                    </div>
                    <div class="hotel-content">
                        <h2>Aiguablava</h2>
                        <div class="hotel-sort-details">
                            <span class="count-rating w-100 d-inline-block">
                                <i class="fa-solid fa-star"></i> 4.3  Twin Bed
                            </span>
                            <span class="availablety">Catalonia</span>
                        </div>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{ asset('assets/images/paradores-5.jpg')}}" alt="Paradores">
                    </div>
                    <div class="hotel-content">
                        <h2>Catalonia</h2>
                        <div class="hotel-sort-details">
                            <span class="count-rating w-100 d-inline-block">
                                <i class="fa-solid fa-star"></i> 4.3  Twin Bed
                            </span>
                            <span class="availablety">Andalucia</span>
                        </div>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript" src="{{ asset('assets/js/masonry.pkgd.min.js')}}"></script>
@endsection