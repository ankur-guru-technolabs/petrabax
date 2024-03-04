@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="role-permission-section">
        <div class="section-header d-flex align-items-center">
            <h2>Role Permission</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="role-permission-inner">
            <div class="section-block-title">
                <h3>Edit Role</h3>
            </div>
            <form action="{{route('roleUpdate')}}" method="post" id="role-form">
                @csrf 
                <input type="hidden" name="id" value="{{$role->id}}">
                <div class="row">
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Role Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Role Name" value="{{$role->name}}">
                        @if($errors->has('name'))
                            <small class="text-danger">
                                {{ $errors->first('name') }}
                            </small>
                        @endif
                    </div>
                </div>
                <h4 class="permission-title">Permission</h4>
                @php
                   $permission_array = explode(',',$role->permission)
                @endphp
                <div class="row role-permission-list">
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-1" value="1" {{ in_array(1, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-1">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-2" value="2" {{ in_array(2, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-2">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-3" value="3" {{ in_array(3, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-3">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-4" value="4" {{ in_array(4, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-4">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-5" value="5" {{ in_array(5, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-5">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-6" value="6" {{ in_array(6, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-6">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-7" value="7" {{ in_array(7, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-7">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-8" value="8" {{ in_array(8, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-8">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-9" value="9" {{ in_array(9, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-9">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-10" value="10" {{ in_array(10, old('permission',$permission_array)) ? 'checked' : '' }}>
                        <label for="role-10">User management</label>
                    </div>
                    @error('permission')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p id="permission-error"></p>
                </div>

                <div class="form-submit-btn-list">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type="text/javascript">
    $(document).ready(function() {
        $("#role-form").validate({
            rules:{
                name: {
                    required: true
                },
                'permission[]': {
                    required: function(element) {
                        return $('input[name="permission[]"]:checked').length === 0;
                    }
                }
            },
            messages:{
                name:{
                    required: "Name filed is required."
                },
                'permission[]': {
                    required: "Please select at least one permission."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                var fieldName = $(element).attr('name');
                if(fieldName == 'permission[]'){
                    error.addClass('invalid-feedback');
                    $('#permission-error').html(error);
                } else{
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
</script>
@endsection