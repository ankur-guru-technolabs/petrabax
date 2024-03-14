@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="role-permission-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Employee Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="role-permission-inner">
            <div class="section-block-title">
                <h3>Add Employee</h3>
            </div>
            <form id="employee-form" action="{{route('employeeSubmit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Role</label>
                        <select class="form-control nice-select" name="role_id">
                            <option value="">Select</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{$role->name}}</option>
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
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="+31 574 8654 879" name="contact" value="{{ old('contact') }}">
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Password</label>
                        <div class="position-relative hideshow-pwd">
                            <input id="password-field1" type="password" class="form-control" name="password" placeholder="Password"  value="{{ old('password') }}">
                            <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
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
        $("#employee-form").validate({
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
                password: {
                    required: true
                },
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
                    required: "Phone Number field is required."
                },
                password: {
                    required: "Password field is required."
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                var fieldName = $(element).attr('name');
                if (element.hasClass('nice-select')) {
                    $('.text-danger').text('');
                    error.addClass('invalid-feedback');
                    element.next('.nice-select').next('#role-error').html(error);
                }else {
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