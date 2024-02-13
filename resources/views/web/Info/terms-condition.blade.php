@extends('web.master')
@section('content')
<div class="terms-section">
    <div class="container">
        <div class="section-header">
            <h2>Terms & Conditions</h2>
        </div>
        <div class="terms-inner">
           {!! $terms->value !!}
        </div>
    </div>
</div>
@endsection
