@extends('web.master')
@section('content') 
    <div>
        <div class="hero-section">
            <div class="container position-relative">
            <div class="hero-section-inner position-relative">
                <img src="{{ asset('assets/images/home-banner.jpg')}}" alt="Banner Image">
                <div class="hero-content-title">
                <h1>Travel far and wide, but always carry a piece of each place with you.</h1>
                </div>
            </div>
            </div>
        </div>

        <div class="hotellist-section">
            <div class="container">
                <div class="section-header">
                    <h2>Hotels</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/hotel-1.jpg')}}" alt="Hotel" />
                            </div>
                            <div class="hotel-content">
                                <h2>Hotels</h2>
                                <p>
                                    Captivating views, modern comforts, and personalized hospitality for a tranquil Mediterranean escape.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-img">
                            <img src="{{ asset('assets/images/hotel-2.jpg')}}" alt="Hotel" />
                        </div>
                        <div class="hotel-content">
                            <h2>Paradores of Spain</h2>
                            <p>
                                Captivating views, modern comforts, and personalized hospitality for a tranquil Mediterranean escape.
                            </p>
                        </div>
                        <div class="book-btn">
                            <a href="#" title="book now">Book Now</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/hotel-3.jpg')}}" alt="Hotel" />
                            </div>
                            <div class="hotel-content">
                                <h2>Pousadas of Portugal</h2>
                                <p>
                                    Captivating views, modern comforts, and personalized hospitality for a tranquil Mediterranean escape.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hotellist-section tour-section">
            <div class="container">
                <div class="section-header">
                    <h2>Tours & Packages</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/tour-1.jpg')}}" alt="Tour" />
                            </div>
                            <div class="hotel-content">
                                <h2>Santiago de Compostela</h2>
                                <p>
                                    Captivating views, modern comforts, and personalized hospitality for a tranquil Mediterranean escape.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/tour-2.jpg')}}" alt="Tour" />
                            </div>
                            <div class="hotel-content">
                                <h2>Santiago de Compostela</h2>
                                <p>
                                    Captivating views, modern comforts, and personalized hospitality for a tranquil Mediterranean escape.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hotellist-section car-section">
            <div class="container">
                <div class="section-header">
                    <h2>Spain by Train and Car Rentals</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/car-1.jpg')}}" alt="Car" />
                            </div>
                            <div class="hotel-content">
                                <h2>Spain & Portugal Car Rental</h2>
                                <p>
                                    Driving in Spain and Portugal is very easy. Roads and highways are very modern and safe.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/car-2.jpg')}}" alt="Hotel" />
                            </div>
                            <div class="hotel-content">
                                <h2>Luxury Train Tours</h2>
                                <p>
                                    Experience the El Transcantabrico or the Al Andalus though the most unique destinations in Spain.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/car-3.jpg')}}" alt="Hotel" />
                            </div>
                            <div class="hotel-content">
                                <h2>Points to Points Train Tickets</h2>
                                <p>
                                    Looking trains in Spain and to international destinations such as Paris and Lisbon - as easy as 1-2-3.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hotellist-section tour-other-section">
            <div class="container">
                <div class="section-header">
                    <h2>Tours in Spain</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/spain-1.jpg')}}" alt="Tour" />
                            </div>
                            <div class="hotel-content">
                                <h2>Western Europe - France, England</h2>
                                <p>
                                    Driving in Spain and Portugal is very easy. Roads and highways are very modern and safe.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/spain-2.jpg')}}" alt="Tour" />
                            </div>
                            <div class="hotel-content">
                                <h2>Spain, Portugal and Morocco</h2>
                                <p>
                                    An exclusive program that will take you to discover the most beautiful cities and corners of the Iberian Peninsula.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 hotel-box">
                        <div class="hotel-box-inner">
                            <div class="hotel-img">
                                <img src="{{ asset('assets/images/spain-3.jpg')}}" alt="Tour" />
                            </div>
                            <div class="hotel-content">
                                <h2>Europe for 2</h2>
                                <p>
                                    A spectacular Europe at spectacular prices; our great “Super Offer”.
                                </p>
                            </div>
                            <div class="book-btn">
                                <a href="#" title="book now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-section">
            <div class="container">
                <div class="section-header">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonial-carousel owl-carousel owl-theme">
                    <div class="items">
                        <div class="testimonial-content">
                            <h2>
                        Maria <span><sup>Australia</sup></span>
                        </h2>
                            <p>
                                "Exceptional travel services! Seamless planning, attentive team, unforgettable experiences. Grateful for a journey that surpassed expectations. Highly recommended for wanderers!"
                            </p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="testimonial-content">
                            <h2>
                        Maria <span><sup>Australia</sup></span>
                        </h2>
                            <p>
                                "Exceptional travel services! Seamless planning, attentive team, unforgettable experiences. Grateful for a journey that surpassed expectations. Highly recommended for wanderers!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offer-section">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            Hotel

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9173 20.1668H4.58398C2.75065 20.1668 1.83398 19.2502 1.83398 17.4168V10.0835C1.83398 8.25016 2.75065 7.3335 4.58398 7.3335H9.16732V17.4168C9.16732 19.2502 10.084 20.1668 11.9173 20.1668Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.26814 3.6665C9.1948 3.9415 9.16732 4.244 9.16732 4.58317V7.33317H4.58398V5.49984C4.58398 4.4915 5.40898 3.6665 6.41732 3.6665H9.26814Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                                />
                                <path d="M12.834 7.3335V11.9168" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5 7.3335V11.9168" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.584 15.5835H13.7507C13.2465 15.5835 12.834 15.996 12.834 16.5002V20.1668H16.5007V16.5002C16.5007 15.996 16.0882 15.5835 15.584 15.5835Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                                />
                                <path d="M5.5 11.9165V15.5832" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.16602 17.4168V4.5835C9.16602 2.75016 10.0827 1.8335 11.916 1.8335H17.416C19.2493 1.8335 20.166 2.75016 20.166 4.5835V17.4168C20.166 19.2502 19.2493 20.1668 17.416 20.1668H11.916C10.0827 20.1668 9.16602 19.2502 9.16602 17.4168Z" stroke="#498C92"
                                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Trains
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.04167 20.1668H13.625M7.66667 1.8335H15M11.3333 4.5835V1.8335M4 11.0002H18.6667M15.9167 17.4168L17.2917 20.1668M6.75 17.4168L5.375 20.1668M8.125 14.2085H8.13417M14.5417 14.2085H14.5508M8.4 17.4168H14.2667C15.8068 17.4168 16.5769 17.4168 17.1651 17.1171C17.6826 16.8534 18.1033 16.4327 18.3669 15.9153C18.6667 15.327 18.6667 14.557 18.6667 13.0168V8.9835C18.6667 7.44335 18.6667 6.67328 18.3669 6.08502C18.1033 5.56758 17.6826 5.14688 17.1651 4.88323C16.5769 4.5835 15.8068 4.5835 14.2667 4.5835H8.4C6.85986 4.5835 6.08978 4.5835 5.50153 4.88323C4.98408 5.14688 4.56338 5.56758 4.29973 6.08502C4 6.67328 4 7.44335 4 8.9835V13.0168C4 14.557 4 15.327 4.29973 15.9153C4.56338 16.4327 4.98408 16.8534 5.50153 17.1171C6.08978 17.4168 6.85986 17.4168 8.4 17.4168ZM8.58333 14.2085C8.58333 14.4616 8.37813 14.6668 8.125 14.6668C7.87187 14.6668 7.66667 14.4616 7.66667 14.2085C7.66667 13.9554 7.87187 13.7502 8.125 13.7502C8.37813 13.7502 8.58333 13.9554 8.58333 14.2085ZM15 14.2085C15 14.4616 14.7948 14.6668 14.5417 14.6668C14.2885 14.6668 14.0833 14.4616 14.0833 14.2085C14.0833 13.9554 14.2885 13.7502 14.5417 13.7502C14.7948 13.7502 15 13.9554 15 14.2085Z"
                                stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            Cars
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.7937 6.98486H6.96281C5.25781 6.98486 4.87282 7.83738 4.66198 8.89155L3.88281 12.604H14.8828L14.1037 8.89155C13.8745 7.83738 13.4987 6.98486 11.7937 6.98486Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                />
                                <path d="M16.2395 18.6631C16.3128 19.4697 15.6711 20.1664 14.8461 20.1664H13.5536C12.8111 20.1664 12.7103 19.8456 12.5728 19.4606L12.4353 19.0481C12.2428 18.4889 12.1145 18.1039 11.1245 18.1039H7.60449C6.61449 18.1039 6.46781 18.5348 6.29365 19.0481L6.15615 19.4606C6.02782 19.8547 5.92698 20.1664 5.17531 20.1664H3.88281C3.05781 20.1664 2.40699 19.4697 2.48949 18.6631L2.87448 14.4739C2.97532 13.438 3.16781 12.5947 4.97364 12.5947H13.7462C15.552 12.5947 15.7445 13.438 15.8453 14.4739L16.2395 18.6631Z"
                                stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.87305 10.5415H3.18555" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.5605 10.5415H14.873" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.24805 15.354H7.31055" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.4355 15.354H13.498" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.8169 8.01181C18.0736 7.41598 17.9819 6.60933 17.5052 5.90349C17.0377 5.19766 16.3227 4.80349 15.6719 4.81266" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.6683 8.91931C21.0533 7.53514 20.7783 5.83935 19.7974 4.37268C18.8166 2.90601 17.3499 2.00766 15.9199 1.8335" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">
                            Flight
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2665 2.57861C17.1508 1.66517 18.612 1.65335 19.5111 2.55237C20.3854 3.42676 20.4017 4.83931 19.5477 5.73361L17.0006 8.4009C16.801 8.60997 16.7011 8.7145 16.6396 8.83693C16.5852 8.94531 16.5528 9.06342 16.5443 9.18442C16.5347 9.3211 16.5672 9.46193 16.6322 9.74361L18.2161 16.6072C18.2828 16.8963 18.3162 17.0409 18.3054 17.1807C18.2959 17.3045 18.2613 17.4251 18.2038 17.5351C18.1388 17.6594 18.0339 17.7643 17.8241 17.9741L17.4842 18.314C16.9286 18.8696 16.6508 19.1474 16.3664 19.1977C16.1181 19.2416 15.8627 19.1813 15.6603 19.031C15.4285 18.8589 15.3042 18.4861 15.0557 17.7407L13.2135 12.2138L10.1469 15.2804C9.96386 15.4634 9.87234 15.5549 9.81112 15.6627C9.75688 15.7582 9.72024 15.8627 9.70294 15.9711C9.68342 16.0935 9.69771 16.2221 9.7263 16.4794L9.8947 17.995C9.92329 18.2523 9.93758 18.381 9.91806 18.5034C9.90076 18.6118 9.86412 18.7163 9.80989 18.8117C9.74866 18.9195 9.65714 19.011 9.4741 19.1941L9.29305 19.3751C8.85941 19.8088 8.64259 20.0256 8.40165 20.0884C8.19031 20.1435 7.96626 20.1213 7.76983 20.0258C7.54588 19.917 7.37579 19.6619 7.03562 19.1516L5.59799 16.9952C5.53722 16.904 5.50683 16.8584 5.47155 16.8171C5.44021 16.7804 5.40602 16.7462 5.3693 16.7148C5.32796 16.6795 5.28237 16.6492 5.19121 16.5884L3.03477 15.1508C2.52451 14.8106 2.26938 14.6405 2.16055 14.4165C2.0651 14.2201 2.04291 13.9961 2.09799 13.7847C2.16078 13.5438 2.3776 13.327 2.81124 12.8933L2.99228 12.7123C3.17533 12.5292 3.26685 12.4377 3.37463 12.3765C3.47012 12.3222 3.57457 12.2856 3.68301 12.2683C3.80542 12.2488 3.93406 12.2631 4.19134 12.2917L5.70695 12.4601C5.96423 12.4887 6.09287 12.503 6.21528 12.4834C6.32372 12.4661 6.42817 12.4295 6.52365 12.3753C6.63143 12.314 6.72296 12.2225 6.906 12.0395L9.97255 8.97292L4.44571 7.13064C3.70025 6.88216 3.32752 6.75791 3.15537 6.52608C3.00506 6.32364 2.94476 6.06823 2.98868 5.81994C3.03897 5.5356 3.31679 5.25778 3.87242 4.70215L4.21229 4.36228C4.42211 4.15246 4.52702 4.04755 4.65132 3.98256C4.76132 3.92505 4.88187 3.89048 5.00564 3.88095C5.14548 3.87018 5.29005 3.90354 5.57918 3.97026L12.4167 5.54815C12.7008 5.61372 12.8429 5.6465 12.9801 5.63675C13.1125 5.62733 13.2413 5.58926 13.3576 5.52518C13.478 5.4588 13.5794 5.35405 13.7822 5.14456L16.2665 2.57861Z"
                                stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row spac-left-right-20">
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-1.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 1st Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-2.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 1st Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="row spac-left-right-20">
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-1.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 1st Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-2.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 1st Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="row spac-left-right-20">
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-1.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 2nd Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-2.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 2nd Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="row spac-left-right-20">
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-1.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 3rd Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 offerbox">
                                <div class="offerbox-inner">
                                    <div class="offer-content d-flex">
                                        <div class="left-image">
                                            <img src="{{ asset('assets/images/offer-2.jpg')}}" />
                                        </div>
                                        <div class="offer-right-content">
                                            <h2>For Your 3rd Holiday Booking!</h2>
                                            <p>Up to 40% OFF</p>
                                            <p>Code:FIRSTWELCOM</p>
                                            <a href="#" class="view-more-link">View all</a>
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