(function($) {
	
	"use strict";
	
	function produce_carousel() {
		if($('.video-common-carousel').length) {
	      $('.video-common-carousel').owlCarousel({
	            loop:true,
	            margin:11,
	            nav:true,
	            dots:false,
	            autoplay: true,
	            responsive:{
	              0:{
	                  items:3
	              },
	              576:{
	                items:4
	              },
	              768:{
	                items:6
	              },
	          }
	        })
	    }
	}

	function password_toggle_show() {
		if($(".toggle-password").length) {
			$(".toggle-password").click(function() {
		        $(this).toggleClass("fa-eye fa-eye-slash");
		        var input = $($(this).attr("toggle"));
		        if (input.attr("type") == "password") {
		          input.attr("type", "text");
		          $(this).toggleClass("active");
		        } else {
		          input.attr("type", "password");
		          $(this).removeClass("active");
		        }
		    });
		}
	}

	function  home_slider()  { 
		if($(".topwebseries-carousel").length) {
			var $slider = $('.topwebseries-carousel');
			var $progressBar = $('.progress');
			var $progressBarLabel = $( '.slider__label' );
			  
		  	$slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
			    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
			    
			    $progressBar
			      .css('background-size', calc + '% 100%')
			      .attr('aria-valuenow', calc );
			    
			    $progressBarLabel.text( calc + '% completed' );
			});
		  
			$slider.slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				dots: false,
				speed: 1000,
				 responsive: [
				    {
				      breakpoint: 992,
				      settings: {
				        slidesToShow: 4,
				        slidesToScroll: 1,
				      },
				    },
				    {
				      breakpoint: 768,
				      settings: {
				        slidesToShow: 3,
				        slidesToScroll: 1,
				      },
				    },
				    {
				      breakpoint: 575,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 1,
				      },
				    },
				  ],
			});
		}
	}

	/* + Document On Ready */
	$(document).on("ready", function() {
		home_slider();

	});

	/* + Window On Resize */ 
	$( window ).on("resize",function() {

	});
	
	$( window ).on("load",function() {

		$("#followersmodal").modal('show');

		produce_carousel();
		password_toggle_show();
		home_slider();

		if($(".nice-select").length) {
			$(".nice-select").niceSelect();
		}

		$("#steps1").on("click",function() {
			$(".steps-list .steps-1").addClass("fill");
			$(".steps-list .steps-2").addClass("active");
			$("#steps-content-2").addClass("d-block");
			$("#steps-content-1").addClass("d-none");
		})

		$(".previous-steps").on("click",function() {
			$(".steps-list .steps-1").removeClass("fill");
			$(".steps-list .steps-2").removeClass("active");
			$("#steps-content-2").removeClass("d-block");
			$("#steps-content-1").removeClass("d-none");
		})

		
		$('input[name="usertype"]').on('click', function(e){
		    if(e.target.checked){
		       $('#usersignin').modal('show');
		       $('#signinmodal').modal('hide');
		    }
		});

		$('#usersignin').on('show.bs.modal', function () {
	        $('#usersignin').css('z-index', 1056);
	    });

	    $('#usersignin').on('hidden.bs.modal', function () {
	        $('#usersignin').css('z-index', 1055);
	    });

	   
	    $(".signup form button[type='submit']").on('click', function(e){
	    	$('#otppmodal').modal('show');
		    $('#signup').modal('hide');
	    });

	    $(".otppmodal form button[type='submit']").on('click', function(e){
	    	$('#otppmodal').modal('hide');
		    $('#emailverify').modal('show');
	    });

	    $(".change-password-content form button[type='submit']").on('click', function(e){
		    $('#changepassowrd').modal('show');
	    });

	    $(".notification-dropdown #drpclose").on("click",function() {
	    	$(".notification-dropdown").removeClass("show");
	    })

	   
	});

})(jQuery);