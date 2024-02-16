@extends('web.master')
@section('content')
<div class="site-main-content">
    <div class="order-brochure-section">
        <div class="container">
            <div class="section-header">
                <h2>Order Brochure</h2>
            </div>
            <form id="order-brochure-form" action="{{route('orderBrochureSubmit')}}" method="post">
                @csrf
                <div class="row form-filed-list">
                    <div class="col-6 form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                    </div>
                    <div class="col-6 form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                    </div>
                    <div class="col-6 form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                    </div>

                    <div class="col-6 form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" name="city">
                    </div>
                    <div class="col-6 form-group">
                        <label>Suite(if applicable)</label>
                        <input type="text" class="form-control" placeholder="Suite" name="suite">
                    </div>
                    <div class="col-6 form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" name="country">
                    </div>
                    <div class="col-6 form-group">
                        <label>State(if applicable)</label>
                        <input type="text" class="form-control" placeholder="State" name="state">
                    </div>
                    <div class="col-6 form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="col-6 form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone_no">
                    </div>
                    <div class="col-6 form-group">
                        <label>Remark (Optional)</label>
                        <input type="text" class="form-control" placeholder="Remark"  name="remark">
                    </div>
                    <div class="col-6 form-group">
                        <label>Spain ,Portugal & Morocco (English Only) </label>
                        <select class="custom-select form-control nice-select"  name="english_count" id="english_count">
                            <option value="">0</option>
                            @for ($i = 1; $i < 11; $i++)
                                <option>{{$i}}</option>
                            @endfor
                        </select>
                        <p id="english-error"></p>
                    </div>
                    <div class="col-6 form-group">
                        <label>El Mundo En Espanol (Spanish Only) </label>
                        <select class="custom-select form-control nice-select-2"  name="spanish_count" id="spanish_count">
                            <option value="">0</option>
                            @for ($i = 1; $i < 11; $i++)
                                <option>{{$i}}</option>
                            @endfor
                        </select>
                        <p id="spanish-error"></p>
                    </div>
                    <div class="col-12 form-btn-submit text-center">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type = "text/javascript">
    $(".nice-select").niceSelect();
    $(document).ready(function() {
        $("#order-brochure-form").validate({
            ignore: [],
            rules:{
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                address: {
                    required: true
                },
                city: {
                    required: true
                },
                country: {
                    required: true
                },
                email: {
                    required: true
                },
                phone_no: {
                    required: true
                },
                english_count: {
                    required: function(element) {
                        return $("#spanish_count").val() == 0;
                    }
                },
                spanish_count: {
                    required: function (element) {
                        return $("#english_count").val() == 0;
                    }
                }
            },
            messages:{
                first_name:{
                    required: "First name field is required."
                },
                last_name: {
                    required: "Last name field is required."
                },
                address: {
                    required: "Address field is required."
                },
                city: {
                    required: "City field is required."
                },
                country: {
                    required: "Country field is required."
                },
                email: {
                    required: "Email field is required."
                },
                phone_no: {
                    required: "Phone field is required."
                },
                english_count: {
                    required: "English or Spanish field is required."
                },
                spanish_count: {
                    required: "Spanish or English field is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    var fieldName = $(element).attr('name');
                    if(fieldName == 'english_count'){
                        element.next('.nice-select').next('#english-error').html(error);
                    }
                    if(fieldName == 'spanish_count'){
                        element.next('.nice-select').next('#spanish-error').html(error);
                    }
                } else {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                }
            },
            submitHandler: function (form) {
                var englishCount = parseInt($("#english_count").val()) || 0;
                var spanishCount = parseInt($("#spanish_count").val()) || 0;
                
                if (englishCount > 0 && spanishCount > 0) {
                    var errors = {};
                    errors["english_count"] = "Only one selection is allowed.";
                    errors["spanish_count"] = "Only one selection is allowed.";
                    $("#order-brochure-form").validate().showErrors(errors);
                    return false;
                }

                form.submit();
            }
        });
        $("#english_count,#spanish_count").change(function () {
            if ($(this).val() !== "") {
                $("#english_count-error").empty(); 
                $("#spanish_count-error").empty(); 
            }
        });
    });
</script>
@endsection