@extends('web.master')
@section('content') 
<div class="hero-section-two">
    <div class="container position-relative">
        <img src="{{asset('assets/images/transfer.jpg')}}" alt="transfer">
    </div>
</div>

<div class="transfer-filter-section transfer-filter-section-common hotel-filter-section-two">
    <div class="container">
        <form>
            <div class="filter-content filter-content-two row">
                <div class="filter-country-box transfer-filter-box col-md-3 col-6">
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
                <div class="filter-pickup-box transfer-filter-box col-md-3 col-6">
                    <div class="filter-grid-box m-0">
                        <label>Pick Up</label>
                        <select id="pickupdrp" class="form-control custom-nice-select custom-form-control" disabled>
                            <option value="">Please Select</option>
                            <option value="Accomodation">Accomodation</option>
                            <option value="Terminal">Terminal</option>
                        </select>
                    </div>
                </div>
                <div id="pickupvalue" class="filter-destination-box transfer-filter-box col-md-3 col-6 h-0 opacity-0">
                    <div class="filter-grid-box accomodation-selected m-0 d-none">
                        <label>Destination</label>
                        <select id="pickupdestination" class="custom-form-control selecttwodrp">
                            <option></option>
                            <option>Bariloche</option>
                            <option>Buenos Aires</option>
                            <option>Calafate</option>
                            <option>Caviahue</option>
                            <option>Chaco</option>
                            <option>Comodoro Rivadavia</option>
                            <option>Cordoba</option>
                            <option>Corrientes</option>
                            <option>Formosa</option>
                            <option>Iguazu</option>
                            <option>Jujuy</option>
                            <option>LA PAMPA</option>
                            <option>La Rioja</option>
                            <option>Mar del plata</option>
                            <option>Mendoza</option>
                            <option>Misiones</option>
                            <option>Neuquen</option>
                            <option>Parque Nacional Los Alerces - Chubut</option>
                            <option>Posadas</option>
                            <option>Puerto Madryn</option>
                            <option>Rosario</option>
                            <option>Salta</option>
                            <option>San Juan</option>
                            <option>San Lorenzo</option>
                            <option>San Luis</option>
                            <option>San Martin de los Andes</option>
                            <option>Santiago del Estero</option>
                            <option>Trenque Lauquen</option>
                            <option>Tucuman</option>
                            <option>Ushuaia</option>
                            <option>Viedma</option>
                            <option>Villa la Angostura</option>
                        </select>
                    </div>
                    <div class="filter-grid-box terminal-selected m-0 d-none">
                        <label>Terminal</label>
                        <select id="pickupterminal" class="custom-form-control selecttwodrp">
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
                <div class="filter-hotel-box pickupdestinationhotel transfer-filter-box col-md-3 col-6 h-0 opacity-0">
                    <div class="filter-grid-box m-0">
                        <label>Hotels</label>
                        <select id="pickupdestinationhotel" class="custom-form-control selecttwodrp">
                            <option></option>
                            <option>Accommodate Sa</option>
                            <option>Adabco Boutique Hotel</option>
                            <option>Adelaide Central YHA Hostel</option>
                            <option>Adelaide Inn</option>
                            <option>Adelaide Meridien Hotel and Apartments</option>
                            <option>Adelaide Motel Backpackers</option>
                            <option>Adelaide Paringa Hotel</option>
                            <option>Adelaide Road Motor Lodge</option>
                            <option>Adelaide Rockford</option>
                            <option>Adelaide Royal Coach</option>
                            <option>Adelaide Travellers Inn Backpackers</option>
                        </select>
                    </div>
                </div>
                <div class="filter-date-box transfer-filter-box col-md-3 col-6">
                    <div class="filter-grid-box">
                        <label>Date</label>
                        <input type="text" name="daterange" id="activedate" class=" form-control custom-form-control" placeholder="Select" required />
                    </div>
                </div>
                <div class="filter-dropoff-box transfer-filter-box col-md-3 col-6">
                    <div class="filter-grid-box m-b0">
                        <label>Drop Off</label>
                        <select id="dropoffdrp" class="form-control custom-nice-select custom-form-control" disabled>
                            <option value="">Please Select</option>
                            <option value="Accomodation">Accomodation</option>
                            <option value="Terminal">Terminal</option>
                        </select>
                    </div>
                </div>

                <div id="dropoffvalue" class="filter-country-box transfer-filter-box col-md-3 col-6 h-0 opacity-0">
                    <div class="filter-grid-box dropoffdrp-destination m-0 d-none">
                        <label>Destination</label>
                        <select id="dropoffdestination" class="custom-form-control selecttwodrp">
                            <option></option>
                            <option>Bariloche</option>
                            <option>Buenos Aires</option>
                            <option>Calafate</option>
                            <option>Caviahue</option>
                            <option>Chaco</option>
                            <option>Comodoro Rivadavia</option>
                            <option>Cordoba</option>
                            <option>Corrientes</option>
                            <option>Formosa</option>
                            <option>Iguazu</option>
                            <option>Jujuy</option>
                            <option>LA PAMPA</option>
                            <option>La Rioja</option>
                            <option>Mar del plata</option>
                            <option>Mendoza</option>
                            <option>Misiones</option>
                            <option>Neuquen</option>
                            <option>Parque Nacional Los Alerces - Chubut</option>
                            <option>Posadas</option>
                            <option>Puerto Madryn</option>
                            <option>Rosario</option>
                            <option>Salta</option>
                            <option>San Juan</option>
                            <option>San Lorenzo</option>
                            <option>San Luis</option>
                            <option>San Martin de los Andes</option>
                            <option>Santiago del Estero</option>
                            <option>Trenque Lauquen</option>
                            <option>Tucuman</option>
                            <option>Ushuaia</option>
                            <option>Viedma</option>
                            <option>Villa la Angostura</option>
                        </select>
                    </div>
                    <div class="filter-grid-box dropoffdrp-terminal m-0 d-none">
                        <label>Terminal</label>
                        <select id="dropoffterminal" class="custom-form-control selecttwodrp">
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
                <div class="filter-hotel-box dropoffdestinationhotel transfer-filter-box col-md-3 col-6 h-0 opacity-0">
                    <div class="filter-grid-box m-0">
                        <label>Hotels</label>
                        <select id="dropoffdestinationhotel" class="custom-form-control selecttwodrp">
                            <option></option>
                            <option>Accommodate Sa</option>
                            <option>Adabco Boutique Hotel</option>
                            <option>Adelaide Central YHA Hostel</option>
                            <option>Adelaide Inn</option>
                            <option>Adelaide Meridien Hotel and Apartments</option>
                            <option>Adelaide Motel Backpackers</option>
                            <option>Adelaide Paringa Hotel</option>
                            <option>Adelaide Road Motor Lodge</option>
                            <option>Adelaide Rockford</option>
                            <option>Adelaide Royal Coach</option>
                            <option>Adelaide Travellers Inn Backpackers</option>
                        </select>
                    </div>
                </div>
                <div class="filter-country-box transfer-filter-box col-md-3 col-6">
                    <div class="filter-grid-box mb-0">
                        <label>Time</label>
                        <input type="text" class="timepicker form-control custom-form-control" placeholder="Please Select">
                    </div>
                </div>
                <div class="filter-traveller-box transfer-filter-box col-md-3 col-6">
                    <div class="filter-grid-box filter-room-guest position-relative mb-0">
                        <label>Travelers</label>
                        <p id="roomguest" class="mb-0 text-center"><span class="default-text">Select</span><span id="adultscount"></span><span id="childcount"></span></p>
                        <div id="room-select-dropdown" class="dropdown-menu room-select-dropdown">
                            <div class="dropdown-inner">
                                <div id="room-total-inner-dropdown-1" class="room-total-inner-dropdown room-total-inner-dropdown-1 active">
                                    <div class="room-block dropdown-block">
                                        <div class="d-flex align-items-center">
                                            <div class="left-label-text">
                                                <label>Adults</label>
                                            </div>
                                            <div class="wrap right-qnt-select">
                                                <div class="qnt-box">
                                                    <button type="button" class="sub travelers-adults-sub"><i class="fa fa-minus"></i></button>
                                                    <input class="count adults-count-1 travelers-adults-count" type="text" value="0" min="1" max="100" />
                                                    <button type="button" class="add travelers-adults-add"><i class="fa fa-plus"></i></button>
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
                                                    <button type="button" class=" travelers-children-sub"><i class="fa fa-minus"></i></button>
                                                    <input class="count travelers-childerns-count" type="text" value="0" min="0" max="100" />
                                                    <button type="button" class=" travelers-children-add"><i class="fa fa-plus"></i></button>
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

                                            <div class="ps-0 left-child-box children-box children-box-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 5</label>
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
                                            <div class="right-child-box children-box children-box-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 6</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-7">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 7</label>
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
                                            <div class="right-child-box children-box children-box-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 8</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-9">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 9</label>
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
                                            <div class="right-child-box children-box children-box-10">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 10</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-11">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 11</label>
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
                                            <div class="right-child-box children-box children-box-12">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 12</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-13">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 13</label>
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
                                            <div class="right-child-box children-box children-box-14">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 14</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 15</label>
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
                                            <div class="right-child-box children-box children-box-16">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 16</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-17">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 17</label>
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
                                            <div class="right-child-box children-box children-box-18">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 18</label>
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

                                            <div class="ps-0 left-child-box children-box children-box-19">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 19</label>
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
                                            <div class="right-child-box children-box children-box-20">
                                                <div class="d-flex align-items-center">
                                                    <div class="left-child-lable">
                                                        <label>Child - 20</label>
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
                </div>
                <div class="filter-search-box transfer-filter-box col-md-3 col-6">
                    <div class="filter-grid-box filter-search-btn w-100 mb-0">
                        <a href="{{route('transferTerminal')}}" class="text-center">
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
                        <img src="{{asset('assets/images/paradores-1.jpg')}}" alt="Featured">
                    </div>
                    <div class="hotel-content">
                        <h2>Granada</h2>
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
                        <img src="{{asset('assets/images/paradores-2.jpg')}}" alt="Featured">
                    </div>
                    <div class="hotel-content">
                        <h2>Lisbon</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/paradores-3.jpg')}}" alt="Featured">
                    </div>
                    <div class="hotel-content">
                        <h2>Paris</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/paradores-4.jpg')}}" alt="Featured">
                    </div>
                    <div class="hotel-content">
                        <h2>Barcelona</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/paradores-5.jpg')}}" alt="Featured">
                    </div>
                    <div class="hotel-content">
                        <h2>Seville</h2>
                        <p>Located in the heart of Gran Vía in Madrid, This trendy hotel is 3-minute walk from Gran Via subway station,Its originality will surprise you and can be perceived as soon ...</p>
                    </div>
                    <div class="book-btn">
                        <a href="#" title="book now">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 hotel-box featured-hotels-box featured-destinations-box">
                <div class="hotel-box-inner">
                    <div class="hotel-img">
                        <img src="{{asset('assets/images/paradores-6.jpg')}}" alt="Featured">
                    </div>
                    <div class="hotel-content">
                        <h2>Madrid</h2>
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
<script type="text/javascript">
    if($("#selectcountry").length) { 
        $('#selectcountry').select2({
          placeholder: 'Select Country',
        });
    }

    if($("#pickupdestination").length) { 
        $('#pickupdestination').select2({
          placeholder: 'Select Destination',
        });
    }

    if($("#pickupterminal").length) { 
        $('#pickupterminal').select2({
          placeholder: 'Select Destination',
        });
    }

    if($("#pickupdestinationhotel").length) { 
        $('#pickupdestinationhotel').select2({
          placeholder: 'Select Hotel',
        });
    }

    if($("#dropoffdestination").length) { 
        $('#dropoffdestination').select2({
          placeholder: 'Select Destination',
        });
    }

    if($("#dropoffterminal").length) { 
        $('#dropoffterminal').select2({
          placeholder: 'Select Destination',
        });
    }

    if($("#dropoffdestinationhotel").length) { 
        $('#dropoffdestinationhotel').select2({
          placeholder: 'Select Hotel',
        });
    }

    if($(".custom-nice-select").length) { 
        $(".custom-nice-select").niceSelect();
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

    $("#pickupdestination").on("change",function() {
        if($("#pickupdestination").val() != "" && $("#pickupdrp").val() != "") {
            $('.pickupdestinationhotel').removeClass('opacity-0 h-0');
        }
        else {
            $('.pickupdestinationhotel').addClass('opacity-0 h-0');
        }
    })

    $("#dropoffdestination").on("change",function() {
        if($("#dropoffdestination").val() != "" && $("#dropoffdrp").val() != "" ) {
            $('.dropoffdestinationhotel').removeClass('opacity-0 h-0');
        }
        else {
            $('.dropoffdestinationhotel').addClass('opacity-0 h-0');
        }
    })
    
    $("#pickupdrp").on("change",function() {

        if($("#selectcountry").val() != "" ) {
            if ($(this).val() == "Accomodation")  {
                $('.custom-nice-select').removeClass('disabled');
                $('.custom-nice-select').removeAttr('disabled','false');
                $("#pickupvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
                $(".terminal-selected").removeClass('d-block').addClass('d-none');
                $(".accomodation-selected").removeClass('d-none').addClass('d-block');
            }
            else if ($(this).val() == "Terminal") {
                $('.custom-nice-select').removeClass('disabled');
                $('.custom-nice-select').removeAttr('disabled','false');
                $("#pickupvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
                $(".accomodation-selected").removeClass('d-block').addClass('d-none');
                $(".terminal-selected").removeClass('d-none').addClass('d-block');
            }
            else {
                $("#pickupvalue").removeClass('opacity-1').addClass('opacity-0 h-0');
                $(".accomodation-selected").removeClass('d-block').addClass('d-none');
                $(".terminal-selected").removeClass('d-block').addClass('d-none');
            }
        }
    })

    $("#dropoffdrp").on("change",function() {
        if($("#selectcountry").val() != "" ) {
          if ($(this).val() == "Accomodation")  {
            $('.custom-nice-select').removeClass('disabled');
            $('.custom-nice-select').removeAttr('disabled','false');
            $("#dropoffvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
            $(".dropoffdrp-terminal").removeClass('d-block').addClass('d-none');
            $(".dropoffdrp-destination").removeClass('d-none').addClass('d-block');
          }
          else if ($(this).val() == "Terminal") {
            $('.custom-nice-select').removeClass('disabled');
            $('.custom-nice-select').removeAttr('disabled','false');
            $("#dropoffvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
            $(".dropoffdrp-destination").removeClass('d-block').addClass('d-none');
            $(".dropoffdrp-terminal").removeClass('d-none').addClass('d-block');
          }
          else {
            $("#dropoffvalue").removeClass('opacity-1 h-0').addClass('opacity-0 h-0');
            $(".dropoffdrp-destination").removeClass('d-block').addClass('d-none');
            $(".dropoffdrp-terminal").removeClass('d-block').addClass('d-none');
          }
        }
    })

    if($("#pickupdrp").val() == "Accomodation" && $("#pickupdestination").val() != '') {
        $(".pickupdestinationhotel").removeClass('opacity-0 h-0');
    }
    else {
         $(".pickupdestinationhotel").addClass('opacity-0 h-0');
    }

    if($("#dropoffdrp").val() == "Accomodation" && $("#dropoffdestination").val() != '') {
        $(".dropoffdestinationhotel").removeClass('opacity-0 h-0');
    }
    else {
        $(".dropoffdestinationhotel").addClass('opacity-0 h-0');
    }

    $("#selectcountry").on("change",function() {
        if ($(this).val() != "") {
            $('.custom-nice-select').removeClass('disabled');
            $('.custom-nice-select').removeAttr('disabled','false');
            $('#pickupdrp').val('');
            $('#pickupdrp').niceSelect('update');

            $('#dropoffdrp').val('');
            $('#dropoffdrp').niceSelect('update');

            $("#pickupdestination").select2("val", "0");
            $("#pickupdestinationhotel").select2("val", "0");
            $("#pickupterminal").select2("val", "0");

            $("#dropoffterminal").select2("val", "0");
            $("#dropoffdestination").select2("val", "0");
            $("#dropoffdestinationhotel").select2("val", "0");

            if($("#pickupdrp").val() == "Accomodation") {
                $("#pickupvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
            }
            else if($("#pickupdrp").val() == "Terminal") {
                $("#pickupvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
            }
            else {
                $("#pickupvalue").removeClass('opacity-1').addClass('opacity-0 h-0');
            }

            if($("#dropoffdrp").val() == "Accomodation") {
                $("#dropoffvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
            }
            else if($("#dropoffdrp").val() == "Terminal") {
                $("#dropoffvalue").removeClass('opacity-0 h-0').addClass('opacity-1');
            }
            else {
                $("#dropoffvalue").removeClass('opacity-1').addClass('opacity-0 h-0');
            }
        }
        else {
          $('.custom-nice-select').addClass('disabled');
          /* Pick Up Related */
          $('#pickupdrp').val('');
          $('#pickupdrp').niceSelect('update');
          $("#pickupvalue").removeClass('opacity-1').addClass('opacity-0');
          $(".accomodation-selected").removeClass('d-block').addClass('d-none');
          $(".terminal-selected").removeClass('d-block').addClass('d-none');

          /* Drop Off Related */
          $('#dropoffdrp').val('');
          $('#dropoffdrp').niceSelect('update');
          $("#dropoffvalue").removeClass('opacity-1').addClass('opacity-0');
          $(".dropoffdrp-destination").removeClass('d-block').addClass('d-none');
          $(".dropoffdrp-terminal").removeClass('d-block').addClass('d-none');
          $(".dropoffdestinationhotel").removeClass('opacity-1').addClass('opacity-0 h-0');
        }
    })
</script>
@endsection