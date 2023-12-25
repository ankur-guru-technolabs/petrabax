(function($) {
	
	"use strict";

	
	function sameheightform() {

		if( $('.register-section').length ) {

			var width = $(window).width();

			var imageheight = $('.register-section .user-register-image  img').height();
			
			if( $(window).width() > 576 ) {
				$('.register-section .user-register-form').css('height', imageheight).css('overflow-y','auto');
			}else {
				$('.register-section .user-register-form').css('height','auto');
			}
		}
	}

	function testimonial_carousel() {
		if($('.testimonial-carousel').length) {
	      $('.testimonial-carousel').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:true,
	            autoplay: true,
	            items:1
	        })
	    }
	}


	function attration_carousel() {
		if($('.attraction-carousel').length) {
	      $('.attraction-carousel').owlCarousel({
	            loop:true,
	            margin:15,
	            nav:true,
	            dots:false,
	            autoplay: true,
	            responsive:{
	              0:{
	                  items:1
	              },
	              480:{
	                  items:2
	              },
	              1000:{
	                  items:2
	              }
	          }
	        })
	    }
	}


	function hotalreview_carousel() {
		if($('.review-carousel').length) {
	      $('.review-carousel').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:true,
	            autoplay: true,
	            items:1
	        })
	    }
	}

	function hotel_include() {
		if($(".include-slider").length) {
			$('.include-slider').slick({
			  centerMode: true,
			  centerPadding: '10px',
			  slidesToShow: 2,
			  arrows: false,
			  autoplay: true
		
			});
		}
	}

	function roomphotoslider() {
		if($('.room-photo-slider').length) {
	      $('.room-photo-slider').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:true,
	            autoplay: true,
	            items:1,
	            dots:false
	        })
	    }
	}

	function searching_carousel() {
		if($('.searching-carousel').length) {
	      $('.searching-carousel').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:true,
	            autoplay: true,
	            items:1,
	            dots:false
	        })
	    } 
	}

	function client_carousel() {
		if($('.client-carousel').length) {
	      $('.client-carousel').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:false,
	            autoplay: true,
	            dots:false,
	            responsive: {
				    0: {
				      items: 1
				    },
				    320: {
				      items: 2
				    },
				    576: {
				      items: 3
				    },

				    1024: {
				      items: 4
				    },

				    1366: {
				      items: 6
				    }
				}
	        })
	    }
	}

	function tour_carousel() {
		if($('.tour-carousel').length) {
	      $('.tour-carousel').owlCarousel({
	            loop:true,
	            margin:30,
	            nav:true,
	            autoplay: true,
	            dots:false,
	            responsive: {
				    0: {
				      items: 1
				    },
				    576: {
				      items: 2
				    }
				}
	        })
	    }
	}

	function hideshow_password() {
		
		if($(".toggle-password").length) {
			$(".toggle-password").click(function() {

		      $(this).toggleClass("fa-eye fa-eye-slash");
		      var input = $($(this).attr("toggle"));
		      if (input.attr("type") == "password") {
		        input.attr("type", "text");
		      } else {
		        input.attr("type", "password");
		      }
		    });
		}
	}

	function pendingorder_carousel() {
		if($('.pending-box-image-carousel').length) {
	      $('.pending-box-image-carousel').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:true,
	            autoplay: true,
	            items:1,
	            dots:false
	        })
	    } 
	}

	function password_size() {
		$('input[type="password"]').focus(function() { 
	     // $('input[type="password"]').css('font-size','26px');
	    });

	    if( $('input[type="password"]').val() != "") {
	      //$('input[type="password"]').css('font-size','26px');
	    }
	    else {
	      //$('input[type="password"]').css('font-size','15px');
	    }
	}

	/* + Document On Ready */
	$(document).on("ready", function() {
		
		
		sameheightform();
	});	/* - Document On Ready /- */

	/* + Window On Resize */ 
	$( window ).on("resize",function() {
		sameheightform();

	});
	
	$( window ).on("load",function() {

		sameheightform();

		attration_carousel();

		testimonial_carousel();

		hotalreview_carousel();

		hotel_include();

		roomphotoslider();

		hideshow_password();

		password_size();

		searching_carousel();

		client_carousel();

		pendingorder_carousel();

		tour_carousel();

		var cururl = window.location.href;
		
	   // cururl = cururl.split('#')[0];

	 
	    var parts = cururl.split('/');

	    var lastSegment = parts.pop() || parts.pop();

	      if (window.location.href.indexOf("travel-agent-registration.html") > -1) {
	      	$('.site-login-btn.signup-btn').addClass('active');
	      }

	      if (window.location.href.indexOf("regular-user-registration.html") > -1) {
	      	$('.site-login-btn.signup-btn').addClass('active');
	      }
	      if (window.location.href.indexOf("login.html") > -1) {
	      	$('.site-login-btn.login-btn').addClass('active');
	      }


	    if($(".nice-select").length){
	       $('select.nice-select').niceSelect();
	    } 

	});

})(jQuery);