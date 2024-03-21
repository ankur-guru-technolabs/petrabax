@extends('web.master')
@section('content') 
<div class="trip-booking-details car-rental-details">
    <div class="container">

        <div class="details-boobking-title-block">
            <a href="{{route('carRentalFilter')}}"><i class="fa-solid fa-chevron-left"></i></a>
            <h2>More Details</h2>
        </div>

        <div class="trip-booking-details-inner">
            <div class="booking-details-tab">
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                        <div class="accordion car-rental-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1" aria-expanded="true" aria-controls="accordion-1">
                                    Location information
                                    </button>
                                </h2>
                                <div id="accordion-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-2" aria-expanded="false" aria-controls="accordion-2">
                                    Insurance (CDW)
                                    </button>
                                </h2>
                                <div id="accordion-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-3" aria-expanded="false" aria-controls="accordion-3">
                                    Insurance (Theft)
                                    </button>
                                </h2>
                                <div id="accordion-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-4" aria-expanded="false" aria-controls="accordion-4">
                                    Insurance (PAI)
                                    </button>
                                </h2>
                                <div id="accordion-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-5" aria-expanded="false" aria-controls="accordion-5">
                                    Insurance (Liability)
                                    </button>
                                </h2>
                                <div id="accordion-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-6" aria-expanded="false" aria-controls="accordion-6">
                                    Insurance (Fire)
                                    </button>
                                </h2>
                                <div id="accordion-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-7" aria-expanded="false" aria-controls="accordion-7">
                                    Age requirements
                                    </button>
                                </h2>
                                <div id="accordion-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-8" aria-expanded="false" aria-controls="accordion-8">
                                    Payment info and CC blocking info
                                    </button>
                                </h2>
                                <div id="accordion-8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-9" aria-expanded="false" aria-controls="accordion-9">
                                    Local fees
                                    </button>
                                </h2>
                                <div id="accordion-9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-10" aria-expanded="false" aria-controls="accordion-10">
                                        Equipment
                                    </button>
                                </h2>
                                <div id="accordion-10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-11" aria-expanded="false" aria-controls="accordion-11">
                                        International one-ways
                                    </button>
                                </h2>
                                <div id="accordion-11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-111" aria-expanded="false" aria-controls="accordion-111">
                                        Domestic one-ways
                                    </button>
                                </h2>
                                <div id="accordion-111" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-12" aria-expanded="false" aria-controls="accordion-12">
                                        Travel to other countries
                                    </button>
                                </h2>
                                <div id="accordion-12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-13" aria-expanded="false" aria-controls="accordion-13">
                                        Delivery/collection info
                                    </button>
                                </h2>
                                <div id="accordion-13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-14" aria-expanded="false" aria-controls="accordion-14">
                                        Driver's license requirements
                                    </button>
                                </h2>
                                <div id="accordion-14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-15" aria-expanded="false" aria-controls="accordion-15">
                                        Cancellation policy
                                    </button>
                                </h2>
                                <div id="accordion-15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-16" aria-expanded="false" aria-controls="accordion-16">
                                        Very important operator info
                                    </button>
                                </h2>
                                <div id="accordion-16" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-17" aria-expanded="false" aria-controls="accordion-17">
                                        Very important vehicle information
                                    </button>
                                </h2>
                                <div id="accordion-17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-18" aria-expanded="false" aria-controls="accordion-18">
                                        Very important location information
                                    </button>
                                </h2>
                                <div id="accordion-18" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-19" aria-expanded="false" aria-controls="accordion-19">
                                        Driver's license requirements
                                    </button>
                                </h2>
                                <div id="accordion-19" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-20" aria-expanded="false" aria-controls="accordion-20">
                                        Need address information
                                    </button>
                                </h2>
                                <div id="accordion-20" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-21" aria-expanded="false" aria-controls="accordion-21">
                                        Refueling charges
                                    </button>
                                </h2>
                                <div id="accordion-21" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4 car-location-box">
                                                <h5>Drop box info:</h5>
                                                <p>After Hours Drop Box: Not available.</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Roadside assist phone number:</h5>
                                                <p>Roadside Assistance: 351 21 383 5527</p>
                                            </div>
                                            <div class="col-md-4 car-location-box">
                                                <h5>Out of Hours pickup info:</h5>
                                                <p>Out Of Hour Fee:</p>
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
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">

</script>
@endsection