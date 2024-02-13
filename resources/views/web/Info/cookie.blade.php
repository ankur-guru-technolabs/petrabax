@extends('web.master')
@section('content')
<div class="site-main-content">
    <div class="terms-section">
        <div class="container">
            <div class="back-btn-link d-md-none">
                <a href="index.html"><i class="fa-solid fa-arrow-left-long"></i></a>
            </div>
            <div class="section-header">
                <h2>Cookie Statement</h2>
            </div>
            <div class="terms-inner">
                {!! $cookie->value !!}
            </div>
        </div>
    </div>
</div>
@endsection