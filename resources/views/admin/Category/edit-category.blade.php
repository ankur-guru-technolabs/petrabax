@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header d-flex align-items-center">
            <h2>Category</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner">
            @if($category->main_category_id == 0)
            <div class="section-block-title">
                <h3>Edit Category</h3>
            </div>
            <div class="video-content">
                <form action="{{route('categoryUpdate')}}" method="post" id="category-edit-form">
                    @csrf 
                    <input type="hidden" class="form-control" name="id" value="{{$category->id}}">
                    <input type="hidden" name="main_category_id" id="main_category_id" value="0">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$category->name}}">
                            @if($errors->has('name'))
                                <small class="text-danger">
                                    {{ $errors->first('name') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="form-submit-btn-list">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
            @else
            <div class="section-block-title mt-3">
                <h3>Edit Sub Category</h3>
            </div>
            <div class="video-content">
                <form action="{{route('categoryUpdate')}}" method="post" id="sub-category-form">
                    @csrf 
                    <input type="hidden" class="form-control" name="id" value="{{$category->id}}">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Category Selection</label>
                            <select class="form-control mySelect" name="main_category_id" id="main_category_id">
                                <option value="">Select</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" {{($cat->id == old('main_category_id', $category->main_category_id))  ? 'selected' : ''}}>{{$cat->name}}</option>
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
                        <div class="col-sm-4 form-group">
                            <label>Sub Category</label>
                            <input type="text" class="form-control" name="name" value="{{$category->name}}">
                            @if($errors->has('name'))
                                <small class="text-danger">
                                    {{ $errors->first('name') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="form-submit-btn-list">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type="text/javascript">
    $(document).ready(function() {
        $("#category-edit-form").validate({
            rules:{
                name: {
                    required: true
                }
            },
            messages:{
                name:{
                    required: "Name filed is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                $('.text-danger').text('');
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("#sub-category-edit-form").validate({
            ignore: [],
            rules:{
                main_category_id: {
                    required: true
                },
                name: {
                    required: true
                }
            },
            messages:{
                main_category_id: {
                    required: "Category field is required."
                },
                name:{
                    required: "Sub Category filed is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                $('.text-danger').text('');
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("#main_category_id").change(function () {
            if ($(this).val() !== "") {
                $("#main_category_id").removeClass('error');
                $("#main_category_id-error").remove();
            }
        });
    });
</script>
@endsection