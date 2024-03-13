@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header d-flex align-items-center">
            <h2>Category</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner">
            <div class="section-block-title">
                <h3>Edit Category</h3>
            </div>
            <div class="video-content">
                <form action="{{route('categoryUpdate')}}" method="post" id="category-edit-form">
                    @csrf 
                    <input type="hidden" class="form-control" name="id" value="{{$category->id}}">
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
    });
</script>
@endsection