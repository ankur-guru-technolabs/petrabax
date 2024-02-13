<div class="footer-section">
    <div class="container">
        <ul class="footer-menu-link">
            <li><a href="{{route('aboutUs')}}">About Us</a></li>
            <li><a href="{{route('brochureList')}}">Brochure Centre </a></li>
            <li><a href="#">Order Brochure</a></li>
            <li><a href="#">Affiliate Program</a></li>
            <li><a href="#">Special Offers</a></li>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Terms of Use</a></li>


            <li><a href="{{route('videoLibrary')}}">Video Library</a></li>
            <li><a href="#">Find an Agent </a></li>
            <li><a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#ccformdownload">Credit Card Form</a></li>
            <li><a href="{{route('termsCondition')}}">Terms & Conditions</a></li>
            <li><a href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
            <li><a href="{{route('contactUs')}}">Contact Us</a></li>
            <li><a href="{{route('cookie')}}">Cookies  </a></li>
            <li><a href="#">Trip planning </a></li>
        </ul>
        <div class="copyright-section">
            <div class="row">
                <div class="col-md-6 social-link">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i> Twitter</a>
                </div>
                <div class="col-md-6 copyright-text">
                    <p>&copy; 2000-2023, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="modal fade ccformdownload" id="ccformdownload" tabindex="-1" aria-labelledby="ccformdownloadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header d-none">
          <h1 class="modal-title fs-5" id="ccformdownloadLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body">
          <div class="download-form-content">
            <h2>Download CC Form</h2>
            <p>Here you can download the Payment Details form</p>
            <a href="#" class="download-btn">Download</a>
          </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('/assets/js/propper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('/custom/common.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/masonry.pkgd.min.js')}}"></script>

<script>
  @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>