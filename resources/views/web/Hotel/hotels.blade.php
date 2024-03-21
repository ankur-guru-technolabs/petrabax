@extends('web.master')
@section('content')
  <div class="hero-section-two">
    <div class="container position-relative">
        <img src="{{ asset('assets/images/herosection-two.jpg')}}" alt="Petrabax">
        <!-- <div class="hero-content-text">
          <h1>Petrabax</h1>
        </div> -->
    </div>
  </div>

  <div class="hotel-filter-section">
    <div class="container">
        <form>
            <div id="filter-content" class="filter-content">
                <div class="filter-grid-box filter-search-box">
                    <label>Select Your Destination or Hotels</label>
                    <input type="text" class="form-control custom-form-control" placeholder="Search" required>
                </div>
                <div class="filter-grid-box filter-check-in filte-same-width">
                    <label>Check-In</label>
                    <input type="text" name="daterange" id="daterangestart" class="checkindate form-control custom-form-control" placeholder="Select" required />
                </div>
                <div class="filter-grid-box filter-check-out filte-same-width">
                    <label>Check-Out</label>
                    <input type="text" name="daterange" id="daterangeend" class="checkout form-control custom-form-control" placeholder="Select" required />
                </div>
                <div class="filter-grid-box filter-night filte-same-width">
                    <label>Night</label>
                    <input type="text" id="night" class="form-control custom-form-control" value="1" placeholder="Select">
                </div>

                <div class="filter-grid-box filter-room-guest filte-same-width  position-relative">
                    <label>Rooms & Guest</label>

                    <p id="roomguest" class="mb-0 text-center"><span id="adultscount">2 Adults</span><span id="childcount"></span></p>

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
                                            <button type="button" class="roomsub"><i class="fa fa-minus"></i></button>
                                            <input class="count totalroom-count" type="text" value="1" min="1" max="100" />
                                            <button type="button" class="roomadd"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="room-total-inner-dropdown-1" class="room-total-inner-dropdown room-total-inner-dropdown-1 active">
                                <div class="room-title-block">Room - 1</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-1 adults-count" type="text" value="2" min="1" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-1" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <button type="button" class="child-sub"><i class="fa fa-minus"></i></button>
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-2" class="room-total-inner-dropdown room-total-inner-dropdown-2">
                                <div class="room-title-block">Room - 2</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-2 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-2" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-3" class="room-total-inner-dropdown room-total-inner-dropdown-3">
                                <div class="room-title-block">Room - 3</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-3 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-3" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-4" class="room-total-inner-dropdown room-total-inner-dropdown-4">
                                <div class="room-title-block">Room - 4</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-4 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-4" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-5" class="room-total-inner-dropdown room-total-inner-dropdown-5">
                                <div class="room-title-block">Room - 5</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-5 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-5" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-6" class="room-total-inner-dropdown room-total-inner-dropdown-6">
                                <div class="room-title-block">Room - 6</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-6 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-6" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-7" class="room-total-inner-dropdown room-total-inner-dropdown-7">
                                <div class="room-title-block">Room - 7</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-7 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-7" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-8" class="room-total-inner-dropdown room-total-inner-dropdown-8">
                                <div class="room-title-block">Room - 8</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-8 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-8" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-9" class="room-total-inner-dropdown room-total-inner-dropdown-9">
                                <div class="room-title-block">Room - 9</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-9 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-9" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>

                            <div id="room-total-inner-dropdown-10" class="room-total-inner-dropdown room-total-inner-dropdown-10">
                                <div class="room-title-block">Room - 10</div>
                                <div class="room-block dropdown-block">
                                    <div class="d-flex align-items-center">
                                        <div class="left-label-text">
                                            <label>Adults</label>
                                        </div>
                                        <div class="wrap right-qnt-select">
                                            <div class="qnt-box">
                                                <button type="button" class="sub adults-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count adults-count-10 adults-count" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add adults-add"><i class="fa fa-plus"></i></button>
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
                                                <button type="button" class="sub children-sub"><i class="fa fa-minus"></i></button>
                                                <input class="count childerns-count childerns-count-10" type="text" value="0" min="0" max="100" />
                                                <button type="button" class="add children-add"><i class="fa fa-plus"></i></button>
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
                                                        <input class="count" type="text" size="4" pattern="" inputmode="" value="0" min="0" max="12" />
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter-grid-box filter-search-btn">
                    <button type="submit"><span class="d-block">Search</span><i class="fa-solid fa-magnifying-glass"></i></button>
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
        @foreach($hotels as $hotel)
        <!-- <div class="col-md-4 col-6 hotel-box featured-hotels-box">
          <div class="hotel-box-inner">
            <div class="hotel-img">
              <img src="{{ asset('assets/images/featured-hotels-1.jpg')}}" alt="featured-hotels">
            </div>
            <div class="hotel-content">
              <h2>{{$hotel['name']['content']}}</h2>
              <div class="hotel-sort-details">
                <span class="count-rating w-100 d-inline-block">
                  <i class="fa-solid fa-star"></i>
                  4.3  Twin Bed
                </span>
                <span class="availablety">4 Rooms available</span>
              </div>
              <p>{{  \Illuminate\Support\Str::limit($hotel['description']['content'], 170, '...') }}</p>
            </div>
            <div class="book-btn">
                <a href="#" title="book now">Book Now</a>
            </div>
          </div>
        </div> -->
        @endforeach
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
@section('jscontent')
<script>
$(document).ready(function(){
  setTimeout(function(){
    console.log(parseInt($(".childerns-count-1").val()));
}, 5000);
});
</script>
@endsection
