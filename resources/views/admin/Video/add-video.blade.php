@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Video management</h2>
        </div>
        <div class="video-management-inner brochure-management">
            <div class="video-content">
            <form id="video-form" action="{{route('videoSubmit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Video Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                            @if($errors->has('title'))
                                <small class="text-danger">
                                    {{ $errors->first('title') }}
                                </small>
                            @endif
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Video URL</label>
                            <input type="text" class="form-control" name="url" id="url">
                            @if($errors->has('url'))
                                <small class="text-danger">
                                    {{ $errors->first('url') }}
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
                        <div class="col-sm-4 form-group brochure-full-width-upload custom-upload">
                            <label>Video Upload</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag" title="" class="input-img" accept="video/*" name="video"/><img id="uploadicon1" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                        <img id="ImgPreview" src="" class="preview1" />
                                        <input type="button" id="removeImage1" value="x" class="btn-rmv1" />
                                    </span>
                                </div>
                                @if($errors->has('video'))
                                    <small class="text-danger">
                                        {{ $errors->first('video') }}
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-4 form-group brochure-full-width-upload custom-upload">
                            <label>Thumbnail Upload ( Ratio 362*207 )</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag2" title="" class="input-img" accept="image/*" name="thumbnail"/><img id="uploadicon2" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                        <img id="ImgPreview2" src="" class="preview2" />
                                        <input type="button" id="removeImage2" value="x" class="btn-rmv2" />
                                    </span>
                                </div>
                                @if($errors->has('thumbnail'))
                                    <small class="text-danger">
                                        {{ $errors->first('thumbnail') }}
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
<script type="text/javascript">
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
        // var imgControlName = "#ImgPreview";
        // readURL(this, imgControlName);
        var basePath = window.location.origin;
        $(".preview1").attr("src",basePath + "/assets_admin/images/video.png");
        $('#uploadicon1').addClass('show');
        $('.preview1').addClass('prev');
        $('.btn-rmv1').addClass('rmv');
    });

    // $("#imag2").change(function() {
    //     // add your logic to decide which image control you'll use
    //     var imgControlName = "#ImgPreview2";
    //     readURL(this, imgControlName);
    //     $('#uploadicon2').addClass('show');
    //     $('.preview2').addClass('prev');
    //     $('.btn-rmv2').addClass('rmv');
    // });

    $("#imag2").change(function() {
        var fileInput = this;
        var file = fileInput.files[0];
        if (file) {
            var img = new Image();
            img.src = window.URL.createObjectURL(file);
            
            img.onload = function() {
                if (img.height < 207 && img.width < 362) {
                    $(fileInput).val('');
                    alert('Invalid aspect ratio. Please choose an image with a greater than 207:362 ratio.');
                }else{
                    var imgControlName = "#ImgPreview2";
                    readURL(fileInput, imgControlName);
                    $('#uploadicon2').addClass('show');
                    $('.preview2').addClass('prev');
                    $('.btn-rmv2').addClass('rmv');
                }
            };
        }
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
        $("#video-form").validate({
            ignore: [],
            rules:{
                url: {
                    required: function (element) {
                        return ($("#imag").val().length == 0);
                    }
                },
                video: {
                    required: function (element) {
                        return ($("#url").val().length == 0);
                    }
                },
                thumbnail: {
                    required: true
                },
                category_id: {
                    required: true
                },
                title: {
                    required: true
                }
            },
            messages:{
                url: {
                    required: "Url field is required when video is empty."
                },
                video: {
                    required: "Video field is required when url is empty."
                },
                thumbnail: {
                    required: "Thumbnail field is required."
                },
                category_id: {
                    required: "Category id field is required."
                },
                title: {
                    required: "Title field is required."
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
                if ($("#url").val().length !== 0 && $("#imag").val().length !== 0) {
                    alert("Please fill only url or video");
                    return false;
                }
                form.submit();
            },
            success: function (label, element) {
                var fieldName = $(element).attr('name');
                if (fieldName === 'url') {
                    $("#imag").removeClass('error');
                    $("#imag-error").remove();
                } else if (fieldName === 'video') {
                    $("#url").removeClass('error');
                    $("#url").next('.error').remove();
                }
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