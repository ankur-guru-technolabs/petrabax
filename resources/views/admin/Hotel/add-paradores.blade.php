@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="hotel-management">
        <div class="section-header">
            <h2>Hotel content management</h2>
        </div>
        <div class="management-inner">
            <h3 class="block-title">Content Management for Hotels</h3>
            <form>
                <div class="row">
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Hotel Name</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Hotel code</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Top pick</label>
                        <div class="custom-radion-box d-flex align-items-center">
                            <div class="custom-radio-btn">
                                <input type="radio" id="yes" name="toppick" checked>
                                <label class="mb-0" for="yes">Yes</label>
                            </div>
                            <div class="custom-radio-btn">
                                <input type="radio" id="no" name="toppick">
                                <label class="mb-0" for="no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Active</label>
                        <div class="custom-radion-box d-flex align-items-center">
                            <div class="custom-radio-btn">
                                <input type="radio" id="ayes" name="hactive" checked>
                                <label class="mb-0" for="ayes">Yes</label>
                            </div>
                            <div class="custom-radio-btn">
                                <input type="radio" id="ano" name="hactive">
                                <label class="mb-0" for="ano">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Features</label>
                        <div class="custom-radion-box d-flex align-items-center">
                            <div class="custom-radio-btn">
                                <input type="radio" id="fyes" name="features" checked>
                                <label class="mb-0" for="fyes">Yes</label>
                            </div>
                            <div class="custom-radio-btn">
                                <input type="radio" id="fno" name="features">
                                <label class="mb-0" for="fno">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="block-title">Content Management for Spain Paradores</h3>
                <div class="row">
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Parador Name</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Code</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Code Name</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Stars</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Active</label>
                        <div class="custom-radion-box d-flex align-items-center">
                            <div class="custom-radio-btn">
                                <input type="radio" id="pyes" name="pactive" checked>
                                <label class="mb-0" for="pyes">Yes</label>
                            </div>
                            <div class="custom-radio-btn">
                                <input type="radio" id="pno" name="pactive">
                                <label class="mb-0" for="pno">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Featured</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Address</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Description</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                </div>

                <h3 class="block-title">Services</h3>
                <div class="row">
                    <div class="col-md-4 small-form-group">
                        <label>Local Festivities</label>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                    <div class="col-md-4 small-form-group">
                        <label>Activities</label>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                    <div class="col-md-4 small-form-group">
                        <label>Things to see</label>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                    <div class="col-md-4 small-form-group">
                        <label>Regional Menu</label>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                    <div class="col-md-4 small-form-group">
                        <label>Nearby Paradores</label>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                </div>

                <h3 class="block-title">Means of Transport</h3>
                <div class="row">
                    <div class="col-sm-6 mb-3 form-group small-form-group custom-upload">
                        <label>Virtual Tour Movie</label>
                        <div class="custom-video-upload">
                            <input id="file-input" type="file" accept="video/*">
                            <div class="video-upload-icon"><i class="fa-regular fa-circle-play"></i></div>
                            <video id="video" width="100%" height="100%" controls></video>
                            <a href="#" class="video-delete"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 form-group brochure-full-width-upload  small-form-group custom-upload">
                        <label>Brochure</label>
                        <div class="myform">
                            <div class="uploadbox">
                                <span class="btn_upload"><input type="file" id="imag2" title="" class="input-img"/><img id="uploadicon2" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                    <img id="ImgPreview2" src="" class="preview2" />
                                    <input type="button" id="removeImage2" value="x" class="btn-rmv2" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="block-title">Picture</h3>
                <div class="row">
                    <div class="col-md-12 multiple-three-block-upload small-form-group">
                        <div class="upload-multiple-images">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn position-relative mb-0">
                                        <p><img src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery"></p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" accept="image/*">
                                        <div id="owl-carousel-multiple" class="upload__img-wrap"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="block-title">Room Types</h3>
                <div class="row">
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Code</label>
                        <input type="text" class="form-control large-form-control">
                    </div>

                    <div class="col-sm-4 form-group large-form-group">
                        <label>Original Name</label>
                        <input type="text" class="form-control large-form-control">
                    </div>

                    <div class="col-sm-4 form-group large-form-group">
                        <label>Name</label>
                        <input type="text" class="form-control large-form-control">
                    </div>

                    <div class="col-sm-8 form-group large-form-group">
                        <label>Name</label>
                        <textarea rows="8" class="form-control large-form-control"></textarea>
                    </div>
                    <div class="col-sm-4 form-group brochure-full-width-upload large-form-group custom-upload">
                        <label>Thumbnail</label>
                        <div class="myform">
                            <div class="uploadbox">
                                <span class="btn_upload"><input type="file" id="imag3" title="" class="input-img"/><img id="uploadicon3" src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                    <img id="ImgPreview3" src="" class="preview3" />
                                    <input type="button" id="removeImage3" value="x" class="btn-rmv3" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="block-title d-flex align-items-center">Content Management for Paradores Routes
                    <a class="ms-auto text-end" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pencil"></i></a>
                </h3>

                <div class="row">
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Code</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Name</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Trail Type</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Nights</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade paradores-routes" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Edit Paradores Routes</h3>
                <form>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Code</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Code Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Trails</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Itinerary</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Image</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Includes</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Not Include</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 form-group mb-0 text-center">
                            <button type="submit">Submit</button>
                        </div>
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

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function () {
            $(this).on('change', function (e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function (f, index) {
                    if (!f.type.match('image.*')) {
                        return;
                    }
                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                            $(".upload__btn p img").removeClass('show');
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var html = "<div class='upload__img-box'><div  style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                                $(".upload__btn p img").addClass('show');
                            }
                            reader.readAsDataURL(f);     
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function (e) {
            e.preventDefault();
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }

    $(document).ready(function () {
        ImgUpload();
    });

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
        var imgControlName = "#ImgPreview";
        readURL(this, imgControlName);
        $('#uploadicon1').addClass('show');
        $('.preview1').addClass('prev');
        $('.btn-rmv1').addClass('rmv');
    });

    $("#imag2").change(function() {
        var imgControlName = "#ImgPreview2";
        readURL(this, imgControlName);
        $('#uploadicon2').addClass('show');
        $('.preview2').addClass('prev');
        $('.btn-rmv2').addClass('rmv');
    });

    $("#imag3").change(function() {
        var imgControlName = "#ImgPreview3";
        readURL(this, imgControlName);
        $('#uploadicon3').addClass('show');
        $('.preview3').addClass('prev');
        $('.btn-rmv3').addClass('rmv');
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

    $("#removeImage3").click(function(e) {
        e.preventDefault();
        $("#imag3").val("");
        $("#ImgPreview3").attr("src", "");
        $('.preview3').removeClass('prev');
        $('.btn-rmv3').removeClass('rmv');
        $('#uploadicon3').removeClass('show');
    });

    /*  Video  Upload */
    const input = document.getElementById('file-input');
    const video = document.getElementById('video');
    const videoSource = document.createElement('source');

    $('video').removeClass('d-block');
    $('.video-close').removeClass('show');
    $('.video-upload-icon').addClass('show');

    input.addEventListener('change', function() {
        const files = this.files || [];

        if (!files.length) return;
        
        const reader = new FileReader();

        reader.onload = function (e) {
            $('video').addClass('d-block');
            $('.video-delete').addClass('show');
            $('.video-upload-icon').removeClass('show');

            videoSource.setAttribute('src', e.target.result);
            video.appendChild(videoSource);
            video.load();
            video.play();
        };
  
        reader.onprogress = function (e) {
            console.log('progress: ', Math.round((e.loaded * 100) / e.total));
        };
  
        reader.readAsDataURL(files[0]);

        $('body').on('click', ".video-delete", function (e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
                }
            }
            $(this).parent().parent().remove();
        });

    });
</script>
@endsection