@extends('web.master')
@section('content')
<div class="contact-section suggestion-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Suggestions</h2>
        </div>
        <div class="contact-inner">
            <form  id="suggestion-form" action="{{route('submitSuggestions')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-4 form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4  form-group">
                        <label>Email Address </label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" placeholder="Contact Number" name="phone_number">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 form-group">
                        <label>Message</label>
                        <textarea rows="6" class="form-control" placeholder="Message" name="message"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 text-center form-submit-btn">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection