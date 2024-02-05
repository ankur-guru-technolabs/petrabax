@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="role-permission-section">
        <div class="section-header">
            <h2>Edit New Emplyoee</h2>
        </div>
        <div class="role-permission-inner">
            <form id="employee-edit-form" action="{{route('employeeUpdate')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$employee->id}}">
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name',$employee->name)}}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email',$employee->email)}}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Roles</label>
                        <select class="form-control nice-select" name="role_id">
                            <option value="">Select</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}"  {{($role->id == old('role_id', $employee->role_id))  ? 'selected' : ''}}>{{$role->name}}</option>
                            @endforeach
                        </select>
                        <p id="role-error"></p>
                        @error('role_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="+31 574 8654 879" name="contact" value="{{old('contact',$employee->contact)}}">
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field1" type="password" class="form-control" name="password" placeholder="Password"  value="{{ old('password') }}">
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                    </div>
                </div>
                
                @php
                   $permission_array = explode(',',$employee->permission)
                @endphp
                <div class="row role-permission-list">
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-1" value="1" {{in_array(1,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-1">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-2" value="2" {{in_array(2,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-2">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-3" value="3" {{in_array(3,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-3">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-4" value="4" {{in_array(4,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-4">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-5" value="5" {{in_array(5,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-5">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-6" value="6" {{in_array(6,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-6">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-7" value="7" {{in_array(7,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-7">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-8" value="8" {{in_array(8,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-8">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-9" value="9" {{in_array(9,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-9">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" name="permission[]" id="role-10" value="10" {{in_array(10,old('permission',$permission_array)) ? 'checked' : ''}}>
                        <label for="role-10">User management</label>
                    </div>
                    @error('permission')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p id="permission-error"></p>
                </div>
                
                <div class="group-btn">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type="text/javascript">
    $(".nice-select").niceSelect();
    $(document).ready(function() {
        $("#employee-edit-form").validate({
            ignore: [],
            rules:{
                name: {
                    required: true
                },
                email: {
                    required: true
                },
                role_id: {
                    required: true
                },
                contact: {
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
                    required: "Name field is required."
                },
                email: {
                    required: "Email field is required."
                },
                role_id: {
                    required: "Role field is required."
                },
                contact: {
                    required: "Contact field is required."
                },
                'permission[]': {
                    required: "Please select at least one permission."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                var fieldName = $(element).attr('name');
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.next('.nice-select').next('#role-error').html(error);
                }else if(fieldName == 'permission[]'){
                    error.addClass('invalid-feedback');
                    $('#permission-error').html(error);
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

</script>
@endsection