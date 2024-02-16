@extends('web.master')
@section('content')
<div class="special-offer-section">
    <div class="container">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Special offers</h2>
            <div class="custom-right-search-form ms-auto text-end">
                <form>
                    <div class="search-filed position-relative">
                        <input type="text" class="form-control" placeholder="Search..." required>
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <ul class="nav nav-pills brochure-category-list" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Category - 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Category - 2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Category - 3</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Category - 4</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">Category - 5</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-6 offer-box">
                        <div class="offer-box-inner">
                            <div class="offer-img">
                                <a href="#">
                                    <img src="assets/images/special-offer-1.jpg" alt="Offer">
                                </a>
                            </div>
                            <div class="offer-content">
                                <h3>Special-offers-2</h3>
                                <p>Get 15% off on all hotels. Valid till 31st Dec 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example" class="custom-pagination text-center mb-4">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-ellipsis"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link active" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-ellipsis"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">20</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div> 
        </div>
    </div>
</div>

<div class="offer-booking-section pt-3">
    <div class="container">
        <div class="offer-booking-inner">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-4 col-sm-6 booking-image">
                    <img src="assets/images/offer-booking.jpg" alt="Offer Booking">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 booking-content">
                    <h2>For Your 1st Holiday Booking!</h2>
                    <p>Get 15% off on all hotels. Valid till 31st Dec 2023</p>
                </div>
                <div class="col-lg-2 col-md-3 col-12 booking-btn-block">
                    <a href="#" class="book-now-btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
