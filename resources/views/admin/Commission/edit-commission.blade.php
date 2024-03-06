@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="commission-management-section user-management-inner">
        <div class="section-block-title">
            <h3>Edit Commission</h3>
        </div>
        <div class="commission-management-content">
            <form id="commission-form" action="{{route('commissionUpdate')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$commission->id}}">
                <div class="row">
                    <div class="col-sm-4 form-group">
                        <label>Product Category</label>
                        <select class="form-control nice-select" name="category_id" id="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}" {{$commission->category_id == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                            @endforeach
                        </select>
                        <p id="cat-error"></p>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Sub Category</label>
                        <select class="form-control nice-select">
                            <option>Select</option>
                            <option>Select</option>
                            <option>Select</option>
                        </select>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Commission Name</label>
                        <input type="text" class="form-control" name="commission_name" value="{{$commission->commission_name}}">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Travel Agents</label>
                        <select class="form-control nice-select" name="agent_id" id="agent_id" value="">
                            <option value="">Select</option>
                            @foreach($agents as $agent)
                                <option value="{{$agent->id}}" {{$commission->agent_id == $agent->id ? 'selected' : ''}}>{{$agent->first_name}} {{$agent->last_name}}</option>
                            @endforeach
                        </select>
                        <p id="agent-error"></p>
                    </div>
                    <div class="col-sm-4 form-group price-prifix-box">
                        <label>Commission Amount</label>
                        <div class="position-relative">
                            <input type="text" class="form-control input-card-fees" name="commission_amount" id="commission_amount" value="{{$commission->commission_type == 'amount' ? $commission->commission : ''}}">
                            <span class="price-prifix">$</span>
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Commission Percentage</label>
                        <input id="percentagecommission" type="text" class="form-control input-card-fees" name="commission_percentage" value="{{$commission->commission_type == 'percentage' ? $commission->commission : ''}}">
                    </div>
                    <div class="col-sm-4 form-group submit-btn">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $('.input-card-fees').keypress(function (e) {
        $("#percentagecommission").removeClass('error');
        $("#percentagecommission-error").remove();
        
        var txt = String.fromCharCode(e.which);
        if (!txt.match(/[0-9]/)) {
            return false;
        }
    });

    $(".nice-select").niceSelect();

    $("input#percentagecommission").on('input', function () {
        $("#commission_amount").removeClass('error');
        $("#commission_amount-error").remove();

        var numericValue = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(numericValue !== '' ? numericValue + '%' : '');
    });

    
    $(document).ready(function() {
        $('input[name=commission_percentage]').trigger('input');


        $("#commission-form").validate({
            ignore: [],
            rules:{
                category_id: {
                    required: true
                },
                commission_name: {
                    required: true
                },
                agent_id: {
                    required: true
                },
                commission_amount: {
                    required: function (element) {
                        return $("#percentagecommission").val() == undefined || $("#percentagecommission").val().length == 0;
                    }
                },
                commission_percentage: {
                    required: function (element) {
                        return $("#commission_amount").val() == undefined || $("#commission_amount").val().length == 0;
                    }
                },
            },
            messages:{
                category_id: {
                    required: "Category field is required."
                },
                commission_name: {
                    required: "Commission field is required."
                },
                agent_id: {
                    required: "Travel Agent field is required."
                },
                commission_amount: {
                    required: "Either Commission Amount or Commission Percentage is required."
                },
                commission_percentage: {
                    required: "Either Commission Amount or Commission Percentage is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    var fieldName = $(element).attr('name');
                    if(fieldName == 'category_id'){
                        element.next('.nice-select').next('#cat-error').html(error);
                    }else if(fieldName == 'agent_id'){
                        element.next('.nice-select').next('#agent-error').html(error);
                    }
                } else {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                }
            },
            submitHandler: function (form) {
                if ($("#percentagecommission").val().length !== 0 && $("#commission_amount").val().length !== 0) {
                    alert("Please fill only Commission Amount or Commission Percentage");
                    return false;
                }
                form.submit();
            }
        });
        $("#category_id").change(function () {
            if ($(this).val() !== "") {
                $("#category_id").removeClass('error');
                $("#category_id-error").remove();
            }
        });
        $("#agent_id").change(function () {
            if ($(this).val() !== "") {
                $("#agent_id").removeClass('error');
                $("#agent_id-error").remove();
            }
        });
    });
</script>
@endsection