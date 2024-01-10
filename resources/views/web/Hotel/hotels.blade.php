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
            <input type="text" id="night" class="form-control custom-form-control" placeholder="Select"  readonly>
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

  <div class="featured-hotels-section">
    <div class="container">
      <div class="section-header mb-50">
        <h2>Featured Hotels</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-6 hotel-box featured-hotels-box">
          <div class="hotel-box-inner">
            <div class="hotel-img">
              <img src="{{ asset('assets/images/featured-hotels-1.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>Miro, Vizcaya - Bilbao, SPAIN</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
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
              <img src="{{ asset('assets/images/featured-hotels-2.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>Miro, Vizcaya - Bilbao, SPAIN</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
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
              <img src="{{ asset('assets/images/featured-hotels-3.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>Miro, Vizcaya - Bilbao, SPAIN</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
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
              <img src="{{ asset('assets/images/featured-hotels-4.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>Miro, Vizcaya - Bilbao, SPAIN</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
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
              <img src="{{ asset('assets/images/featured-hotels-5.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>Miro, Vizcaya - Bilbao, SPAIN</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
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
              <img src="{{ asset('assets/images/featured-hotels-6.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>Miro, Vizcaya - Bilbao, SPAIN</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
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