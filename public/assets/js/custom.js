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

	function orderimage_carousel() {
		if($('.order-image-carousel').length) {
	      	$('.order-image-carousel').owlCarousel({
	            loop:true,
	            margin:0,
	            nav:true,
	            autoplay: true,
	            items:1,
	            dots:false
	        })
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

		searching_carousel();

		client_carousel();

		pendingorder_carousel();

		tour_carousel();

		orderimage_carousel();

		var cururl = window.location.href;
	 
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

	    if($(".nice-select-2").length){
	       $('select.nice-select-2').niceSelect();
	    } 

	    if($('#daterangestart').length) {

		    //Default Start Date Value 

		    var today = new Date();

			today.setDate(today.getDate() +  3);

			today.setDate(today.getDate());

			var todaydate = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();


			document.querySelector("#daterangestart").value = todaydate;


			//Default End Date Value 

			var enddate = new Date();

			enddate.setDate(enddate.getDate() + 4);

			enddate.setDate(enddate.getDate());

			var enddatevalue = enddate.getDate()+'/'+(enddate.getMonth()+1)+'/'+enddate.getFullYear();

			document.querySelector("#daterangeend").value = enddatevalue;

		  
	     	$("#night").on("change", function() {
	      
				var today = new Date();

				today.setDate(today.getDate() + 3);

				today.setDate(today.getDate());
				var todaydate = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();

				if($("#daterangestart" != null) ) {				
					$('#daterangestart').val();
				}
				else {
					$('#daterangestart').val(todaydate);
				}


					var totalnights = parseInt($("#night").val(), 10);

					var totalnight =  totalnights + 3;

				    var tt = document.getElementById('daterangestart').value;
				
				    var date = new Date(tt);
				    var newdate = new Date(date);

				   	if($("#daterangestart" != null) ) {	
				    	newdate.setDate(newdate.getDate() + totalnights );
				    }
				    else {
				    	newdate.setDate(newdate.getDate() + totalnight );
				    }

				    var dd = newdate.getDate();
				    var mm = newdate.getMonth() + 1;
				   	var yy = newdate.getFullYear();
					var someFormattedDate = dd + '/' + mm + '/' + yy;
					document.getElementById('daterangeend').value = someFormattedDate;

					Date.prototype.addDays = function(days) {
					    //var date = new Date(this.valueOf());
					    var tt = document.getElementById('daterangestart').value;
					    var date = new Date(tt);



					    date.setDate(date.getDate() );

						date.setDate(date.getDate() + days);
						return date.getDate()+ '/' +(date.getMonth() + 1) + '/' + date.getFullYear();



					   //var date = date.setDate(date.getDate() + days);

					   // date.setDate(date.getDate() + days);

					    //return date.getDate()+ '/' +(date.getMonth() + 1) + '/' + date.getFullYear();
					}

					var date = new Date();
					if($("#daterangestart" != null) ) {	
						$('#daterangeend').val(date.addDays(totalnights));
					}
					else  {
						$('#daterangeend').val(date.addDays(totalnight));
					}
				

	   		});

	     	function populateEndDate() {
			  var date2 = $('#daterangestart').datepicker('getDate');
			  date2.setDate(date2.getDate() + 1);
			  $('#daterangeend').datepicker('setDate', date2);
			  $("#daterangeend").datepicker("option", "minDate", date2);
			}
	   	
			$('#daterangestart').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,
			    onClose: function(dateText,datePickerInstance) {
			        var oldValue = $(this).data('oldValue') || "";
			        if (dateText !== oldValue) {
			            $(this).data('oldValue',dateText);
			            $(this).trigger('dateupdated');
			        }
			    },
			    onSelect: function(selected) {
		         	populateEndDate();
		         	calculate();
			    }
			    
			}).datepicker("setDate", new Date());
			$('#daterangeend').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+4",
			    numberOfMonths: 1,
			    showOtherMonths: true,
			    onClose: function() {
	      			var dt1 = $('#daterangestart').datepicker('getDate');
			     	var dt2 = $('#daterangeend').datepicker('getDate');
			      	if (dt2 <= dt1) {
			        	var minDate = $('#daterangeend').datepicker('option', 'minDate');
			        	$('#daterangeend').datepicker('setDate', minDate);
			     	}
			    },
			    onSelect: function(selected) {
			    	$("#daterangestart").datepicker("option","maxDate", selected);
			    	calculate();
			    }
			}).datepicker("setDate", new Date());
			
			function calculate() {
			    var d1 = $('#daterangestart').datepicker('getDate');
			    var d2 = $('#daterangeend').datepicker('getDate');
			    var oneDay = 24*60*60*1000;
			    var diff = 0;
			    if (d1 && d2) {
			      diff = Math.round(Math.abs((d2.getTime() - d1.getTime())/(oneDay)));
			    }
			    $('#night').val(diff);
			}
			if($(".featured-hotels-box").length) {
			    $(".book-btn a").on("click", function() {
			    	var hotal_title  = $(".featured-hotels-box .hotel-content h2").html();
			    	document.querySelector("#filter-serch-input").value = hotal_title;
			    })
			}
		}

		if($(".filter-content").length) {
	        $('.add:not(.child-add,.children-add)').click(function () {   
	          var th = $(this).closest('.wrap').find('.count');     
	          th.val(+th.val() + 1);
	        });

	        $('.roomadd').click(function () {   
	          if ($(this).prev().val() < 4) {
	            $(this).prev().val(+$(this).prev().val() + 1);
	          }

	          var roomcount = $('.totalroom-count').val();

	          if($('.totalroom-count').val() == 1) {
	            $(".room-total-inner-dropdown-1").addClass('active');
	          } 
	          else if($('.totalroom-count').val() == 2) {
	            $(".room-total-inner-dropdown-2").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 3) {
	            $(".room-total-inner-dropdown-3").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 4) {
	            $(".room-total-inner-dropdown-4").addClass('active');
	          }

	        });

	        $('.roomsub').click(function () {
	          var th = $(this).closest('.wrap').find('.count');     
	          if (th.val() > 1) th.val(+th.val() - 1);

	          var totalroom = $('.totalroom-count').val();
	          
	          if($('.totalroom-count').val() == 1) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	          } 
	          else if($('.totalroom-count').val() == 2) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	             $(".room-total-inner-dropdown-2").addClass('active');
	          } 
	          else if($('.totalroom-count').val() == 3) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	          } 
	          else if($('.totalroom-count').val() == 4) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	          } 

	        });

	        $('.children-add').click(function () {   
	         // var th = $(this).closest('.wrap').find('.count');

	          //th.val(+th.val() + 1)

	           if ($(this).prev().val() < 12) {
	            $(this).prev().val(+$(this).prev().val() + 1);
	          }
	         
	      
	          var coundchild = $('.childerns-count').val();

	          $("[id*='room-total-inner-dropdown-']" ).each(function () { 
	            var roomid = $(this).attr('id');
	         
	            if($("[id*="+roomid+"] .childerns-count").val() == 1) {
	              $("[id*="+roomid+"] .children-box-1").addClass('active');
	              $("[id*="+roomid+"] .child-block.dropdown-block").addClass('show');
	            } 
	            else if($("[id*="+roomid+"] .childerns-count").val() == 2) {
	              $("[id*="+roomid+"] .children-box-2").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 3) {
	              $("[id*="+roomid+"] .children-box-3").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 4) {
	              $("[id*="+roomid+"] .children-box-4").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 5) {
	              $("[id*="+roomid+"] .children-box-5").addClass('active');
	            }
	              else if($("[id*="+roomid+"] .childerns-count").val() == 6) {
	              $("[id*="+roomid+"] .children-box-6").addClass('active');
	            }
	              else if($("[id*="+roomid+"] .childerns-count").val() == 7) {
	              $("[id*="+roomid+"] .children-box-7").addClass('active');
	            }
	              else if($("[id*="+roomid+"] .childerns-count").val() == 8) {
	              $("[id*="+roomid+"] .children-box-8").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 9) {
	              $("[id*="+roomid+"] .children-box-9").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 10) {
	              $("[id*="+roomid+"] .children-box-10").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 11) {
	              $("[id*="+roomid+"] .children-box-11").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 12) {
	              $("[id*="+roomid+"] .children-box-12").addClass('active');
	            }
	          });
	        });

	          $('.sub:not(.children-sub)').click(function () {
	            var th = $(this).closest('.wrap').find('.count');     
	            if (th.val() > 1) th.val(+th.val() - 1);
	          });

	          $('.add.child-add').on("click",function () {
	            if ($(this).prev().val() < 12) {
	              $(this).prev().val(+$(this).prev().val() + 1);
	            }
	          });

	         $('.sub.child-sub').click(function () {
	            var th = $(this).closest('.wrap').find('.count');     
	            if (th.val() > 0) th.val(+th.val() - 1);
	          });

	          $('.children-sub').click(function () {
	            var th = $(this).closest('.wrap').find('.count');     
	            if (th.val() > 0) th.val(+th.val() - 1);
	             var coundchild = $('.childerns-count').val();

	            $("[id*='room-total-inner-dropdown-']" ).each(function () { 
	            var roomid = $(this).attr('id');
	           

	            if($("[id*="+roomid+"] .childerns-count").val() == 0) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .child-block.dropdown-block").removeClass('show');
	            } 
	            else if($("[id*="+roomid+"] .childerns-count").val() == 1) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	            } 
	            else if($("[id*="+roomid+"] .childerns-count").val() == 2) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 3) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	            }
	           else if($("[id*="+roomid+"] .childerns-count").val() == 4) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 5) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 6) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 7) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-7").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 8) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-7").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-8").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 9) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-7").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-8").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-9").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 10) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-7").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-8").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-9").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-10").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 11) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-7").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-8").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-9").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-10").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-11").addClass('active');
	            }
	            else if($("[id*="+roomid+"] .childerns-count").val() == 12) {
	              $("[id*="+roomid+"] .children-box").removeClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-1").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-2").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-3").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-4").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-5").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-6").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-7").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-8").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-9").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-10").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-11").addClass('active');
	              $("[id*="+roomid+"] .children-box.children-box-12 ").addClass('active');
	            }
	          });
	          });

	      $('.adults-add, .adults-sub').click(function () {
	          var totaladults1 = parseInt($(".adults-count-1").val());
	          var totaladults2 = parseInt($(".adults-count-2").val());
	          var totaladults3 = parseInt($(".adults-count-3").val());
	          var totaladults4 = parseInt($(".adults-count-4").val());
	          var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4;
	          $("#roomguest #adultscount").html(alladult + ' Adults');
	      } );

	      $('.children-add, .children-add').click(function () {
	          var children1 = parseInt($(".childerns-count-1").val());
	          var children2 = parseInt($(".childerns-count-2").val());
	          var children3 = parseInt($(".childerns-count-3").val());
	          var children4 = parseInt($(".childerns-count-4").val());
	      
	          var childcount  =  children1 + children2  + children3  + children4;
	          $("#roomguest #childcount").html(' and ' + childcount + ' Children');
	      } );
	    }

	});

})(jQuery);