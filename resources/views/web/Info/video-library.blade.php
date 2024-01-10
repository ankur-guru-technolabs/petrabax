@extends('web.master')
@section('content')
<div class="video-section">
    <div class="container">
        <div class="section-header d-flex  align-items-center">
            <h2>Videos</h2>
            <div class="text-end ms-auto">
                <a href="javascript:void()"><img src="{{ asset('assets/images/filter-icon.png')}}" alt="Filter"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-1.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>In Search of Paradise</h3>
                        <p>Find the most pristine and untouched corners of the Earth, where nature reigns supreme.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-2.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Sunny Spanish Sojourn</h3>
                        <p>Join us on a journey through the picturesque landscapes and vibrant culture of Spain.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-3.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Tapas Trails in Spain</h3>
                        <p>Embark on a culinary adventure as we explore the rich and flavorful world of Spanish cuisine.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-4.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Flamenco Fever</h3>
                        <p>Dive into the passionate world of flamenco music and dance, with behind-the-scenes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-5.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Barcelona Unveiled</h3>
                        <p>Get lost in the enchanting streets of Barcelona, discovering the city's iconic architecture.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-6.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Andalusian Adventures</h3>
                        <p> Explore the unique charm of Andalusia, with its Moorish influences, white-washed.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-7.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>The Camino de Santiago</h3>
                        <p>Follow our pilgrimage along the Camino de Santiago, a transformative journey through.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-8.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Spanish Beach Bum</h3>
                        <p>Enjoy the sun and sea as we explore Spain's stunning coastal destinations.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 video-block">
                <div class="video-inner">
                    <div class="video-image position-relative">
                        <img src="{{ asset('assets/images/video-9.jpg')}}" alt="Video">
                        <a class="video-play-icon" href="https://www.youtube.com/embed/tgbNymZ7vqY" data-fancybox data-width="640" data-height="360">
                            <i class="fa-regular fa-circle-play"></i>
                        </a>
                    </div>
                    <div class="video-content">
                        <h3>Siesta and Sangria</h3>
                        <p>Delve into the Spanish way of life, embracing the art of relaxation, from afternoon siestas.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection 