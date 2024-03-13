@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="create-coupon-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Coupon</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="create-coupon-inner user-management-inner">
            <h3>Create Coupon</h3>
            <div class="coupon-form-content">
                <form id="coupon-form" action="{{route('couponSubmit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-top-filed">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Coupon Title</label>
                                <input type="text" class="form-control" name="title">
                                @if($errors->has('title'))
                                    <small class="text-danger">
                                        {{ $errors->first('title') }}
                                    </small>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Coupon Code</label>
                                <input type="text" class="form-control" name="code">
                                @if($errors->has('code'))
                                    <small class="text-danger">
                                        {{ $errors->first('code') }}
                                    </small>
                                @endif
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Category Selection</label>
                                <select class="form-control mySelect" name="category_id" id="category_id">
                                    <option value="">Select</option>
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                <p id="cat-error"></p>
                                @if($errors->has('category_id'))
                                    <small class="text-danger">
                                        {{ $errors->first('category_id') }}
                                    </small>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>User Type</label>
                                <select class="form-control mySelect" name="user_type" id="user_type">
                                    <option value="">Select</option>
                                    <option value="user">User</option>
                                    <option value="travel_agent">Travel agent</option>
                                    <option value="both">Both</option>
                                </select>
                                <p id="user-error"></p>
                                @if($errors->has('user_type'))
                                    <small class="text-danger">
                                        {{ $errors->first('user_type') }}
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="maximum-discount">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <label>Maximum Discount</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-filed-data">
                                    <div class="position-relative">
                                        <span class="price-prifix-discount">$</span>
                                        <input type="number" class="form-control spacing-left" name="max_discount">
                                        @if($errors->has('max_discount'))
                                            <small class="text-danger">
                                                {{ $errors->first('max_discount') }}
                                            </small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 discount-option-box">
                            <label>Discount</label>
                            <div class="custom-radio-btn">
                                <input type="radio" id="percentage" name="discount" value="percentage">
                                <label for="percentage" class="d-flex align-items-center">
                                    <!--<input type="text" class="form-control">-->
                                    <input class="form-control input-card-fees" type="text" min="0" max="99" onKeyUp="if(this.value>99){this.value='99';}else if(this.value<0){this.value='0';}" name="percentage_discount">
                                    <span>% off</span>
                                </label>
                            </div>
                            <div class="custom-radio-btn discount-option-box">
                                <input type="radio" id="price" name="discount" value="price">
                                <label for="price" class="d-flex align-items-center">
                                    <input type="number" class="form-control input-card-fees" name="price_discount">
                                    <span>Price off</span>
                                </label>
                            </div>
                            <p id="discount-error" style="margin-top: -15px"></p>
                        </div>
                        <div class="col-6">
                            <div class="form-filed-data">
                                <label>Start Date</label>
                                <div class="position-relative datepicker-icon-add">
                                    <input type="text" class="form-control" id="datepickerstart" placeholder="Select Date" name="start_date">
                                    @if($errors->has('start_date'))
                                        <small class="text-danger">
                                            {{ $errors->first('start_date') }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-filed-data">
                                <label>Expire Date</label>
                                <div class="position-relative datepicker-icon-add">
                                    <input type="text" class="form-control" id="datepickerend" placeholder="Select Date" name="end_date">
                                    @if($errors->has('end_date'))
                                        <small class="text-danger">
                                            {{ $errors->first('end_date') }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                            <p id="date-error"></p>
                        </div>
                    </div>
                    <div class="coupon-submit-btn text-center">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type="text/javascript">

    $(".nice-select").niceSelect();

    $('#coupon-list').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });

    var dateToday = new Date();    
    $("#datepickerstart").datepicker({ 
        minDate: dateToday,
        dateFormat: 'dd/mm/yy',
        showOn: 'button',
        buttonImageOnly: true, 
        buttonImage: '{{ asset('/assets_admin/images/datepicker.png')}}'
    });

    $("#datepickerend").datepicker({ 
        minDate: dateToday,
        dateFormat: 'dd/mm/yy',
        showOn: 'button',
        buttonImageOnly: true,
        buttonImage: '{{ asset('/assets_admin/images/datepicker.png')}}'
    });

    $('.input-card-fees').keypress(function (e) {
        var txt = String.fromCharCode(e.which);
        if (!txt.match(/[0-9]/)) {
            return false;
        }
    });

    $(document).ready(function() {
        $.validator.addMethod("discountOptionsFilled", function (value, element) {
            var selectedDiscountType = $('input[name="discount"]:checked').val();
            if (selectedDiscountType === "percentage") {
                return $('input[name="percentage_discount"]').val().trim() !== "";
            } else if (selectedDiscountType === "price") {
                return $('input[name="price_discount"]').val().trim() !== "";
            }
            return false;
        }, "Please chose any discount type.");
        $.validator.addMethod("greaterThanOrEqualToStart", function (value, element, param) {
            var start_date = $(param).val();
            if (!start_date) {
                return true;
            }
            var startDateParts = start_date.split('/');
            var endDateParts = value.split('/');
        
            var startDate = new Date(startDateParts[2], startDateParts[1] , startDateParts[0]);
            var endDate = new Date(endDateParts[2], endDateParts[1] , endDateParts[0]);
            return endDate >= startDate;
        }, "End date must be greater than or equal to the start date.");
        $("#coupon-form").validate({
            ignore: [],
            rules:{
                title: {
                    required: true
                },
                code: {
                    required: true
                },
                category_id: {
                    required: true
                },
                user_type: {
                    required: true
                },
                max_discount: {
                    required: true
                },
                percentage_discount: {
                    required: function(element) {
                        return $('input[name="discount"]:checked').val() === "percentage";
                    },
                    discountOptionsFilled: true
                },
                price_discount: {
                    required: function(element) {
                        return $('input[name="discount"]:checked').val() === "price";
                    },
                    discountOptionsFilled: true
                },
                start_date: {
                    required: true
                },
                end_date: {
                    required: true,
                    greaterThanOrEqualToStart: "#datepickerstart"
                }
            },
            messages:{
                title: {
                    required: "Name field is required."
                },
                code: {
                    required: "Coupon code field is required."
                },
                category_id: {
                    required: "Category field is required."
                },
                user_type: {
                    required: "User type field is required."
                },
                max_discount: {
                    required: "Max discount field is required."
                },
                percentage_discount: {
                    required: "Percentage or price discount filed with selected type required."
                },
                price_discount: {
                    required: "Percentage or price discount filed with selected type required."
                },
                start_date: {
                    required: "Start Date field is required."
                },
                end_date: {
                    required: "Expire Date field is required.",
                    greaterThanOrEqualToStart: "Expire Date must be greater than or equal to the start date."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                var fieldName = $(element).attr('name');
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    if (fieldName == 'category_id') {
                        element.next('.nice-select').next('#cat-error').html(error);
                    }
                    if (fieldName == 'user_type') {
                        element.next('.nice-select').next('#user-error').html(error);
                    }
                } else {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    if(fieldName == 'start_date' || fieldName == 'max_discount'){
                        element.closest('.form-control').after(error);
                    }else if(fieldName == 'end_date'){
                        $('#date-error').html(error);
                    }else if(fieldName == 'percentage_discount' || fieldName == 'price_discount'){
                        $('#discount-error').html(error);
                    }else{
                        element.closest('.form-group').append(error);
                    }
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("#category_id").change(function () {
            if ($(this).val() !== "") {
                $("#category_id").removeClass('error');
                $("#category_id-error").remove();
            }
        });

        $("#user_type").change(function () {
            if ($(this).val() !== "") {
                $("#user_type").removeClass('error');
                $("#user_type-error").remove();
            }
        });
    });
</script>
@endsection