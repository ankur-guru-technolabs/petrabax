@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Banner management</h2>
        </div>
        <div class="video-management-inner brochure-management">
            <div class="video-content ">
                <div class="back-to-order-link d-flex align-items-center">
                    <a href="{{route('bannerList')}}"><i class="fa-solid fa-chevron-left"></i></a>
                    <h5 class="mx-auto">Edit</h5>
                </div>
                <form id="banner-form" action="{{route('bannerUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="id" value="{{$banner->id}}">
                        <div class="col-sm-4 form-group">
                            <label>Banner Category</label>
                            <select class="nice-select form-control" name="category_id" id="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" {{$cat->id == $banner->category_id  ? 'selected' : ''}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <p id="cat-error"></p>
                            @if($errors->has('category_id'))
                                <small class="text-danger">
                                    {{ $errors->first('category_id') }}
                                </small>
                            @endif
                        </div>
                        <div class="col-sm-4 form-group brochure-full-width-upload  custom-upload">
                            <label>Banner Image  ( Ratio 1000*300 )</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag" title="" class="input-img" accept="image/*" name="image"/><img class="preview1 prev" id="uploadicon1" src="{{ asset('/banner/'.$banner->image) }}" alt="Gallery Add">
                                        <img id="ImgPreview" src="" class="preview1" />
                                        <input type="button" id="removeImage1" value="x" class="btn-rmv1" />
                                    </span>
                                </div>
                                @if($errors->has('image'))
                                    <small class="text-danger">
                                        {{ $errors->first('image') }}
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-submit-btn-list">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type = "text/javascript">
    $(".nice-select").niceSelect();

    function readURL(input, imgControlName) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imag").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview";
        readURL(this, imgControlName);
        $('#uploadicon1').addClass('show');
        $('.preview1').addClass('prev');
        $('.btn-rmv1').addClass('rmv');
    });

    $("#removeImage1").click(function(e) {
        e.preventDefault();
        $("#imag").val("");
        $("#ImgPreview").attr("src", "");
        $('.preview1').removeClass('prev');
        $('.btn-rmv1').removeClass('rmv');
        $('#uploadicon1').removeClass('show');
    });

 
    $(document).ready(function() {
        $("#banner-form").validate({
            ignore: [],
            rules:{
                category_id: {
                    required: true
                }
            },
            messages:{
                category_id: {
                    required: "Category is required."
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
        $("#category_id").change(function () {
            if ($(this).val() !== "") {
                $("#category_id").removeClass('error');
                $("#category_id-error").remove();
            }
        });
    });
</script>
@endsection