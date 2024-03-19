<div class="top-menu-box">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-4 left-logo-block">
            <a href="{{route('/')}}" class="site-logo image-logo"><img src="{{asset('/assets/images/logo.png')}}" alt="Site Logo"></a>
        </div>
        <div class="col-8 right-signup-btn">
            @if(Auth::guest() || Auth::user()->type == 'admin')
            <a href="{{route('register')}}" class="site-login-btn signup-btn">Sign Up</a>
            <a href="{{route('login')}}" class="site-login-btn login-btn">Login</a>
            @endif
                <button class="navbar-toggler site-menu-switch  d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
        </button>
        </div>
        </div>
    </div>  
</div>
<nav class="navbar navbar-expand-lg sitemain-menu">
    <div class="container">
        <a class="navbar-brand mobile-menu d-none" href="{{route('/')}}">Petrabax</a>
        @php
            $activeRoutes = [
                'home' => request()->routeIs('/'),
                'hotel' => request()->routeIs('hotels') || request()->routeIs('hotelsList') || request()->routeIs('hotelDetails') || request()->routeIs('paradores'),
                'dayTripBooking' => request()->routeIs('dayTripActivities') || request()->routeIs('dayTripBookingFilter'),
                'train' => request()->routeIs('support'),
                'tour' => request()->routeIs('support'),
                'car' => request()->routeIs('support'),
                'road' => request()->routeIs('support'),
                'spanish' => request()->routeIs('support'),
                'cart' => request()->routeIs('cart'),
            ];
        @endphp
        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['home'] ? 'active' : '' }}" href="{{route('/')}}">Home
                        <img src="{{ asset('assets/images/menu-icon/home.png')}}" alt="Home">
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $activeRoutes['hotel'] ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hotel
                        <img src="{{ asset('assets/images/menu-icon/hotel.png')}}" alt="Hotel">
                        <i class="fa-solid fa-chevron-down d-lg-none"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active" href="{{route('hotels')}}">Hotels</a></li>
                        <li><a class="dropdown-item" href="{{route('paradores')}}">Paradores of Spain</a></li>
                        <li><a class="dropdown-item" href="{{route('paradores')}}">Pousadas of Portugal</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $activeRoutes['dayTripBooking'] ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transfers & Day Trips
                        <img src="{{ asset('assets/images/menu-icon/transfers.png')}}" alt="Transfers">
                        <i class="fa-solid fa-chevron-down d-lg-none"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active" href="{{route('dayTripActivities')}}">Day Trips & Activities</a></li>
                        <li><a class="dropdown-item" href="{{route('transfer')}}">Transfer</a></li>
                        <li><a class="dropdown-item" href="#">Private Day Tours</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $activeRoutes['train'] ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Trains
                        <img src="{{ asset('assets/images/menu-icon/trains.png')}}" alt="Trains">
                        <i class="fa-solid fa-chevron-down d-lg-none"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">RENFE - Point to Point Tickets</a></li>
                        <li><a class="dropdown-item" href="#">RENFE Spain Rails Pass</a></li>
                        <li><a class="dropdown-item" href="#">Spain Luxury Train Tour</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['tour'] ? 'active' : '' }}" href="#">Tours
                        <img src="{{ asset('assets/images/menu-icon/tours.png')}}" alt="Tours">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['car'] ? 'active' : '' }}" href="#">Cars
                        <img src="{{ asset('assets/images/menu-icon/smart-car.png')}}" alt="Car">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['road'] ? 'active' : '' }}" href="#">Santiago's Road
                        <img src="{{ asset('assets/images/menu-icon/routing.png')}}" alt="Routing">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['spanish'] ? 'active' : '' }}" href="#">In Spanish
                        <img src="{{ asset('assets/images/menu-icon/global.png')}}" alt="Global">
                    </a>
                </li>
                <li class="nav-item dropdown cart-dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void()" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cart
                        <img src="{{ asset('assets/images/menu-icon/shopping-cart.png')}}" alt="Cart">
                        <i class="fa-solid fa-chevron-down d-lg-none"></i>
                    </a>
                    @if (!Auth::guest())
                        <ul class="dropdown-menu">
                            <li><p>Mitsubishi ASX <span>$2121</span></p></li>
                            <li><p>Hotel Spa Balmoral  <span>$2121</span></p></li>
                            <li><p>Mitsubishi ASX <span>$2121</span></p></li>
                            <li class="cart-total"><p>TOTAL <span>$6,363</span></p></li>
                            <li class="cart-item-link"><p><a class="cart-item" href="cart-2.html">Checkout</a><span><img src="{{asset('assets/images/cart-white-icon.png')}}" alt="cart"></span></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
