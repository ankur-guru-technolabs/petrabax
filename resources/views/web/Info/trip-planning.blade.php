@extends('web.master')
@section('content')
<div class="trip-planing-section">
    <div class="container">
        <div class="section-header">
            <h2>Trip Planning</h2>
        </div>
        <div class="trip-paning-inner">
            <h3>General Information</h3>
            <ul class="row">
                <li class="col-md-4 col-6 trip-list-item">Boston, MA</li>
                <li class="col-md-4 col-6 trip-list-item">New Bedford, MA</li>
                <li class="col-md-4 col-6 trip-list-item">San Francisco, CA</li>
                <li class="col-md-4 col-6 trip-list-item">Boston, MA</li>
                <li class="col-md-4 col-6 trip-list-item">New Bedford, MA</li>
                <li class="col-md-4 col-6 trip-list-item">San Francisco, CA</li>
                <li class="col-md-4 col-6 trip-list-item">Boston, MA</li>
                <li class="col-md-4 col-6 trip-list-item">New Bedford, MA</li>
                <li class="col-md-4 col-6 trip-list-item">San Francisco, CA</li>
            </ul>
        </div>

        <div class="trip-paning-inner advisories-planing">
            <h3>Advisories</h3>
            <ul class="row">
                <li class="col-md-4 col-6 trip-list-item">U.S. Sate Department travel advisories</li>
                <li class="col-md-4 col-6 trip-list-item">U.S. Sate Department travel advisories</li>
                <li class="col-md-4 col-6 trip-list-item">U.S. Sate Department travel advisories</li>
            </ul>
        </div>

        <div class="trip-paning-inner conversions-planing">
            <h3>Conversions</h3>
            <ul class="row">
                <li class="col-md-4 col-6 trip-list-item">XE - Currency Converter</li>
                <li class="col-md-4 col-6 trip-list-item">Worldwide Electricity</li>
                <li class="col-md-4 col-6 trip-list-item">Metric Converter</li>
                <li class="col-md-4 col-6 trip-list-item">Time Worldwide</li>
            </ul>
        </div>

        <div class="trip-paning-inner distances-planing">
            <h3>Distances, Drive Times & Directions</h3>
            <ul class="row">
                <li class="col-md-4 col-6 trip-list-item">XE - Currency Converter</li>
                <li class="col-md-4 col-6 trip-list-item">Worldwide Electricity</li>
                <li class="col-md-4 col-6 trip-list-item">Metric Converter</li>
                <li class="col-md-4 col-6 trip-list-item">Time Worldwide</li>
            </ul>
        </div>

        <div class="trip-paning-inner transportation-planing">
            <h3>Transportation Schedules</h3>
            <div class="row">
                <div class="col-md-4 col-6 schedules-box">
                    <h4>SPAIN</h4>
                    <ul>
                        <li>Ferry - Trasmediterranea</li>
                        <li>Ferry - Balearia</li>
                    </ul>
                </div>

                <div class="col-md-4 col-6 schedules-box">
                    <h4>PORTUGAL</h4>
                    <ul>
                        <li>Rail - CP</li>
                    </ul>
                </div>
                <div class="col-md-4 col-6 schedules-box">
                    <h4>MOROCCO</h4>
                    <ul>
                        <li>Ferry - FRS Ferries</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="trip-paning-inner distances-planing">
            <h3>Weather Forecasts</h3>
            <ul class="row">
                <li class="col-md-4 col-6 trip-list-item">Spain</li>
                <li class="col-md-4 col-6 trip-list-item">Portugal</li>
                <li class="col-md-4 col-6 trip-list-item">Morocco</li>
                <li class="col-md-4 col-6 trip-list-item">Time Worldwide</li>
            </ul>
        </div>

    </div>
</div>
@endsection
