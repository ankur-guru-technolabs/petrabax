@extends('web.master')
@section('content') 
<div class="hero-section-two">
    <div class="container position-relative">
        <img src="{{asset('assets/images/car-rental.jpg')}}" alt="Car">
    </div>
</div>

<div class="transfer-filter-section transfer-filter-section-common hotel-filter-section-two hotel-filter-section-three">
    <div class="container">
        <form>
            <div class="filter-content filter-content-two row">
                <div class="filter-country-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box m-0">
                        <label>Country</label>
                        <select id="selectcountry" class="form-control custom-form-control selecttwodrp">
                            <option value="" selected="selected"></option>
                            <option disabled>------- Please select -------</option>
                            <option>Spain</option>
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
                <div class="filter-city-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box m-0">
                        <label>Pick Up City</label>
                        <select id="pickupcity" class="form-control custom-form-control selecttwodrp">
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
                <div class="filter-location-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box m-0">
                        <label>Pick Up Location</label>
                        <select id="pickuplocation" class="form-control custom-form-control selecttwodrp">
                            <option value="" selected="selected"></option>
                            <option disabled>------- Please select -------</option>
                            <option>Select</option>
                            <option>Select</option>
                            <option>Select</option>
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="filter-date-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box">
                        <label>Pick Up Date</label>
                        <input type="text" id="pickupdate" class="form-control custom-form-control" placeholder="Select" />
                    </div>
                </div>
                <div class="filter-time-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box mb-0">
                        <label>Time</label>
                        <input type="text" class="timepicker form-control custom-form-control" placeholder="Select">
                    </div>
                </div>

                <div class="filter-date-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box">
                        <label>Drop Off Date</label>
                        <input type="text" id="dropoffdate" class="form-control custom-form-control" placeholder="Select" />
                    </div>
                </div>
                <div class="filter-time-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box mb-0">
                        <label>Time</label>
                        <input type="text" class="timepicker form-control custom-form-control" placeholder="Select">
                    </div>
                </div>

                <div class="filter-search-box transfer-filter-box col-lg-3 col-6">
                    <div class="filter-grid-box filter-search-btn w-100 mb-0">
                        <a href="{{route('carRentalFilter')}}" class="text-center">
                            <label class="text-white d-block">Search</label>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </div>
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
            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/car-rental-1.jpg')}}" alt="Car Renatl">
                    </div>
                    <div class="hotel-content">
                        <h2>Madrid</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="javascript:void(0);" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/car-rental-2.jpg')}}" alt="Car Renatl">
                    </div>
                    <div class="hotel-content">
                        <h2>Barcelona</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="javascript:void(0);" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/car-rental-3.jpg')}}" alt="Car Renatl">
                    </div>
                    <div class="hotel-content">
                        <h2>Porto</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="javascript:void(0);" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/car-rental-4.jpg')}}" alt="Car Renatl">
                    </div>
                    <div class="hotel-content">
                        <h2>Malaga</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="javascript:void(0);" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/car-rental-5.jpg')}}" alt="Car Renatl">
                    </div>
                    <div class="hotel-content">
                        <h2>Porto</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="javascript:void(0);" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/car-rental-6.jpg')}}" alt="Car Renatl">
                    </div>
                    <div class="hotel-content">
                        <h2>Madrid</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="javascript:void(0);" title="book now">Book Now</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
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

    if($("#selectcountry").val() == '') {
        $("#dropoffdate").attr('disabled','true');
        $("#pickupdate").attr('disabled','true');
        $('.timepicker').attr('disabled','true');
        $('#pickupcity').attr('disabled','true');
        $('#pickuplocation').attr('disabled','true');
    }

    $("#selectcountry").on("change",function() {
        if ($(this).val() != "") {
            $("#dropoffdate").removeAttr('disabled','true');
            $("#pickupdate").removeAttr('disabled','true');
            $('.timepicker').removeAttr('disabled','false');
            $('#pickupcity').removeAttr('disabled','false');
            $('#pickuplocation').removeAttr('disabled','false');
        }
        else {
            $("#dropoffdate").attr('disabled','true');
            $("#pickupdate").attr('disabled','true');
            $('.timepicker').attr('disabled','true');
            $('#pickupcity').attr('disabled','true');
            $('#pickuplocation').attr('disabled','true');
        }
    })

    if($("#selectcountry").val() == '') {
        $("#dropoffdate").attr('disabled','true');
        $("#pickupdate").attr('disabled','true');
        $('.timepicker').attr('disabled','true');
        $('#pickupcity').attr('disabled','true');
        $('#pickuplocation').attr('disabled','true');
    }
      
    $("#selectcountry").on("change",function() {
        if ($(this).val() != "") {
          $("#dropoffdate").removeAttr('disabled','true');
          $("#pickupdate").removeAttr('disabled','true');
          $('.timepicker').removeAttr('disabled','false');
          $('#pickupcity').removeAttr('disabled','false');
          $('#pickuplocation').removeAttr('disabled','false');
        }
        else {
          $("#dropoffdate").attr('disabled','true');
          $("#pickupdate").attr('disabled','true');
          $('.timepicker').attr('disabled','true');
          $('#pickupcity').attr('disabled','true');
          $('#pickuplocation').attr('disabled','true');
        }
    })
</script>
@endsection