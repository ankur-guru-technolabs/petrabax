@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="hotel-management">
        <div class="section-header">
            <h2>Hotel content management</h2>
        </div>
        <div class="management-inner">
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
                        <label>State</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Country</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Country code</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Destination</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Email</label>
                        <input type="email" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Address</label>
                        <input type="text" class="form-control large-form-control">
                    </div>
                    <div class="col-sm-4 form-group large-form-group">
                        <label>Wildcards</label>
                        <select class="form-control nice-select large-form-control">
                            <option>Select</option>
                            <option>Select</option>
                            <option>Select</option>
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 small-form-group">
                        <label>Room’s Photos</label>
                        <div class="upload-multiple-images">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn  mb-0">
                                        <p><img src="{{ asset('/assets_admin/images/gallery-add.png')}}" alt="Gallery"></p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" accept="image/*">
                                        <div class="upload__img-wrap"></div>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 small-form-group">
                        <div class="row">
                            <label class="amenities-label">Amenities</label>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group large-form-group">
                        <label>Description hotel</label>
                        <textarea rows="3" class="form-control large-form-control"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 small-form-group">
                        <label>Zone</label>
                        <input type="text" class="form-control small-form-control">
                    </div>
                    <div class="col-sm-4 small-form-group">
                        <label>Coordinates (Lat/Long)</label>
                        <input type="text" class="form-control small-form-control">
                    </div>
                    <div class="col-sm-4 small-form-group">
                        <div class="small-form-group p-0">
                            <label>Category</label>
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
                <div class="row mb-3">
                    <div class="col-sm-4 small-form-group">
                        <div class="small-form-group p-0">
                            <label>Category Group</label>
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                    <div class="col-sm-4 small-form-group">
                        <div class="small-form-group p-0">
                            <label>Chain</label>
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                        <div class="small-form-group p-0">
                            <input type="text" class="form-control small-form-control">
                        </div>
                    </div>
                    <div class="col-sm-4 small-form-group">
                        <div class="small-form-group p-0">
                            <label>Segments</label>
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
                <div class="row mb-3">
                    <div class="col-sm-8 small-form-group mb-0">
                        <label>Accommodation Type</label>
                        <div class="row">
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                            <div class="col-sm-6 small-form-group">
                                <input type="text" class="form-control small-form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 small-form-group mb-0">
                        <label>Board</label>
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
                <div class="row">
                    <div class="col-sm-4 small-form-group mb-0">
                        <label>Room Stays (Bed Type)</label>
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
                    <div class="col-sm-4 small-form-group mb-0">
                        <label>Room Type</label>
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
            </form>
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

  </script> 
@endsection