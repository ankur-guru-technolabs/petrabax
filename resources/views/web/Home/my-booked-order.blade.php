@extends('web.master')
@section('content')
<div class="pending-order-section">
    <div class="container">
        <div class="back-btn-link d-md-none">
            <a href="travel-users.html"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="row">
            <div class="col-6 link-text left-link-text">
                <a href="{{route('myBookedOrder')}}" class="active">Pending Orders</a>
            </div>
            <div class="col-6 link-text right-link-text text-end ms-auto">
                <a href="{{route('myCompletedOrder')}}">Completed Order</a>
            </div>
        </div>

        <div class="pending-order-content">
            <div class="row">
                <div class="col-3 pending-common-content pending-order-hotel">
                    <div class="pending-order-inner">
                        <div class="pending-order-name">
                            <img src="{{asset('assets/images/buildings.png')}}" alt="Order">
                            <h2>Hotel</h2>
                        </div>
                        <div class="pending-order-name">
                            <img src="{{asset('assets/images/buildings.png')}}" alt="Order">
                            <h2>Train</h2>
                        </div>
                        <div class="pending-order-name">
                            <img src="{{asset('assets/images/buildings.png')}}" alt="Order">
                            <h2>Car</h2>
                        </div>
                    </div>
                </div>
                <div class="col-6 pending-common-content pending-order-fulldetail">
                    <div class="pending-order-inner">
                        <div class="pending-order-history-details">
                            <div class="order-pending-box">
                                <label>Hotel Name</label>
                                <p>Downtown-west</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Check in</label>
                                <p>20/12/2024</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Check out</label>
                                <p>22/12/2024</p>
                            </div>
                        </div>
                        <div class="pending-order-history-details">
                            <div class="order-pending-box">
                                <label>Arrival</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Departure</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Date</label>
                                <p>22/12/2024</p>
                            </div>
                        </div>
                        <div class="pending-order-history-details">
                            <div class="order-pending-box">
                                <label>Arrival</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Departure</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Date</label>
                                <p>22/12/2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 pending-common-content pending-order-action-list">
                    <div class="pending-order-inner">
                        <div class="pending-button-list-inner button-box-options-inner">
                            <div class="btn-list">
                                <div class="btn-list-inner">
                                    <a href="javascript:void();">Cancel</a>
                                </div>
                                <div class="btn-list-inner">
                                    <a class="{{route('myCompletedOrder')}}" target="_blank" href="chat-order.html">Chat</a>
                                </div>
                                <div class="btn-list-inner">
                                    <a href="javascript:void();">Documentation</a>
                                </div>
                                <div class="btn-list-inner">
                                    <a target="_blank" href="{{asset('assets/images/payment-receipt.pdf')}}">Invoice</a>
                                </div>
                            </div>
                            <div class="total-price-pending text-center">
                                <a href="destination-guides.html" class="tour-guide-btn {{route('myCompletedOrder')}}">Tour Guide</a>
                                <a href="non-travel-agent-order-details.html" class="tour-guide-btn">View</a>
                                <p>Total Prices&nbsp;&nbsp;&nbsp;<span>$ 9789</span></p>
                                <a href="payment-paradores.html" class="tour-guide-btn {{route('myCompletedOrder')}}">Make Payment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pending-order-content">
            <div class="row">
                <div class="col-3 pending-common-content pending-order-hotel">
                    <div class="pending-order-inner">
                        <div class="pending-order-name">
                            <img src="{{asset('assets/images/buildings.png')}}" alt="Order">
                            <h2>Hotel</h2>
                        </div>
                        <div class="pending-order-name">
                            <img src="{{asset('assets/images/buildings.png')}}" alt="Order">
                            <h2>Train</h2>
                        </div>
                        <div class="pending-order-name">
                            <img src="{{asset('assets/images/buildings.png')}}" alt="Order">
                            <h2>Car</h2>
                        </div>
                    </div>
                </div>
                <div class="col-6 pending-common-content pending-order-fulldetail">
                    <div class="pending-order-inner">
                        <div class="pending-order-history-details">
                            <div class="order-pending-box">
                                <label>Hotel Name</label>
                                <p>Downtown-west</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Check in</label>
                                <p>20/12/2024</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Check out</label>
                                <p>22/12/2024</p>
                            </div>
                        </div>
                        <div class="pending-order-history-details">
                            <div class="order-pending-box">
                                <label>Arrival</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Departure</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Date</label>
                                <p>22/12/2024</p>
                            </div>
                        </div>
                        <div class="pending-order-history-details">
                            <div class="order-pending-box">
                                <label>Arrival</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Departure</label>
                                <p>Place Name</p>
                            </div>
                            <div class="order-pending-box">
                                <label>Date</label>
                                <p>22/12/2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 pending-common-content pending-order-action-list">
                    <div class="pending-order-inner">
                        <div class="pending-button-list-inner button-box-options-inner">
                            <div class="btn-list">
                                <div class="btn-list-inner">
                                    <a href="javascript:void();">Cancel</a>
                                </div>
                                <div class="btn-list-inner">
                                    <a class="{{route('myCompletedOrder')}}" target="_blank" href="chat-order.html">Chat</a>
                                </div>

                                <div class="btn-list-inner">
                                    <a href="javascript:void();">Documentation</a>
                                </div>
                                <div class="btn-list-inner">
                                    <a target="_blank" href="{{asset('assets/images/payment-receipt.pdf')}}">Invoice</a>
                                </div>
                            </div>
                            <div class="total-price-pending text-center">
                                <a href="destination-guides.html" class="tour-guide-btn {{route('myCompletedOrder')}}">Tour Guide</a>
                                <a href="non-travel-agent-order-details.html" class="tour-guide-btn">View</a>
                                <p>Total Prices&nbsp;&nbsp;&nbsp;<span>$ 9789</span></p>
                                <a href="payment-paradores.html" class="tour-guide-btn {{route('myCompletedOrder')}}">Make Payment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="custom-pagination text-center mb-5">
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
@endsection