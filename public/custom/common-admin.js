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
    // if (!hasUpperCase) {
    //     errorMessages.push("Password must include at least one uppercase letter.");
    // }
    // if (!hasLowerCase) {
    //     errorMessages.push("Password must include at least one lowercase letter.");
    // }
    // if (!hasDigit) {
    //     errorMessages.push("Password must include at least one numeric digit.");
    // }
    // if (!hasSpecialChar) {
    //     errorMessages.push("Password must include at least one special character (@ $ ! % * ? &).");
    // }
    this.settings.messages[element.name].strongPassword = errorMessages.join("<br>");
    return hasMinLength && hasUpperCase && hasLowerCase && hasDigit && hasSpecialChar;
  }, "Password requirements not met."));
  $("#forgot-pwd-admin-email-form").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        email: {
            required: "Please enter a valid email address",
            email: "Email must be a valid Email",
        },
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

  $("#forgot-otp-admin-verify-form").validate({
    rules: {
      otp: {
          required: true,
          digits: true,
          maxlength: 4
      }
    },
    messages: {
      otp: {
          required: "Please enter a valid otp",
          maxlength: "OTP must be only 4 digits",
      },
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      $('.text-danger').text('');
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    submitHandler: function (form) {
      form.submit();
    }
  });

  $("#reset-password-admin-form").validate({
    rules: {
        password: {
            required: true,
            strongPassword: true,
        },
        cpwd: {
            required: true,
            equalTo: "#password-field",
        },
    },
    messages: {
        password: {
            required: "Please choose a secure password",
            passwordLength: "Password must be at least 8 characters and meet the specified criteria.",
        },
        cpwd: {
            required: "Please confirm your chosen password",
            equalTo: "Password and confirm password should be the same",
        },
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

  $("#admin-login-form").validate({
    rules: {
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            strongPassword: true,
        },
    },
    messages: {
        email: {
            required: "Please enter a valid email address",
            email: "Email must be a valid Email",
        },
        password: {
            required: "Please choose a secure password",
            passwordLength: "Password must be at least 8 characters and meet the specified criteria.",
        },
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