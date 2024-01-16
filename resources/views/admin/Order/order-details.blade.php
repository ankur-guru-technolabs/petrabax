@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="order-detils">
        <div class="section-header">
            <h2>Orders</h2>
        </div>
        <div class="order-detils-inner">
            <div class="back-to-order-link">
                <a href="{{route('orderList')}}"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            <h3>Orders-details</h3>
            <form>
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Hotel Name</label>
                        <input type="text" class="form-control" value="Seventy Barcelona" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Booking Reference</label>
                        <input type="text" class="form-control" value="LACCVN" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" value="+ 61 875 7894 751" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Room Type</label>
                        <input type="text" class="form-control" value="Executive Suite" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Check-in</label>
                        <input type="text" class="form-control" value="20-5-2023" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Check-out</label>
                        <input type="text" class="form-control" value="25-5-2023" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Night</label>
                        <input type="text" class="form-control" value="4" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Rooms</label>
                        <input type="text" class="form-control" value="03" readonly>
                    </div>
                </div>


                <div class="order-transportation-amenities row">
                    <div class="col-md-6 order-transportation-box order-transportation">
                        <div class="order-transportation-box-inner">
                            <h4>Transportation</h4>
                            <div class="order-transportation-inner">
                                <label>Airline</label>
                                <div class="transporation-details d-flex align-items-center">
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="08:35 AM,20 Dec" readonly>
                                        <input type="text" class="form-control custom-form-control" value="Barra Airport" readonly>
                                    </div>
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="14hrs 18mins" readonly>
                                    </div>
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="10:20 PM,20 Dec" readonly>
                                        <input type="text" class="form-control custom-form-control" value="Barcelona Airport" readonly>
                                    </div>
                                </div>

                                <label>Taxi</label>
                                <div class="transporation-details d-flex align-items-center">
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="11:02 AM, 21 Dec" readonly>
                                        <input type="text" class="form-control custom-form-control" value="Place Name-1" readonly>
                                    </div>
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="1hrs 18mins" readonly>
                                    </div>
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="12:20 PM, 20 Dec" readonly>
                                        <input type="text" class="form-control custom-form-control" value="Place Name-2" readonly>
                                    </div>
                                </div>

                                <label>Train</label>
                                <div class="transporation-details d-flex align-items-center">
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="03:00 PM, 21 Dec" readonly>
                                        <input type="text" class="form-control custom-form-control" value="Place Name-1" readonly>
                                    </div>
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="1hrs 18mins" readonly>
                                    </div>
                                    <div class="transporation-details-box">
                                        <input type="text" class="form-control custom-form-control" value="06:20 PM, 20 Dec" readonly>
                                        <input type="text" class="form-control custom-form-control" value="Place Name-2" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-transportation-box order-amenities">
                        <div class="order-transportation-box-inner">
                            <h4>Room Details</h4>
                            <div class="order-transportation-inner">
                                <div class="order-plan-box">
                                    <label class="d-block">Executive King Room</label>
                                    <label>Amenities</label>

                                    <div class="order-amenities-content mb-3">
                                        <div class="row">
                                            <div class="col-sm-4 amenities-list">
                                                <input type="text" class="form-control custom-form-control" value="In-room Dining" readonly>
                                                <input type="text" class="form-control custom-form-control" value="Iron/Ironing Board" readonly>
                                                <input type="text" class="form-control custom-form-control" value="Smoking Room" readonly>
                                            </div>
                                            <div class="col-sm-4 amenities-list">
                                                <input type="text" class="form-control custom-form-control" value="Electric Kettle" readonly>
                                                <input type="text" class="form-control custom-form-control" value="Interconnected Room" readonly>
                                                <input type="text" class="form-control custom-form-control" value="Bathroom" readonly>
                                            </div>
                                            <div class="col-sm-4 amenities-list">
                                                <input type="text" class="form-control custom-form-control" value="Details for Breakfast" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <label>Others</label>
                                    <div class="order-amenities-content">
                                        <div class="row">
                                            <div class="col-sm-4 amenities-list">
                                                <input type="text" class="form-control custom-form-control" value="Mountain view" readonly>
                                            </div>
                                            <div class="col-sm-4 amenities-list">
                                                <input type="text" class="form-control custom-form-control" value="100sq.ft" readonly>
                                            </div>
                                            <div class="col-sm-4 amenities-list">
                                                <input type="text" class="form-control custom-form-control" value="Non-Refundable" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="mb-4">Guest details</h3>
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Guest first name</label>
                        <input type="text" class="form-control" value="Gaertner" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Guest last name</label>
                        <input type="text" class="form-control" value="Gaertner" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Guest Email</label>
                        <input type="text" class="form-control" value="Skylar@gmail.com" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Guest Phone number</label>
                        <input type="text" class="form-control" value="+31 875 8444 024" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $('#order').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });
</script>
@endsection