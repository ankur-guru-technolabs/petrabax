@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Brochure management</h2>
        </div>
        <div class="video-management-inner brochure-management">
            <div class="video-content ">
                <form id="brochure-form" action="{{route('brochureSubmit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Brochure Name</label>
                            <input type="text" class="form-control" name="name">
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
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <p id="cat-error"></p>
                            @if($errors->has('category_id'))
                                <small class="text-danger">
                                    {{ $errors->first('category_id') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group brochure-full-width-upload  custom-upload">
                            <label>Image Upload</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag" title="" class="input-img" accept="image/*" name="image"/><img id="uploadicon1" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
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
                                        <img id="ImgPreview2" src="" class="preview2" />
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
        $("#imag2").val("");
        $("#ImgPreview2").attr("src", "");
        $('.preview2').removeClass('prev');
        $('.btn-rmv2').removeClass('rmv');
        $('#uploadicon2').removeClass('show');
    });

    $(document).ready(function() {
        $("#brochure-form").validate({
            ignore: [],
            rules:{
                name: {
                    required: true
                },
                category_id: {
                    required: true
                },
                image: {
                    required: true
                },
                pdf: {
                    required: true
                }
            },
            messages:{
                name:{
                    required: "Name field is required."
                },
                category_id: {
                    required: "Category field is required."
                },
                image: {
                    required: "Image field is required."
                },
                pdf: {
                    required: "PDF field is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.next('.nice-select').next('#cat-error').html(error);
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