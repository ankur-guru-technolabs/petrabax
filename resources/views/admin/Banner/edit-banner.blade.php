@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header d-flex align-items-center">
            <h2>Banner management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner brochure-management">
            <div class="section-block-title">
                <h3>Edit Banner</h3>
            </div>
            <div class="video-content ">
                <form id="banner-form" action="{{route('bannerUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="id" value="{{$banner->id}}">
                        <div class="col-sm-4 form-group">
                            <label>Select Banner Category</label>
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
                            <label>Upload Banner Image <span>( Ratio 1000*300 )</span></label>
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
        var fileInput = this;
        var file = fileInput.files[0];
        if (file) {
            var img = new Image();
            img.src = window.URL.createObjectURL(file);
            
            img.onload = function() {
                if (img.height < 300 && img.width < 1000) {
                    $(fileInput).val('');
                    alert('Invalid aspect ratio. Please choose an image with a greater than 1000:300 ratio.');
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