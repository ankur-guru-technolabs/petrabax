@extends('web.master')
@section('content')
<div class="trip-booking-details car-rental-details">
    <div class="container">
        <div class="details-boobking-title-block">
            <a href="{{route('carRentalFilter')}}"><i class="fa-solid fa-chevron-left"></i></a>
            <h2>Terms And Conditions</h2>
        </div>
        <div class="trip-booking-details-inner">
            <div class="booking-details-tab">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                        <div class="car-rental-terms-section">
                            <p><strong>1. Your rental from Europcar includes</strong><br>
                                Sales tax as of Booking Date: 20-Feb-2024. Liability Insurance for injuries or damages to persons or things outside the vehicle.<br>
                                Rental includes Collision Damage coverage . Rental limits potential vehicle damage liability to deductible of approximately EUR 1,170.00.<br>
                                Rental includes Theft Protection for the vehicle. Rental limits potential vehicle loss liability to deductible of approximately EUR 1,170.00.<br>
                                Credit Card Block: EUR 300.00 will be blocked on the client's credit card at time of pick u
                            </p>
                            <p><strong>2. Rental does not includes</strong><br>
                                Insurance coverage for personal injuries to driver or passengers. Optional coverage may be offered locally for an additional fee .<br>
                                Gasoline or Diesel. Client is advised to return the vehicle with a full fuel tank and to retain copies of gas receipts.<br>
                                Toll Management Device, if accepted, of EUR 2.16 per day (maximum charge of approximately EUR 21.60), plus the cost of tolls. If declined client is responsible for payment of any incurred tolls at designated pay spots.<br>
                                Local toll, highway fees or travel stickers which may be required by local authorities<br>
                                For pick ups at any location outside of the normal operating hours listed above, an out of hours fee of approximately EUR 30.75 will be charged (even if due to delayed flight).<br>
                                Traffic Violation fee of approximately EUR 37 per fine.<br>
                                Damage administration fee of approximately EUR 37 in the event of damage to the vehicle, in addition to the excess.<br>
                                Road Tax: EUR 1.85, per day, VAT included, paid locally.<br>
                                Airport Surcharge: Approximately EUR 30.75, VAT included, paid locally for pick up or drop off at an airport location (charged only once if both pick up and drop off is at the airport).
                            </p>
                            <p><strong>3.General Terms</strong><br>
                                Petrabax does not provide insurance . Coverage is provided by the rental company, as indicated. Additional coverage may be available for purchase from the rental company.<br>
                                Deliveries/Collections are available on a request basis only, for an additional fee.<br>
                                Debit cards are NOT accepted locally<br>
                                While you can use a debit card to pay for your reservation through Petrabax , cash deposits, Maestro, Switch, Visa Electron, pre-paid credit cards and debit cards are rarely accepted locally, so please be sure to check with our agents at time of reservation if you require this facility.<br>
                                Insurance does not provide coverage for damage to windows, tires, roof , underside or interior of the vehicle.<br>
                                Portuguese driver license holders and residents must provide their NIF (fiscal number) card or equivalent document at the time of pick up.<br>
                                Renter and any additional drivers must provide a full valid drivers license, held for a minimum of 2 years (some exceptions may apply). The correct name & current address must be on the driver's license. A valid passport must also be presented.<br>
                                Renters holding a non EU, US or Canadian license, must present an International Drivers license in addition to their home license.<br>
                                Optional equipment is on request for an additional fee paid locally.<br>
                                Applicable one way fees are estimates only & may change without notice.<br>
                                The rental invoice may only show the balance due on delivery. This assures that you will not pay unnecessary surcharges. Minimum driver age is 19.<br>
                                Travel is permitted into all continental Western European countreis except Gibraltar.<br>
                                Cars are not permitted to travel into Eastern Europe or any African country (i.e. Morocco, Algeria, Tunisia, etc.). Vehicles may not travel on ferries and/or to Island locations without pre-approval from Petrabax .<br>
                                Petrabax strongly advises client to check if car is DIESEL or REGULAR GASOLINE at pick up .<br>
                                Reservations may be extended without penalty by contacting Petrabax before the expiration of the rental period.<br>
                                There will be no refund if cancelled within 48 hours of the scheduled date and time of pickup.<br>
                                There will be no refund for any rental where client is a no show.<br>
                                There will be no refund for unused days.<br>
                                All rentals are based on 24 hour periods with a 1 day minimum rental, a full day is charged for any portion of a day that the vehicle is used.<br>
                                5, 6 & 7 day rentals constitute a weekly rate, any rental duration longer or shorter than 5-7 days is calculated on a daily basis.<br>
                                If paid by credit card, the local supplier may ask you to present the credit card used as payment to Petrabax for identification purposes. The last 4 digits of the credit card used as payment are shown above.<br>
                                If driving the vehicle into Germany, winter tires may be required. It is the responsibility of the client to check local laws and request equipment as necessary.<br>
                                When travel is permitted outside the renting country it is the responsibility of the renter to make sure their vehicle complies with the local laws of the country in which they are travelling, this includes but is not limited to safety equipment, cross border documents, toll stickers etc.<br>
                                Credit Cards Accepted Locally: American Express, Diners, Mastercard & Visa. Must be in the primary driver's name.<br>
                                Debit Cards: Not accepted
                            </p>
                            <p><strong>4.Hours of operation</strong><br>
                                OPEN Mondays-Sundays 08:30 AM-12:30 PM, 02:30 PM-06:30 PM
                            </p>
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
