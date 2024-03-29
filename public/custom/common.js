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
  $("#login-form").validate({
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
  $("#edit-travel-agent-form").validate({
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
            required: false,
            strongPassword: true,
        },
        cpwd: {
            required: false,
            equalTo: "#password-field",
        },
        agency: {
          required: function(element) {
              return $("#user_type").val() == "travel_agent";
          },
        },
        arc: {
            required: function(element) {
                return $("#user_type").val() == "travel_agent";
            },
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
        agency: {
          required: "Please enter the name of your travel agency",
        },
        arc: {
            required: "Please enter your ARC, IATAN, or CLIA number",
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
  $("#suggestion-form").validate({
    rules: {
        name: {
          required: true,
          maxlength: 50,
        },
        email: {
            required: true,
            email: true,
        },
        phone_number: {
          required: true,
        },
        message: {
          required: true,
          minlength: 10,
        }
    },
    messages: {
        name: {
          required: "Please enter your name",
          maxlength: "Name cannot be more than 50 characters",
        },
        email: {
          required: "Please enter a valid email address",
          email: "Email must be a valid Email",
        },
        phone_number: {
          required: "Please enter a valid contact number",
        },
        message: {
          required: "Please enter message",
          minlength: "Message cannot be less than 10 characters",
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

  // HOTEL PAGE

  $('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
  });

  $("#roomguest").on("click",function() {
    $(".room-select-dropdown").toggleClass("show"); 
  });

  $('.add:not(.child-add)').click(function () {   
    var th = $(this).closest('.wrap').find('.count');     
    th.val(+th.val() + 1);
  });
  
  $('.sub').click(function () {
    var th = $(this).closest('.wrap').find('.count');     
    if (th.val() > 1) th.val(+th.val() - 1);
  });

  $('.add.child-add').on("click",function () {
    if ($(this).prev().val() < 12) {
      $(this).prev().val(+$(this).prev().val() + 1);
    }
  });

  $('.sub.child-sub, .children-sub').click(function () {
    var th = $(this).closest('.wrap').find('.count');     
    if (th.val() > 0) th.val(+th.val() - 1);
  });

  $(document).click(function (e) {
    e.stopPropagation();
    var container = $(".filter-room-guest");
    //check if the clicked area is dropDown or not
    if (container.has(e.target).length === 0) {
        $('.room-select-dropdown').removeClass("show");
    }
  });
  
  // HOTEL LIST

  $(".mobile-view-widget-btn").on("click",function(){
    $(".left-sidebar-widget .sidebar-inner").toggleClass("active");
  });

  $("#min_price,#max_price").on('change', function () {
    $('#price-range-submit').show();
    var min_price_range = parseInt($("#min_price").val());
    var max_price_range = parseInt($("#max_price").val());
    if (min_price_range > max_price_range) {
      $('#max_price').val(min_price_range);
    }
    $("#slider-range").slider({
      values: [min_price_range, max_price_range]
    });
  });

  $("#min_price,#max_price").on("paste keyup", function () {                                        
    $('#price-range-submit').show();
    var min_price_range = parseInt($("#min_price").val());
    var max_price_range = parseInt($("#max_price").val());
    if(min_price_range == max_price_range){
      max_price_range = min_price_range + 100;
      $("#min_price").val(min_price_range);   
      $("#max_price").val(max_price_range);
    }
    $("#slider-range").slider({
      values: [min_price_range, max_price_range]
    });
  });


  $(function () {
    $("#slider-range").slider({
      range: true,
      orientation: "horizontal",
      min: 0,
      max: 10000,
      values: [0, 10000],
      step: 100,

      slide: function (event, ui) {
        if (ui.values[0] == ui.values[1]) {
          return false;
        }
        $("#min_price").val(ui.values[0]);
        $("#max_price").val(ui.values[1]);
      }
    });
    $("#min_price").val($("#slider-range").slider("values", 0));
    $("#max_price").val($("#slider-range").slider("values", 1));
  });

  // HOTEL DETAILS

  $("#includegst").click(function () {
    if ($(this).is(":checked")) {
      $(".gst-block-filed").toggleClass('show');
    } else {
      $(".gst-block-filed").RemoveClass('show');
    }
  });

  // PARADORES

  $('.masonry-grid').masonry({
    itemSelector: '.masonary-box',
  });

  $(document).click(function (e) {
    e.stopPropagation();
    var container = $(".filter-room-guest");
    if (container.has(e.target).length === 0) {
      $('.room-select-dropdown').removeClass("show");
    }
  });
});
