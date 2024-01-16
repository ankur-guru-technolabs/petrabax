@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Video management</h2>
        </div>
        <div class="video-management-inner">
            <div class="video-content">
                <form>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Video URL</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Select Category</label>
                            <select class="nice-select form-control" required>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group brochure-full-width-upload custom-upload">
                            <label>Video Upload</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag" title="" class="input-img" accept="image/*"/><img id="uploadicon1" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                        <img id="ImgPreview" src="" class="preview1" />
                                        <input type="button" id="removeImage1" value="x" class="btn-rmv1" />
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group brochure-full-width-upload custom-upload">
                            <label>Thumbnail Upload</label>
                            <div class="myform">
                                <div class="uploadbox">
                                    <span class="btn_upload"><input type="file" id="imag2" title="" class="input-img" accept="image/*"/><img id="uploadicon2" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                        <img id="ImgPreview2" src="" class="preview2" />
                                        <input type="button" id="removeImage2" value="x" class="btn-rmv2" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-submit-btn-list">
                        <button type="button">Save</button>
                        <button type="button">Edit</button>
                        <button type="button">Delete</button>
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
        var imgControlName = "#ImgPreview";
        readURL(this, imgControlName);
        $('#uploadicon1').addClass('show');
        $('.preview1').addClass('prev');
        $('.btn-rmv1').addClass('rmv');
    });

    $("#imag2").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview2";
        readURL(this, imgControlName);
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
</script>
@endsection