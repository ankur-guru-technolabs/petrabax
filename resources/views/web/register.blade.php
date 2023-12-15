@extends('web.master')
@section('content')
<div class="registration-block">
    <div class="container">
        <div class="section-header-two  text-center">
            <h2>Registration</h2>
        </div>
        <div class="row justify-content-center travel-agents-registration">
            <div class="col-md-10">
                <div class="register-link-block position-relative">
                    <a href="{{route('registerTravelAgent')}}" title="Travel Agents">
                        <div class="block-image">
                            <img src="{{ asset('/assets/images/travel-agents.jpg')}}" alt="Travel Agents">
                        </div>
                        <div class="link-title">
                            Travel Agents
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="register-link-block position-relative">
                    <a href="{{route('registerRegularUser')}}" title="Regular User">
                        <div class="block-image">
                            <img src="{{ asset('/assets/images/regular-user.jpg')}}" alt="Regular User">
                        </div>
                        <div class="link-title">
                            Regular User
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection