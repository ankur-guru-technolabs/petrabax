@extends('web.master')
@section('content')
    <div class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>About Us: Discover the World with PETRABAX</h2>
            </div>
            <div class="about-content-inner">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 a about-content">
                        <p>Welcome to PETRABAX, your gateway to unforgettable travel experiences in the Iberian Peninsula and beyond. As a full-service travel organization, we take pride in curating exceptional journeys that go beyond the ordinary, offering
                            you a seamless blend of adventure, culture, and relaxation.</p>
                        <p>Exploring Iberia and Beyond
                            <br>Specializing in the enchanting realms of Spain and Portugal, PETRABAX invites you to embark on a journey like no other. Whether you're seeking the camaraderie of group coach tours or the freedom of independent travel, we
                            have you covered. Our comprehensive services include top-notch accommodations, airport transfers, local tours, activities, rental cars, rail tickets, and more. But our passion extends beyond the Iberian Peninsula; we're
                            your trusted companion for exploring the vibrant tapestry of Morocco and the diverse landscapes of Europe.</p>
                    </div>
                    <div class="col-lg-4 col-md-5 about-image">
                        <img src="{{ asset('assets/images/about-us.jpg')}}" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-6 team-box">
                    <img src="{{ asset('assets/images/team-1.jpg')}}" alt="Team 1">
                    <h2>Founder Name</h2>
                    <span class="designation">Designation Name</span>
                    <p>Dedicated and visionary founders with a passion for innovation, driving our company forward with creativity and relentless determination.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6 team-box">
                    <img src="{{ asset('assets/images/team-2.jpg')}}" alt="Team 2">
                    <h2>CEO Name</h2>
                    <span class="designation">Designation Name</span>
                    <p>Dedicated and visionary founders with a passion for innovation, driving our company forward with creativity and relentless determination.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6 team-box">
                    <img src="{{ asset('assets/images/team-3.jpg')}}" alt="Team 3">
                    <h2>BOD Name</h2>
                    <span class="designation">Designation Name</span>
                    <p>Dedicated and visionary founders with a passion for innovation, driving our company forward with creativity and relentless determination.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-location-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7 col-sm-6 left-map-block">
                    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 right-location-block">
                    <div class="address-box">
                        <p><span><i class="fa-solid fa-location-dot"></i></span>31-21 31st Street,4th Floor,Astoria, NY 11106</p>

                        <p><span><i class="fa-solid fa-phone"></i></span><a href="tel:800-634-1188">800 634 1188</a></p>

                        <p><span><i class="fa-regular fa-envelope"></i></span><a class="mail-link" href="mailto:info@petrabax.com"><u>info@petrabax.com</u></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="representation-section">
        <div class="container">
            <div class="representation-inner">
                <div class="section-header">
                    <h2>PTB Hotels: Where Luxury Meets Representation</h2>
                </div>
                <p>Within the PETRABAX family, PTB Hotels stands as a distinguished division, specializing in international hotel representations. As the Foreign Reservations Center for exclusive chains such as the Paradores of Spain and the Pousadas
                    of Portugal, PTB Hotels ensures that your stay is nothing short of extraordinary. We pride ourselves on providing the widest variety of quality hotel products across all our travel destinations, ensuring your comfort and satisfaction.</p>
                <p>Petrabax “El Mundo En EspaÑol”: Tailored for You
                    <br>At PETRABAX, we understand the unique needs of the U.S. Hispanic market. Under the banner of "El Mundo En EspaÑol," we have crafted escorted tours that span Europe, the Middle East, Africa, Asia, and Oceania. These tours are thoughtfully
                    designed for Spanish-speaking travelers residing in the USA and those from Spanish-speaking countries in Latin America. Immerse yourself in the beauty of our destinations with group travel experiences conducted exclusively in the
                    Spanish language, creating connections that transcend borders.</p>
            </div>
        </div>
    </div>

    <div class="client-section">
        <div class="container">
            <div class="client-inner">
                <div class="section-header">
                    <h2>U.S. Representatives & Reservations Center</h2>
                </div>

                <div class="client-carousel owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-box">
                            <a href="javascript:void();">
                                <img src="{{ asset('assets/images/client-1.png')}}" alt="Client">
                            </a>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-box">
                            <a href="javascript:void();">
                                <img src="{{ asset('assets/images/client-2.png')}}" alt="Client">
                            </a>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-box">
                            <a href="javascript:void();">
                                <img src="{{ asset('assets/images/client-3.png')}}" alt="Client">
                            </a>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-box">
                            <a href="javascript:void();">
                                <img src="{{ asset('assets/images/client-4.png')}}" alt="Client">
                            </a>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-box">
                            <a href="javascript:void();">
                                <img src="{{ asset('assets/images/client-5.png')}}" alt="Client">
                            </a>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-box">
                            <a href="javascript:void();">
                                <img src="{{ asset('assets/images/client-6.png')}}" alt="Client">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="memberships-section">
        <div class="container">
            <div class="memberships-inner">
                <div class="section-header">
                    <h2>Memberships & Consumer Protection Program</h2>
                </div>
                <div class="row memberships-box">
                    <div class="memberbox">
                        <div class="memberbox-inner">
                            <a href="javascript:void()">
                                <img src="{{ asset('assets/images/member-1.png')}}" alt="Member">
                            </a>
                        </div>
                    </div>
                    <div class="memberbox">
                        <div class="memberbox-inner">
                            <a href="javascript:void()">
                                <img src="{{ asset('assets/images/member-2.png')}}" alt="Member">
                            </a>
                        </div>
                    </div>
                    <div class="memberbox">
                        <div class="memberbox-inner">
                            <a href="javascript:void()">
                                <img src="{{ asset('assets/images/member-2.png')}}" alt="Member">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="whychoose-section">
        <div class="container">
            <div class="whychoose-inner">
                <div class="section-header">
                    <h2>Why Choose PETRABAX?</h2>
                </div>
                <div class="whychoose-content">
                    <p>Expertise: With decades of experience, we bring unparalleled knowledge of the Iberian Peninsula and Europe. Diversity: Explore the rich tapestry of cultures, languages, and landscapes with our wide range of destinations. Quality:
                        From luxury accommodations to reliable transportation, we prioritize quality in every aspect of your journey. Community: Join a community of like-minded travelers and create lasting memories together.
                        <br>At PETRABAX, our mission is to turn your travel dreams into reality. Come, join us on a voyage of discovery, where every destination tells a story, and every experience is a chapter in your adventure</p>
                </div>
            </div>
        </div>
    </div>
@endsection