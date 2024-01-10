@extends('web.master')
@section('content') 
<div class="destination-guides-section mb-50">
    <div class="container">
        <div class="section-header">
            <h2>Destination Guides and Recommendations</h2>
        </div>
        <div class="popular-attractions">
            <h3>Popular Attractions</h3>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 attractions-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/attractions-1.jpg')}}" alt="Attractions">
                    </div>
                    <div class="post-header">
                        <h4>Miro, Vizcaya - Bilbao, SPAIN</h4>
                        <span>10.00AM To 6.00PM <br> $423</span>
                    </div>
                    <div class="post-content">
                        <p>Located in the heart of Gran Vía in Madrid, will surprise you and can be perceived as soon ...</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 attractions-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/attractions-2.jpg')}}" alt="Attractions">
                    </div>
                    <div class="post-header">
                        <h4>Miro, Vizcaya - Bilbao, SPAIN</h4>
                        <span>10.00AM To 6.00PM <br> $423</span>
                    </div>
                    <div class="post-content">
                        <p>Located in the heart of Gran Vía in Madrid, will surprise you and can be perceived as soon ...</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 attractions-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/attractions-3.jpg')}}" alt="Attractions">
                    </div>
                    <div class="post-header">
                        <h4>Miro, Vizcaya - Bilbao, SPAIN</h4>
                        <span>10.00AM To 6.00PM <br> $423</span>
                    </div>
                    <div class="post-content">
                        <p>Located in the heart of Gran Vía in Madrid, will surprise you and can be perceived as soon ...</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 attractions-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/attractions-4.jpg')}}" alt="Attractions">
                    </div>
                    <div class="post-header">
                        <h4>Miro, Vizcaya - Bilbao, SPAIN</h4>
                        <span>10.00AM To 6.00PM <br> $423</span>
                    </div>
                    <div class="post-content">
                        <p>Located in the heart of Gran Vía in Madrid, will surprise you and can be perceived as soon ...</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="culture-section">
            <h3>Local Culture and Customs</h3>
            <ul>
                <li>Flamenco</li>
                <li>Bullfighting</li>
                <li>Siesta</li>
                <li>Tapas</li>
                <li>Fiestas and Festivals</li>
                <li>Bull Runs</li>
                <li>Soccer</li>
                <li>Bullfighting Arenas</li>
                <li>Cuisine</li>
                <li>Wine</li>
                <li>Art and Architecture</li>
                <li>Fiestas and Festivals</li>
                <li>Regional Dress</li>
            </ul>
        </div>

        <div class="recommendations-section">
            <h3>Dining Recommendations</h3>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 recommendations-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/recommendations-1.jpg')}}" alt="recommendations">
                    </div>
                    <div class="post-header">
                        <h4>La Barceloneta</h4>
                        <span><i class="fa-solid fa-star"></i> 4.3</span>
                        <p>Specialties - Paella, Fideua, Allioli...</p>
                    </div>
                    <div class="post-content">
                        <p>A seaside neighborhood with seafood restaurants.</p>

                        <p>
                            Time - 10.00AM To 6.00PM
                            <br> Price - $423 - $875
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 recommendations-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/recommendations-2.jpg')}}" alt="recommendations">
                    </div>
                    <div class="post-header">
                        <h4>Gothic Quarter</h4>
                        <span><i class="fa-solid fa-star"></i> 4.3</span>
                        <p>Specialties - Paella, Fideua, Allioli...</p>
                    </div>
                    <div class="post-content">
                        <p>A seaside neighborhood with seafood restaurants.</p>

                        <p>
                            Time - 10.00AM To 6.00PM
                            <br> Price - $423 - $875
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 recommendations-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/recommendations-3.jpg')}}" alt="recommendations">
                    </div>
                    <div class="post-header">
                        <h4>Puerta del Sol</h4>
                        <span><i class="fa-solid fa-star"></i> 4.3</span>
                        <p>Specialties - Paella, Fideua, Allioli...</p>
                    </div>
                    <div class="post-content">
                        <p>A seaside neighborhood with seafood restaurants.</p>

                        <p>
                            Time - 10.00AM To 6.00PM
                            <br> Price - $423 - $875
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 recommendations-box">
                    <div class="post-cover">
                        <img src="{{ asset('assets/images/recommendations-4.jpg')}}" alt="recommendations">
                    </div>
                    <div class="post-header">
                        <h4>Playa de la Malvarrosa</h4>
                        <span><i class="fa-solid fa-star"></i> 4.3</span>
                        <p>Specialties - Paella, Fideua, Allioli...</p>
                    </div>
                    <div class="post-content">
                        <p>A seaside neighborhood with seafood restaurants.</p>

                        <p>
                            Time - 10.00AM To 6.00PM
                            <br> Price - $423 - $875
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="interactive-maps-section">
            <h3>Interactive Maps</h3>
            <iframe width="100%" height="383" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=383&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
        <div class="section-header">
            <h2>Personalized Travel Analytics</h2>
        </div>
        <div class="interactive-maps-section ">
            <h3>Travel History Visualization</h3>
            <iframe width="100%" height="588" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=588&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
</div>
@endsection