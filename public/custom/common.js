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
  let ele = document.querySelectorAll('input');
  if(ele[val-1].value != ''){
    ele[val].focus()
  }else if(ele[val-1].value == ''){
    ele[val-2].focus()
  }   
} 
