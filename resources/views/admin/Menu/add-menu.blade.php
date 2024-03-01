@extends('admin.master')
@section('content') 
<div class="admin-dashboard-main">
    <div class="admin-content-area">
        <div class="user-management-section">
            <div class="section-header d-flex align-items-center">
                <h2 class="mb-0">Menu Management</h2>
                @include('admin.Common.admin-profile-menu')
            </div>

            <div class="user-management-inner">
                <div class="section-block-title">
                    <h3>Add Menu</h3>
                </div>

                <div class="home-management-add menu-management">
                    <form action="{{route('menuSubmit')}}" method="post" id="add-menu-form">
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
                                <label>Order</label>
                                <input type="number" class="form-control" name="order" id="order">
                                @if($errors->has('order'))
                                    <small class="text-danger">
                                        {{ $errors->first('order') }}
                                    </small>
                                @endif
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Image</label>
                                <select class="form-control nice-select w-100" name="image_size" id="image_size">
                                    <option value=""></option>
                                    <option value="350*300">350*300</option>
                                    <option value="450*300">450*300</option>
                                </select>
                                @if($errors->has('image_size'))
                                    <small class="text-danger">
                                        {{ $errors->first('image_size') }}
                                    </small>
                                @endif
                                <p id="image-error"></p>
                            </div>
                        </div>
                        <div class="form-submit-btn">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $(".nice-select").niceSelect();
    $(document).ready(function() {
        $("#add-menu-form").validate({
            ignore: [],
            rules:{
                title: {
                    required: true
                },
                order: {
                    required: true
                },
                image_size: {
                    required: true
                }
            },
            messages:{
                title:{
                    required: "Title filed is required."
                },
                order:{
                    required: "Order filed is required."
                },
                image_size:{
                    required: "Image filed is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                var fieldName = $(element).attr('name');
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    if (fieldName == 'image_size') {
                        element.next('.nice-select').next('#image-error').html(error);
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

        $("#image_size").change(function () {
            if ($(this).val() !== "") {
                $("#image-error").removeClass('error');
                $("#image_size-error").remove();
            }
        });
    });
</script>
@endsection