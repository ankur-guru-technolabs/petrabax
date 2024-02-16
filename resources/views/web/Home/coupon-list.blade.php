@extends('web.master')
@section('content') 
<div class="offer-coupon-section mb-50">
    <div class="container">
        <div class="back-btn-link d-md-none">
            <a href="travel-users.html"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="section-header">
            <h2>Coupons</h2>
        </div>
        <div class="offer-coupon-inner">
            <div class="row">
                @foreach($coupons as $coupon)
                    <div id="coupon-item-1" class="col-lg-4 col-sm-6 offer-coupon-box">
                        <div class="offer-coupon-box-inner">
                            <form data-copy=true>
                                <div class="input-group">
                                    <input type="text" value="{{$coupon->code}}" class="form-control">
                                    <button class="copy" type="button"><i class="fa fa-clone"></i></button>
                                </div>
                            </form>
                            <p>Exclusive offer on Caixa Bank Credit Cards. Get $ 1200 off</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script>
    $(document).ready(function () {
        $(".copy").click(function () {
            var couponCode = $(this).closest('.offer-coupon-box-inner').find('.form-control').val();
            navigator.clipboard.writeText(couponCode);
            toastr.success('Coupon copied successfully');
        });
    });
</script>
@endsection
