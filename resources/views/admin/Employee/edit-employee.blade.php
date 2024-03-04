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