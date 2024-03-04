@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Home Page Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>

        <div class="user-management-inner">
            <div class="section-block-title">
                <h3>Add Section</h3>
            </div>

            <div class="home-management-add">
                <form class="max-width-100" id="add-home-form" action="{{route('homeSubmit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                            @if($errors->has('title'))
                                <small class="text-danger">
                                    {{ $errors->first('title') }}
                                </small>
                            @endif
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Category</label>
                            <select class="form-control nice-select w-100" name="category_id" id="category_id">
                                <!-- <option value="">Select Category</option> -->
                                @foreach($menus as $menu)
                                    <option value="{{$menu->id}}" data-image-size="{{$menu->image_size}}">{{$menu->title}}</option>
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
                            <label>End Point</label>
                            <input type="text" class="form-control" name="end_point">
                            @if($errors->has('end_point'))
                                <small class="text-danger">
                                    {{ $errors->first('end_point') }}
                                </small>
                            @endif
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="8" name="description"></textarea>
                            @if($errors->has('description'))
                                <small class="text-danger">
                                    {{ $errors->first('description') }}
                                </small>
                            @endif
                        </div>

                        <div class="col-sm-4 form-group brochure-full-width-upload  custom-upload">
                            <label>Image <span id="span-ratio"> </span></label>
                            <div class="myform">
                                <div class="uploadbox"> 
                                    <span class="btn_upload"><input type="file" id="imag" title="" class="input-img" accept="image/*" name="image" data-width="" data-height=""/><img id="uploadicon1" src="{{asset('assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
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
                    <div class="form-submit-btn">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    
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
        var fileInput = this;
        var file = fileInput.files[0];
        if (file) {
            var img = new Image();
            img.src = window.URL.createObjectURL(file);
            
            var minimumwidth = $("#imag").attr('data-width');
            var minimumheight = $("#imag").attr('data-height');

            img.onload = function() {
                if (img.height < minimumheight && img.width < minimumwidth) {
                    $(fileInput).val('');
                    alert(`Invalid aspect ratio. Please choose an image with a greater than ${minimumwidth}:${minimumheight} ratio.`);
                }else{
                    var imgControlName = "#ImgPreview";
                    readURL(fileInput, imgControlName);
                    $('#uploadicon1').addClass('show');
                    $('.preview1').addClass('prev');
                    $('.btn-rmv1').addClass('rmv');
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

    $(".nice-select").niceSelect();

    $(document).ready(function() {
        $('#category_id').change();
        $("#add-home-form").validate({
            ignore: [],
            rules:{
                title: {
                    required: true
                },
                category_id: {
                    required: true
                },
                end_point: {
                    required: true
                },
                description: {
                    required: true
                },
                image: {
                    required: true
                }
            },
            messages:{
                title:{
                    required: "Title field is required."
                },
                category_id: {
                    required: "Category field is required."
                },
                end_point: {
                    required: "End point field is required."
                },
                description: {
                    required: "Description is required."
                },
                image: {
                    required: "Image field is required."
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

    $("#category_id").change(function () {
        if ($(this).val() !== "") {
            $("#category_id").removeClass('error');
            $("#category_id-error").empty(); 

            var selectedOption = $(this).find(':selected');
            var imageSize = selectedOption.data('image-size');

            $("#span-ratio").text(`( Ratio ${imageSize} )`);

            var [width, height] = imageSize.split('*');

            $("#imag").attr("data-width",width);
            $("#imag").attr("data-height",height);

            $("#imag").val("");
            $("#ImgPreview").attr("src", "");
            $('.preview1').removeClass('prev');
            $('.btn-rmv1').removeClass('rmv');
            $('#uploadicon1').removeClass('show');
        }
    });
</script>
@endsection