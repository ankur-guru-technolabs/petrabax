@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="section-header d-flex align-items-center">
        <h2 class="mb-0">Profile</h2>
        @include('admin.Common.admin-profile-menu')
    </div>
    <div class="user-management-inner user-profile-section">
        <form method="post" action="{{route('updateProfile')}}" id="update-profile" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{$admin_data->id}}">
                <div class="col-12 form-group custom-profile-upload">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image"/>
                            <label for="imageUpload"><img src="{{asset('assets_admin/images/edit-profile.png')}}" alt="edit"></label>
                        </div>
                        <div class="avatar-preview">
                            @if(Auth::user()->profile_image)
                                <div id="imagePreview" style="background-image:url('{{asset('profile/'.$admin_data->profile_image)}}')"></div>
                            @else
                                <img id="uploadicon" src="{{asset('assets_admin/images/gallery-add.png')}}" alt="Gallery Add">
                                <div id="imagePreview" style="background-image: url();"></div>
                            @endif
                        </div>
                    </div>
                </div>
                <h3 class="col-12 form-group">Details</h3>
                <div class="col-sm-4 form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{$admin_data->first_name}}">
                </div>
                <div class="col-sm-4 form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{$admin_data->last_name}}">
                </div>
                <div class="col-sm-4 form-group">
                    <label>Email Address *</label>
                    <input type="email" class="form-control" name="email" value="{{$admin_data->email}}">
                </div>

                <h3 class="col-12 form-group mt-4">Update your password</h3>
                <div class="col-sm-4 form-group">
                    <label>New Password</label>
                    <div class="position-relative">
                        <input id="password-field1" name="password" type="password" class="form-control custom-form-control" placeholder="New Password">
                        <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                    </div>
                </div>
                <div class="col-sm-4 form-group">
                    <label>Confirm Password</label>
                    <div class="position-relative">
                        <input id="password-field" name="cpwd" type="password" class="form-control custom-form-control" placeholder="Confirm Password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                    </div>
                </div>
                <div class="col-sm-12 form-group mb-0">
                    <button class="update-profile-btn" type="submit">Update Your Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('jscontent')
<script>
    $(document).ready(function() {
        $($.validator.addMethod("strongPassword", function(value, element) {
            if (!value) {
                return true;  
            }
            var hasMinLength = value.length >= 8;
            var hasUpperCase = /[A-Z]/.test(value);
            var hasLowerCase = /[a-z]/.test(value);
            var hasDigit = /\d/.test(value);
            var hasSpecialChar = /[@$!%*?&]/.test(value);
            var errorMessages = [];
            if (!hasMinLength || !hasUpperCase || !hasLowerCase || !hasDigit || !hasSpecialChar) {
                errorMessages.push("Password must be at least 8 characters long and include an uppercase letter, a lowercase letter, a numeric digit, and a special character (@ $ ! % * ? &).");
            }
            this.settings.messages[element.name].strongPassword = errorMessages.join("<br>");
            return hasMinLength && hasUpperCase && hasLowerCase && hasDigit && hasSpecialChar;
        }, "Password requirements not met."));
        $("#update-profile").validate({
            rules: {
                first_name: {
                    required: true,
                    maxlength: 50,
                },
                last_name: {
                    required: true,
                    maxlength: 50,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    strongPassword: true,
                },
                cpwd: {
                    equalTo: "#password-field1",
                }
            },
            messages: {
                first_name: {
                    required: "Please enter your first name",
                    maxlength: "First name cannot be more than 50 characters",
                },
                last_name: {
                    required: "Please enter your last name",
                    maxlength: "Last name cannot be more than 50 characters",
                },
                email: {
                    required: "Please enter a valid email address",
                    email: "Email must be a valid Email",
                },
                password: {
                    required: "Please choose a secure password",
                    passwordLength: "Password must be at least 8 characters and meet the specified criteria.",
                },
                cpwd: {
                    required: "Please confirm your chosen password",
                    equalTo: "Password and confirm password should be the same",
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                    $('#uploadicon').hide();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    });
</script>
@endsection
