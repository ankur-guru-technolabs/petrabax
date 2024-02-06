@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Brochure management</h2>
        </div>
        <div class="video-management-inner brochure-management">
            <div class="video-content ">
                <div class="back-to-order-link d-flex align-items-center">
                    <a href="{{route('brochureList')}}"><i class="fa-solid fa-chevron-left"></i></a>
                    <h5 class="mx-auto">Edit</h5>
                </div>
                <form id="brochure-form" action="{{route('brochureUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="id" value="{{$brochure->id}}">
                        <div class="col-sm-4 form-group">
                            <label>Brochure Name</label>
                            <input type="text" class="form-control" name="name" value="{{$brochure->name}}">
                            @if($errors->has('name'))
                                <small class="text-danger">
                                    {{ $errors->first('name') }}
                                </small>
                            @endif
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Select Category</label>
                            <select class="nice-select form-control" name="category_id" id="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" {{$cat->id == $brochure->category_id  ? 'selected' : ''}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <p id="cat-error"></p>
                            @if($errors->has('category_id'))
                                <small class="text-danger">
                                    {{ $errors->first('category_id') }}
                                </small>
                            @endif
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Order</label>
                            <select class="nice-select form-control" id="order" name="order">
                                <option value="">Please Select Category First</option>
                            </select>
                            <p id="order-error"></p>
                            @if($errors->has('order'))
                            <small class="text-danger">
                                {{ $errors->first('order') }}
                            </small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group brochure-full-width-upload  custom-upload">
                            <label>Image Upload</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag" title="" class="input-img" accept="image/*" name="image"/><img class="preview1 prev" id="uploadicon1" src="{{ asset('/brochure/'.$brochure->image) }}" alt="Gallery Add">
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
                        <div class="col-sm-4 form-group  custom-upload">
                            <label>PDF Upload</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag2" title="" class="input-img" accept="application/pdf" name="pdf"/><img id="uploadicon2" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                        <img id="ImgPreview2" src="{{ asset('/assets_admin/images/pdf.png') }}" class="preview2" />
                                        <input type="button" id="removeImage2" value="x" class="btn-rmv2" />
                                    </span>
                                </div>
                                @if($errors->has('pdf'))
                                    <small class="text-danger">
                                        {{ $errors->first('pdf') }}
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

    $("#imag2").change(function() {
        // add your logic to decide which image control you'll use
        // var imgControlName = "#ImgPreview2";
        // readURL(this, imgControlName);
        var basePath = window.location.origin;
        $(".preview2").attr("src",basePath + "/assets_admin/images/pdf.png");
        $('#uploadicon2').addClass('show');
        $('.preview2').addClass('prev');
        $('.btn-rmv2').addClass('rmv');
    });

    $("#removeImage1").click(function(e) {
        e.preventDefault();
        $("#imag").val("");
        $("#ImgPreview").attr("src", "");
        $('.preview1').removeClass('prev');
        $('.btn-rmv1').removeClass('rmv');
        $('#uploadicon1').removeClass('show');
    });

    $("#removeImage2").click(function(e) {
        e.preventDefault();
        // $("#imag2").val("");
        // $("#ImgPreview2").attr("src", "");
        // $('.preview2').removeClass('prev');
        $('.btn-rmv2').removeClass('rmv');
        // $('#uploadicon2').removeClass('show');
    });

    $(window).on('load', function () {
         $("#category_id").trigger('change');
    });
    $(document).ready(function() {
        $('#uploadicon2').addClass('show');
        $('.preview2').addClass('prev');
        $("#brochure-form").validate({
            ignore: [],
            rules:{
                name: {
                    required: true
                },
                category_id: {
                    required: true
                },
                order: {
                    required: true
                },
            },
            messages:{
                name:{
                    required: "Name filed is required."
                },
                category_id: {
                    required: "Category is required."
                },
                order: {
                    required: "Order field is required."
                },
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
                    if(fieldName == 'order'){
                        $('#order-error').html(error);
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
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : "{{ url('admin/brochure/category/count') }}/" + $(this).val(),
                    type : 'GET',
                    dataType : 'json',
                    success : function(result){
                        $("#order").niceSelect('destroy');
                        $("#order").empty(); 
                        $('#order').append($('<option>').text("Please Select Order").attr('value', ''));
                        for (let i=1; i<=result+1; i++) {
                            var option = $('<option>').text(i).attr('value', i);
                            if (i == {{ $brochure->order }}) {
                                option.attr('selected', 'selected');
                            }
                            $('#order').append(option);
                        } 

                        $("#order").niceSelect();
                    }
                });
            }else{
                $("#order").niceSelect('destroy');
                $("#order").empty(); 
                $('#order').append($('<option>').text("Please Select Category First").attr('value', ''));
                $("#order").niceSelect(); 
            }
        });
        $("#order").change(function () {
            if ($(this).val() !== "") {
                $("#order").removeClass('error');
                $("#order-error").empty(); 
            }
        });
    });
</script>
@endsection