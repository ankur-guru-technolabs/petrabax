// HIGHTLIGHT SIGNUP AND LOGIN BUTTON IN NAVBAR

var cururl = window.location.href;

var parts = cururl.split('/');

var lastSegment = parts.pop() || parts.pop();

if (window.location.href.indexOf("travel-agent") > -1) {
  $('.site-login-btn.signup-btn').addClass('active');
}

if (window.location.href.indexOf("regular-user") > -1) {
  $('.site-login-btn.signup-btn').addClass('active');
}
if (window.location.href.indexOf("login") > -1) {
  $('.site-login-btn.login-btn').addClass('active');
}
 
// OTP VERIFY FILE 

// FOR TAB

let digitValidate = function(ele){
  ele.value = ele.value.replace(/[^0-9]/g,'');
}

let tabChange = function(val){
  let ele = document.querySelectorAll('input.otp-input');
  if(ele[val-1].value != ''){
    ele[val].focus()
  }else if(ele[val-1].value == ''){
    ele[val-2].focus()
  }   
} 

// REGISTER TRAVEL AGENT 

// FORM SUBMIT

$(document).ready(function() {
  $($.validator.addMethod("strongPassword", function(value, element) {
    var hasMinLength = value.length >= 8;
    var hasUpperCase = /[A-Z]/.test(value);
    var hasLowerCase = /[a-z]/.test(value);
    var hasDigit = /\d/.test(value);
    var hasSpecialChar = /[@$!%*?&]/.test(value);
    var errorMessages = [];
    if (!hasMinLength) {
        errorMessages.push("Password must be at least 8 characters long.");
    }
    if (!hasUpperCase) {
        errorMessages.push("Password must include at least one uppercase letter.");
    }
    if (!hasLowerCase) {
        errorMessages.push("Password must include at least one lowercase letter.");
    }
    if (!hasDigit) {
        errorMessages.push("Password must include at least one numeric digit.");
    }
    if (!hasSpecialChar) {
        errorMessages.push("Password must include at least one special character (@ $ ! % * ? &).");
    }
    this.settings.messages[element.name].strongPassword = errorMessages.join("<br>");
    return hasMinLength && hasUpperCase && hasLowerCase && hasDigit && hasSpecialChar;
  }, "Password requirements not met."));
  $("#register-travel-agent-form").validate({
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
          secondary_email: {
              email: true,
          },
          password: {
              required: true,
              strongPassword: true,
          },
          cpwd: {
              required: true,
              equalTo: "#password-field",
          },
          agency: {
            required: true,
          },
          arc: {
            required: true,
          },
          address: {
            required: true,
          },
          city: {
            required: true,
          },
          state: {
            required: true,
          },
          country: {
            required: true,
          },
          zip_code: {
            required: true,
          },
          phone_number: {
            required: true,
          },
          terms: {
            required: true,
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
          secondary_email: {
              email: "Please enter a valid secondary email address",
          },
          password: {
              required: "Please choose a secure password",
              passwordLength: "Password must be at least 8 characters and meet the specified criteria.",
          },
          cpwd: {
              required: "Please confirm your chosen password",
              equalTo: "Password and confirm password should be the same",
          },
          agency: {
              required: "Please enter the name of your travel agency",
          },
          arc: {
              required: "Please enter your ARC, IATAN, or CLIA number",
          },
          address: {
              required: "Please enter your agency's address",
          },
          city: {
              required: "Please enter the name of your city",
          },
          state: {
              required: "Please enter the name of your state or province",
          },
          country: {
              required: "Please enter the name of your country",
          },
          zip_code: {
              required: "Please enter your zip code",
          },
          phone_number: {
              required: "Please enter a valid phone number",
          },
          terms: {
              required: "Please check the box to indicate your consent to the terms and conditions."
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
  $("#register-regular-user-form").validate({
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
              required: true,
              strongPassword: true,
          },
          cpwd: {
              required: true,
              equalTo: "#password-field",
          },
          address: {
            required: true,
          },
          city: {
            required: true,
          },
          state: {
            required: true,
          },
          country: {
            required: true,
          },
          zip_code: {
            required: true,
          },
          phone_number: {
            required: true,
          },
          terms: {
            required: true,
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
          },
          address: {
              required: "Please enter your address",
          },
          city: {
              required: "Please enter your city",
          },
          state: {
              required: "Please enter your state or province",
          },
          country: {
              required: "Please enter your country",
          },
          zip_code: {
              required: "Please enter your zip code",
          },
          phone_number: {
              required: "Please enter a valid phone number",
          },
          terms: {
              required: "Please check the box to indicate your consent to the terms and conditions."
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
  $("#otp-verify-form").validate({
    rules: {
        digit1: {
            required: true,
            digits: true,
            maxlength: 1
        },
        digit2: {
            required: true,
            digits: true,
            maxlength: 1
        },
        digit3: {
            required: true,
            digits: true,
            maxlength: 1
        },
        digit4: {
            required: true,
            digits: true,
            maxlength: 1
        }
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      $('.text-danger').text('');
      $("#otp-error-message").text("Please enter 4 digit OTP");
      $("#otp-error-message").css("color", "red");
    },
    unhighlight: function (element, errorClass, validClass) {
      if ($("#digit1").val() && $("#digit2").val() && $("#digit3").val() && $("#digit4").val()) {
        $("#otp-error-message").text(""); // Remove the error message when all digits are filled
      }
    },
    submitHandler: function (form) {
      // Concatenate the values of all four OTP input fields
      let otpValue = '';
      for (let i = 1; i <= 4; i++) {
          let digit = $("#digit" + i).val();
          otpValue += digit;
      }
      $("#concate-otp input").val(otpValue);
      form.submit();
    }
  });
  $("#forgot-pwd-email-form").validate({
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
  $("#forgot-otp-verify-form").validate({
    rules: {
        digit1: {
            required: true,
            digits: true,
            maxlength: 1
        },
        digit2: {
            required: true,
            digits: true,
            maxlength: 1
        },
        digit3: {
            required: true,
            digits: true,
            maxlength: 1
        },
        digit4: {
            required: true,
            digits: true,
            maxlength: 1
        }
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      $('.text-danger').text('');
      $("#forgot-otp-error-message").text("Please enter 4 digit OTP");
      $("#forgot-otp-error-message").css("color", "red");
    },
    unhighlight: function (element, errorClass, validClass) {
      if ($("#digit1").val() && $("#digit2").val() && $("#digit3").val() && $("#digit4").val()) {
        $("#forgot-otp-error-message").text("");
      }
    },
    submitHandler: function (form) {
      let otpValue = '';
      for (let i = 1; i <= 4; i++) {
          let digit = $("#digit" + i).val();
          otpValue += digit;
      }
      $("#forgot-concate-otp input").val(otpValue);
      form.submit();
    }
  });
  $("#reset-password-form").validate({
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
});
