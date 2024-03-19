@extends('web.master')
@section('content') 
<div class="hero-section-two">
    <div class="container position-relative">
        <img src="{{asset('assets/images/transfer.jpg')}}" alt="transfer">
    </div>
</div>
<div class="daytrips-booking-section transfer-filter-section">
    <div class="container">
        <div class="row row-space-25">
            <div class="col-md-3 daytrips-booking-sidebar">
                <p class="mobile-view-widget-btn d-md-none "><span>Filter  <i class="fa-solid fa-filter"></i> </span></p>
                <div class="daytrips-booking-sidebar-inner">
                    <div class="back-btn-link back-btn-close-filter d-md-none">
                        <a href="javascript:void(0)"><i class="fa-solid fa-arrow-left-long"></i></a>
                    </div>
                    <form>
                        <div class="widget widget-country widget-same-box-design">
                            <h2 class="widget-title">Country</h2>
                            <div class="widget-inner">
                                <input type="text" class="form-control widget-common-form-control" placeholder="Country Name">
                            </div>
                        </div>
                        <div class="widget widget-date widget-same-box-design">
                            <h2 class="widget-title">Date</h2>
                            <div class="widget-inner">
                                <input type="text" id="transferdate" class="form-control widget-common-form-control" placeholder="Select Date">
                            </div>
                        </div>
                        <div class="widget widget-time widget-same-box-design">
                            <h2 class="widget-title">Time</h2>
                            <div class="widget-inner">
                                <input type="text" id="transferdate" class="timepicker form-control widget-common-form-control" placeholder="Select Time">
                            </div>
                        </div>
                        <div class="widget widget-travelers widget-same-box-design">
                            <h2 class="widget-title">Travelers</h2>
                            <div class="widget-inner">
                                <input type="text" class="form-control widget-common-form-control" placeholder="Travelers">
                            </div>
                        </div>
                        <div class="widget widget-pickup widget-same-box-design">
                            <h2 class="widget-title">Pickup</h2>
                            <div class="widget-inner">
                                <select class="nice-select form-control widget-common-form-control">
                                    <option>Terminal</option>
                                    <option>Accomodation</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget widget-terminal widget-same-box-design">
                            <h2 class="widget-title">Terminal</h2>
                            <div class="widget-inner">
                                <select id="pickupterminal" class="custom-form-control widget-common-form-control selecttwodrp">
                                    <option></option>
                                    <optgroup label="Airport">
                                        <option>Adelaide, Adelaide Int. Airport</option>
                                        <option>Alice Springs, Alice Springs Airport</option>
                                        <option>Avalon, Avalon Airport</option>
                                        <option>Ayers Rock, Airport Connellan Airport</option>
                                        <option>Ballina, Ballina Byron Gateway Airport</option>
                                        <option>Brisbane, Brisbane Airport</option>
                                        <option>Broome, Broome International Airport </option>
                                        <option>Cairns, Cairns Airport</option>
                                        <option>Canberra, Canberra Airport</option>
                                        <option>Darwin, Darwin International Airport </option>
                                        <option>Darwin, Darwin International Airport</option>
                                        <option>Dubbo, Dubbo City Regional Airport</option>
                                        <option>Gold Coast, Coolangatta Airport</option>
                                        <option>Hervey Bay, Hervey Bay Airport </option>
                                        <option>Hobart, Hobart INTL Airport</option>
                                        <option>Launceston, Launceston Airport</option>
                                        <option>Melbourne, Avalon International Airport</option>
                                        <option>Melbourne, Tullamarine Int. Airport</option>
                                        <option>Mount Isa Regional Airport</option>
                                        <option>Newcastle Airport</option>
                                        <option>Perth, Perth Domestic Airport </option>
                                        <option>Perth, Perth Int. Airport</option>
                                        <option>Port Lincoln, Port Lincoln Airport</option>
                                        <option>Proserpine, Proserpine Whitsunday Coast Airport </option>
                                        <option>Sunshine Coast, Sunshine Coast Airport</option>
                                        <option>Sydney, Int. Airport Kingsford Smith</option>
                                        <option>Townsville, Townsville Airport</option>
                                        <option>Wagga Wagga, Wagga Wagga Airport</option>
                                    </optgroup>
                                    <optgroup label="Port">
                                        <option>Adelaide, Port Adelaide Cruise Passenger Terminal</option>
                                        <option>Brisbane, Port of Brisbane Fisherman Island</option>
                                        <option>Brisbane, Portside Wharf Terminal</option>
                                        <option>Broome Port Jetty</option>
                                        <option>Cairns Cruise Liner Terminal</option>
                                        <option>Darwin, Fort Hill Wharf - Darwin Port</option>
                                        <option>Melbourne, Port Melbourne Station Pier</option>
                                        <option>Perth, Fremantle Cruise Ship Terminal</option>
                                        <option>Port Douglas</option>
                                        <option>Queensland, Shute Harbour</option>
                                        <option>River Heads, Port Fraser Island Barges</option>
                                        <option>Sydney, Circular Quay Harbour</option>
                                        <option>Sydney, Wharf 5 Barangaroo Harbour</option>
                                        <option>Sydney, White Bay Cruise Terminal</option>
                                    </optgroup>
                                    <optgroup label="Terminal">
                                        <option>Joondalup, Joondalup railway station</option>
                                        <option>Sydney, Central Railway Station</option>
                                    </optgroup>
                                </select>

                            </div>
                        </div>
                        <div class="widget widget-dropff widget-same-box-design">
                            <h2 class="widget-title">Drop off</h2>
                            <div class="widget-inner">
                                <select class="nice-select form-control widget-common-form-control">
                                    <option>Terminal</option>
                                    <option>Accomodation</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget widget-terminal widget-same-box-design">
                            <h2 class="widget-title">Terminal</h2>
                            <div class="widget-inner">
                                <select id="dropoffterminal" class="custom-form-control widget-common-form-control selecttwodrp">
                                    <option></option>
                                    <optgroup label="Airport">
                                        <option>Adelaide, Adelaide Int. Airport</option>
                                        <option>Alice Springs, Alice Springs Airport</option>
                                        <option>Avalon, Avalon Airport</option>
                                        <option>Ayers Rock, Airport Connellan Airport</option>
                                        <option>Ballina, Ballina Byron Gateway Airport</option>
                                        <option>Brisbane, Brisbane Airport</option>
                                        <option>Broome, Broome International Airport </option>
                                        <option>Cairns, Cairns Airport</option>
                                        <option>Canberra, Canberra Airport</option>
                                        <option>Darwin, Darwin International Airport </option>
                                        <option>Darwin, Darwin International Airport</option>
                                        <option>Dubbo, Dubbo City Regional Airport</option>
                                        <option>Gold Coast, Coolangatta Airport</option>
                                        <option>Hervey Bay, Hervey Bay Airport </option>
                                        <option>Hobart, Hobart INTL Airport</option>
                                        <option>Launceston, Launceston Airport</option>
                                        <option>Melbourne, Avalon International Airport</option>
                                        <option>Melbourne, Tullamarine Int. Airport</option>
                                        <option>Mount Isa Regional Airport</option>
                                        <option>Newcastle Airport</option>
                                        <option>Perth, Perth Domestic Airport </option>
                                        <option>Perth, Perth Int. Airport</option>
                                        <option>Port Lincoln, Port Lincoln Airport</option>
                                        <option>Proserpine, Proserpine Whitsunday Coast Airport </option>
                                        <option>Sunshine Coast, Sunshine Coast Airport</option>
                                        <option>Sydney, Int. Airport Kingsford Smith</option>
                                        <option>Townsville, Townsville Airport</option>
                                        <option>Wagga Wagga, Wagga Wagga Airport</option>
                                    </optgroup>
                                    <optgroup label="Port">
                                        <option>Adelaide, Port Adelaide Cruise Passenger Terminal</option>
                                        <option>Brisbane, Port of Brisbane Fisherman Island</option>
                                        <option>Brisbane, Portside Wharf Terminal</option>
                                        <option>Broome Port Jetty</option>
                                        <option>Cairns Cruise Liner Terminal</option>
                                        <option>Darwin, Fort Hill Wharf - Darwin Port</option>
                                        <option>Melbourne, Port Melbourne Station Pier</option>
                                        <option>Perth, Fremantle Cruise Ship Terminal</option>
                                        <option>Port Douglas</option>
                                        <option>Queensland, Shute Harbour</option>
                                        <option>River Heads, Port Fraser Island Barges</option>
                                        <option>Sydney, Circular Quay Harbour</option>
                                        <option>Sydney, Wharf 5 Barangaroo Harbour</option>
                                        <option>Sydney, White Bay Cruise Terminal</option>
                                    </optgroup>
                                    <optgroup label="Terminal">
                                        <option>Joondalup, Joondalup railway station</option>
                                        <option>Sydney, Central Railway Station</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="widget widget-submit-btn">
                            <button type="submit" class="submit-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9 daytrips-booking-contentarea">
                <div class="transfer-filter-listing-box">
                    <div class="row">
                        <div class="col-md-5 transfer-filter-img">
                            <div class="img-box">
                                <img src="{{asset('assets/images/transfer-filter-1.jpg')}}" alt="transfer">
                            </div>
                        </div>
                        <div class="col-md-7 transfer-filter-content">
                            <h2>Private Standard Bus</h2>
                            <p>Please be waiting at the hotel reception 10/15 minutes before your pick up time.</p>
                            <p>If you are not staying in a hotel (private residence, villa or hostel), please be outside 10/15 minutes before your pick up time</p>
                            <p>Identify yourself by showing your voucher to the Supplier, for whom we act as a booking agent.</p>
                            <p>Contact your supplier for assistance. Do not leave without having contacted your supplier on +34 937672836 first.</p>
                            <div class="bottom-book-btn d-flex align-items-center ">
                                <a href="{{route('transferBooking')}}">Book</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="transfer-filter-listing-box">
                    <div class="row">
                        <div class="col-md-5 transfer-filter-img">
                            <div class="img-box">
                                <img src="{{asset('assets/images/transfer-filter-2.jpg')}}" alt="transfer">
                            </div>
                        </div>
                        <div class="col-md-7 transfer-filter-content">
                            <h2>Private Standard Bus</h2>
                            <p>Please be waiting at the hotel reception 10/15 minutes before your pick up time.</p>
                            <p>If you are not staying in a hotel (private residence, villa or hostel), please be outside 10/15 minutes before your pick up time</p>
                            <p>Identify yourself by showing your voucher to the Supplier, for whom we act as a booking agent.</p>
                            <p>Contact your supplier for assistance. Do not leave without having contacted your supplier on +34 937672836 first.</p>
                            <div class="bottom-book-btn d-flex align-items-center ">
                                <a href="{{route('transferBooking')}}">Book</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="transfer-filter-listing-box">
                    <div class="row">
                        <div class="col-md-5 transfer-filter-img">
                            <div class="img-box">
                                <img src="{{asset('assets/images/transfer-filter-3.jpg')}}" alt="transfer">
                            </div>
                        </div>
                        <div class="col-md-7 transfer-filter-content">
                            <h2>Private Standard Bus</h2>
                            <p>Please be waiting at the hotel reception 10/15 minutes before your pick up time.</p>
                            <p>If you are not staying in a hotel (private residence, villa or hostel), please be outside 10/15 minutes before your pick up time</p>
                            <p>Identify yourself by showing your voucher to the Supplier, for whom we act as a booking agent.</p>
                            <p>Contact your supplier for assistance. Do not leave without having contacted your supplier on +34 937672836 first.</p>
                            <div class="bottom-book-btn d-flex align-items-center ">
                                <a href="{{route('transferBooking')}}">Book</a>
                                <p class="mb-0">Price $184</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="transfer-filter-listing-box">
                    <div class="row">
                        <div class="col-md-5 transfer-filter-img">
                            <div class="img-box">
                                <img src="{{asset('assets/images/transfer-filter-4.jpg')}}" alt="transfer">
                            </div>
                        </div>
                        <div class="col-md-7 transfer-filter-content">
                            <h2>Private Standard Bus</h2>
                            <p>Please be waiting at the hotel reception 10/15 minutes before your pick up time.</p>
                            <p>If you are not staying in a hotel (private residence, villa or hostel), please be outside 10/15 minutes before your pick up time</p>
                            <p>Identify yourself by showing your voucher to the Supplier, for whom we act as a booking agent.</p>
                            <p>Contact your supplier for assistance. Do not leave without having contacted your supplier on +34 937672836 first.</p>
                            <div class="bottom-book-btn d-flex align-items-center ">
                                <a href="{{route('transferBooking')}}">Book</a>
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
<script type="text/javascript">
    $(".mobile-view-widget-btn").on("click",function(){
        $(".daytrips-booking-sidebar .daytrips-booking-sidebar-inner").toggleClass("active");
    });

    $(".back-btn-close-filter").on("click",function(){
        $(".daytrips-booking-sidebar .daytrips-booking-sidebar-inner").removeClass("active");
    });

    $('input.timepicker').timepicker({
        timeFormat: 'HH:mm',
        minTime: '00:00',
        maxHour: '24',
        maxMinutes: '15',
        interval: 15,
        dropdown: true,
        scrollbar: true
    });

    if($(".nice-select").length) { 
        $(".nice-select").niceSelect();
    }

    if($("#pickupterminal").length) { 
        $('#pickupterminal').select2({
            placeholder: 'Select Destination',
            allowClear: true
        });
    }

    if($("#dropoffterminal").length) { 
        $('#dropoffterminal').select2({
            placeholder: 'Select Destination',
            allowClear: true
        });
    }

    function filter_contet_box_height() {
        var box_img_height = $(".transfer-filter-listing-box .transfer-filter-img .img-box img").height();
        $(".transfer-filter-listing-box .transfer-filter-content").css('max-height',box_img_height);
    }

    $( window ).on("resize",function() {
        filter_contet_box_height();
    })

    $( window ).on("load",function() {
        filter_contet_box_height();
    })
</script>
@endsection