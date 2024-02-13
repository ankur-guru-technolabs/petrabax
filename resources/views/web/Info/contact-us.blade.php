@extends('web.master')
@section('content')
<div class="site-main-content">

    <div class="contact-section">
        <div class="container">
            <div class="contact-inner">
                <div class="section-header text-center">
                    <h2>Contact Us</h2>
                </div>
                <form id="contact-us-form" action="{{route('contactUsSubmit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="first_name">
                        </div>
                        <div class="col-6 form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="col-6 form-group">
                            <label>Email Address </label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col-6 form-group">
                            <label>Category</label>
                            <select class="nice-select form-control" placeholder="Select" name="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <p id="cat-error"></p>
                        </div>
                        <div class="col-6 form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" placeholder="Contact Number" name="contact_no">
                        </div>
                        <div class="col-6 form-group">
                            <label>Inquiry</label>
                            <textarea type="text" class="form-control" placeholder="Inquiry" rows="1" name="inquiry"></textarea>
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
@section('jscontent') 
<script type = "text/javascript">
    $(".nice-select").niceSelect();
    $(document).ready(function() {
        $("#contact-us-form").validate({
            ignore: [],
            rules:{
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email: {
                    required: true
                },
                category_id: {
                    required: true
                },
                contact_no: {
                    required: true
                },
                inquiry: {
                    required: true
                }
            },
            messages:{
                first_name:{
                    required: "First name field is required."
                },
                last_name: {
                    required: "Last name field is required."
                },
                email: {
                    required: "Email field is required."
                },
                category_id: {
                    required: "Category field is required."
                },
                contact_no: {
                    required: "Contact field is required."
                },
                inquiry: {
                    required: "Inquiry field is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    var fieldName = $(element).attr('name');
                    if(fieldName == 'category_id'){
                        element.next('.nice-select').next('#cat-error').html(error);
                    }
                } else {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
@endsection
