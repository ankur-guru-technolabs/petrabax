@extends('web.master')
@section('content')
<div class="site-main-content">

    <div class="contact-section">
        <div class="container">
            <div class="contact-inner">
                <div class="section-header text-center">
                    <h2>Contact Us</h2>
                </div>
                <form>
                    <div class="row">
                        <div class="col-6 form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-6 form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="col-6 form-group">
                            <label>Email Address </label>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-6 form-group">
                            <label>Category</label>
                            <select class="nice-select form-control" placeholder="Select" required>
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" placeholder="Contact Number" required>
                        </div>
                        <div class="col-6 form-group">
                            <label>Inquiry</label>
                            <input type="text" class="form-control" placeholder="Inquiry" required>
                        </div>
                        <div class="col-12 text-center form-submit-btn">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="address-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contact-box">
                    <div class="contact-box-inner">
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/location.png')}}" alt="location"></span> City Name
                        </p>
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/call.png')}}" alt="Call"></span>
                            <a href="tel:800-634-1188">800 634 1188</a>
                        </p>
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/email.png')}}" alt="email"></span>
                            <a href="mailto:info@petrabax.com"><u>info@petrabax.com</u></a>
                        </p>
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/call.png')}}" alt="Call"></span> Street : Avenida Cervantes 5
                            <br> City : Elantxobe
                            <br> State : Biscay
                        </p>
                    </div>
                </div>
                <div class="col-md-4 contact-box">
                    <div class="contact-box-inner">
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/location.png')}}" alt="location"></span> City Name
                        </p>
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/call.png')}}" alt="Call"></span>
                            <a href="tel:800-634-1188">800 634 1188</a>
                        </p>
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/email.png')}}" alt="email"></span>
                            <a href="mailto:info@petrabax.com"><u>info@petrabax.com</u></a>
                        </p>
                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/address.png')}}" alt="Call"></span> Street : Avenida Cervantes 5
                            <br> City : Elantxobe
                            <br> State : Biscay
                        </p>
                    </div>
                </div>
                <div class="col-md-4 contact-box">
                    <div class="contact-box-inner">
                        <h3>Petrabax</h3>

                        <p class="position-relative">
                            <span class="position-absolute"><img src="{{ asset('assets/images/email.png')}}" alt="email"></span>
                            <a href="mailto:info@petrabax.com"><u>info@petrabax.com</u></a>
                        </p>
                        <ul class="social-icon">
                            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection