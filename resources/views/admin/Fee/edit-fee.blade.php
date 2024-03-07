@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="section-header d-flex align-items-center">
        <h2 class="mb-0">Agent fees management</h2>
        @include('admin.Common.admin-profile-menu')
    </div>
    <div class="user-management-inner agent-addfee">
        <div class="section-block-title">
            <h3>Edit Fees</h3>
        </div>
        <div class="commission-management-content1">
            <form id="commission-form" action="{{route('feeUpdate')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$fee->id}}">
                <div class="row">
                    <div class="col-sm-3 form-group">
                        <label>Agent list</label>
                        <select class="form-control mySelect" name="agent_id" id="agent_id">
                            <option value="">Select Agent</option>
                            @foreach($agents as $agent)
                                <option value="{{$agent->id}}" {{$fee->agent_id == $agent->id ? 'selected' : ''}}>{{$agent->first_name}} {{$agent->last_name}}</option>
                            @endforeach
                        </select>
                        <p id="agent-error"></p>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Amount</label>
                        <div class="position-relative form-control-prifix">
                            <input type="number" class="form-control input-card-fees" name="amount" value="{{$fee->amount}}">
                            <span class="price-prifix">$</span>
                        </div>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Percentage</label>
                        <input type="text" id="percentage" class="form-control input-card-fees" name="percentage" value="{{$fee->percentage}}">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Card Fees</label>
                        <div class="position-relative">
                            <input id="percentagecardfee" class="form-control input-card-fees" type="text" name="card_fees" value="{{$fee->card_fees}}">
                        </div>
                    </div>
                </div>
                <div class="group-btn text-center">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">

    $("input#percentage").on('input', function() {
        var numericValue = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(numericValue !== '' ? numericValue + '%' : '');
    });

    $("input#percentagecardfee").on('input', function() {
        var numericValue = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(numericValue !== '' ? numericValue + '%' : '');
    });


    $('#regularuser').DataTable({
        responsive: true,
        "language": {
            "searchPlaceholder": "Search..",
            "search": ""
        }
    });

    $('.input-card-fees').keypress(function (e) {
        var txt = String.fromCharCode(e.which);
        if (!txt.match(/[0-9]/)) {
            return false;
        }
    });

    if($(".nice-select").length) {
        $(".nice-select").niceSelect();
    }

    $(document).ready(function() {
        $('input#percentage').trigger('input');
        $('input#percentagecardfee').trigger('input');

        $("#commission-form").validate({
            ignore: [],
            rules:{
                agent_id: {
                    required: true
                },
                amount: {
                    required: true
                },
                percentage: {
                    required: true
                },
                card_fees: {
                    required: true
                },
            },
            messages:{
                agent_id: {
                    required: "Agent field is required."
                },
                amount: {
                    required: "Amount field is required."
                },
                percentage: {
                    required: "Percentage field is required."
                },
                card_fees: {
                    required: "Card fees is required."
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    var fieldName = $(element).attr('name');
                    if(fieldName == 'agent_id'){
                        element.next('.nice-select').next('#agent-error').html(error);
                    }
                } else {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                }
            },
            submitHandler: function (form) {
                form.submit();
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