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

				if($("#daterangestart"  !=  null) ) {
					var totalnight = parseInt($("#night").val(), 10);
					var date2 = $('#daterangestart').datepicker('getDate');
					var nextDayDate = new Date();
					nextDayDate.setDate(date2.getDate() +totalnight);

					var dd = nextDayDate.getDate();
				    var mm = nextDayDate.getMonth() + 1;
				    var yy = nextDayDate.getFullYear();
					var nextDayDate = dd + '/' + mm + '/' + yy;
					//alert(nextDayDate);
					//$('#daterangeend').val(nextDayDate);
					document.getElementById('daterangeend').value = nextDayDate;

					//nextDayDate.getDate()+ '/' +(date.getMonth() + 1) + '/' + date.getFullYear();
					//$('#daterangeend').val(nextDayDate);

				}
				else {
					var totalnight = parseInt($("#night").val(), 10);

					var totalnight =  totalnight + 3;

				    var tt = document.getElementById('daterangestart').value;
				
				    var date = new Date(tt);
				    var newdate = new Date(date);
				   	var  days = 1;

				    newdate.setDate(newdate.getDate() + totalnight );
				  
				    var dd = newdate.getDate();
				    var mm = newdate.getMonth() + 1;
				    var yy = newdate.getFullYear();
					var someFormattedDate = dd + '/' + mm + '/' + yy;
					document.getElementById('daterangeend').value = someFormattedDate;

					Date.prototype.addDays = function(days) {
					    var date = new Date(this.valueOf());
					    date.setDate(date.getDate() + days);
					    //return date;

					    return date.getDate()+ '/' +(date.getMonth() + 1) + '/' + date.getFullYear();
					}


					var date = new Date();

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

					//$("#daterangeend").datepicker("option","minDate", selected);
		         	//var date = $(this).datepicker('getDate');
		         	//var tempStartDate = new Date(date);
		         	//var default_end = new Date(tempStartDate.getFullYear(), tempStartDate.getMonth(), tempStartDate.getDate()+1); 
		         	//$('#daterangeend').datepicker('setDate', default_end); 
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
		}

		if($(".filter-content").length) {
	        $('.adults-add').click(function () {   
	          if ($(this).prev().val() < 8) {
	            $(this).prev().val(+$(this).prev().val() + 1);
	          }
	        });


	        $('.room-total-inner-dropdown-1 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 1) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-2 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	       	});
	        $('.room-total-inner-dropdown-3 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-4 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	       	$('.room-total-inner-dropdown-5 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-6 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-7 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-8 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-9 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });
	        $('.room-total-inner-dropdown-10 .adults-sub').click(function () {
	        	var th = $(this).closest('.wrap').find('.count');
	        	if (th.val() > 0) th.val(+th.val() - 1);
	        });

	        $('.roomadd').click(function () {   
	          if ($(this).prev().val() < 10) {
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
	          else if($('.totalroom-count').val() == 5) {
	            $(".room-total-inner-dropdown-5").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 6) {
	            $(".room-total-inner-dropdown-6").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 7) {
	            $(".room-total-inner-dropdown-7").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 8) {
	            $(".room-total-inner-dropdown-8").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 9) {
	            $(".room-total-inner-dropdown-9").addClass('active');
	          }
	          else if($('.totalroom-count').val() == 10) {
	            $(".room-total-inner-dropdown-10").addClass('active');
	          }

	        });

	        $('.children-add').click(function () {   
	           if ($(this).prev().val() < 4) {
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
	          });
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
	            
	          });
	         });

	      	$('.adults-add, .adults-sub').click(function () {
	          var totaladults1 = parseInt($(".adults-count-1").val());
	          var totaladults2 = parseInt($(".adults-count-2").val());
	          var totaladults3 = parseInt($(".adults-count-3").val());
	          var totaladults4 = parseInt($(".adults-count-4").val());
	          var totaladults5 = parseInt($(".adults-count-5").val());
	          var totaladults6 = parseInt($(".adults-count-6").val());
	          var totaladults7 = parseInt($(".adults-count-7").val());
	          var totaladults8 = parseInt($(".adults-count-8").val());
	          var totaladults9 = parseInt($(".adults-count-9").val());
	          var totaladults10 = parseInt($(".adults-count-10").val());

	          var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5 + totaladults6  + totaladults7 + totaladults8 + totaladults9 + totaladults10;
	          $("#roomguest #adultscount").html(alladult + ' Adults');



	      	} );

	      	$('.children-add, .children-sub').click(function () {
	          var children1 = parseInt($(".childerns-count-1").val());
	          var children2 = parseInt($(".childerns-count-2").val());
	          var children3 = parseInt($(".childerns-count-3").val());
	          var children4 = parseInt($(".childerns-count-4").val());
	          var children5 = parseInt($(".childerns-count-5").val());
	          var children6 = parseInt($(".childerns-count-6").val());
	          var children7 = parseInt($(".childerns-count-7").val());
	          var children8 = parseInt($(".childerns-count-8").val());
	          var children9 = parseInt($(".childerns-count-9").val());
	          var children10 = parseInt($(".childerns-count-10").val());
	      
	          var childcount  =  children1 + children2  + children3  + children4  + children5  + children6  + children7  + children8  + children9  + children10;
	          	
				setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);

	     	} );

	     	$('.roomsub').click(function () {
	          var th = $(this).closest('.wrap').find('.count');     
	          if (th.val() > 1) th.val(+th.val() - 1);

	          var totalroom = $('.totalroom-count').val();
	          
	          if($('.totalroom-count').val() == 1) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');

	            $(".room-total-inner-dropdown-2 .adults-count-2").val(0);
              	$(".room-total-inner-dropdown-3 .adults-count-3").val(0);
               	$(".room-total-inner-dropdown-4 .adults-count-4").val(0);
                $(".room-total-inner-dropdown-5 .adults-count-5").val(0);
                $(".room-total-inner-dropdown-6 .adults-count-6").val(0);
                $(".room-total-inner-dropdown-7 .adults-count-7").val(0);
                $(".room-total-inner-dropdown-8 .adults-count-8").val(0);
                $(".room-total-inner-dropdown-9 .adults-count-9").val(0);
                $(".room-total-inner-dropdown-10 .adults-count-10").val(0);

                $(".room-total-inner-dropdown-2 .childerns-count-2").val(0);
              	$(".room-total-inner-dropdown-3 .childerns-count-3").val(0);
               	$(".room-total-inner-dropdown-4 .childerns-count-4").val(0);
                $(".room-total-inner-dropdown-5 .childerns-count-5").val(0);
                $(".room-total-inner-dropdown-6 .childerns-count-6").val(0);
                $(".room-total-inner-dropdown-7 .childerns-count-7").val(0);
                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-2 .children-box .count").val(0);
                $(".room-total-inner-dropdown-3 .children-box .count").val(0);
                $(".room-total-inner-dropdown-4 .children-box .count").val(0);
                $(".room-total-inner-dropdown-5 .children-box .count").val(0);
                $(".room-total-inner-dropdown-6 .children-box .count").val(0);
                $(".room-total-inner-dropdown-7 .children-box .count").val(0);
                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-2 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-3 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-4 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-5 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-6 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-7 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-2 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-3 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-4 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-5 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-6 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-7 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                var totaladults1 = parseInt($(".adults-count-1").val());
	          	var alladult  =  totaladults1 ;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

	          	var children1 = parseInt($(".childerns-count-1").val());
		        var childcount  =  children1;

		       
		        setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          } 
	          else if($('.totalroom-count').val() == 2) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');

              	$(".room-total-inner-dropdown-3 .adults-count-3").val(0);
               	$(".room-total-inner-dropdown-4 .adults-count-4").val(0);
                $(".room-total-inner-dropdown-5 .adults-count-5").val(0);
                $(".room-total-inner-dropdown-6 .adults-count-6").val(0);
                $(".room-total-inner-dropdown-7 .adults-count-7").val(0);
                $(".room-total-inner-dropdown-8 .adults-count-8").val(0);
                $(".room-total-inner-dropdown-9 .adults-count-9").val(0);
                $(".room-total-inner-dropdown-10 .adults-count-10").val(0);

              	$(".room-total-inner-dropdown-3 .childerns-count-3").val(0);
               	$(".room-total-inner-dropdown-4 .childerns-count-4").val(0);
                $(".room-total-inner-dropdown-5 .childerns-count-5").val(0);
                $(".room-total-inner-dropdown-6 .childerns-count-6").val(0);
                $(".room-total-inner-dropdown-7 .childerns-count-7").val(0);
                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-3 .children-box .count").val(0);
                $(".room-total-inner-dropdown-4 .children-box .count").val(0);
                $(".room-total-inner-dropdown-5 .children-box .count").val(0);
                $(".room-total-inner-dropdown-6 .children-box .count").val(0);
                $(".room-total-inner-dropdown-7 .children-box .count").val(0);
                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-3 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-4 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-5 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-6 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-7 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-3 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-4 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-5 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-6 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-7 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                var totaladults1 = parseInt($(".adults-count-1").val());
	          	var totaladults2 = parseInt($(".adults-count-2").val());
	          
	          	var alladult  =  totaladults1 + totaladults2;
		        $("#roomguest #adultscount").html(alladult + ' Adults');

		        var children1 = parseInt($(".childerns-count-1").val());
		        var children2 = parseInt($(".childerns-count-2").val());
		        var childcount  =  children1 + children2;

		       	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   	}, 100);
	          } 
	          else if($('.totalroom-count').val() == 3) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');

               	$(".room-total-inner-dropdown-4 .adults-count-4").val('');
                $(".room-total-inner-dropdown-5 .adults-count-5").val('');
                $(".room-total-inner-dropdown-6 .adults-count-6").val('');
                $(".room-total-inner-dropdown-7 .adults-count-7").val('');
                $(".room-total-inner-dropdown-8 .adults-count-8").val('');
                $(".room-total-inner-dropdown-9 .adults-count-9").val('');
                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

               	$(".room-total-inner-dropdown-4 .childerns-count-4").val(0);
                $(".room-total-inner-dropdown-5 .childerns-count-5").val(0);
                $(".room-total-inner-dropdown-6 .childerns-count-6").val(0);
                $(".room-total-inner-dropdown-7 .childerns-count-7").val(0);
                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-4 .children-box .count").val(0);
                $(".room-total-inner-dropdown-5 .children-box .count").val(0);
                $(".room-total-inner-dropdown-6 .children-box .count").val(0);
                $(".room-total-inner-dropdown-7 .children-box .count").val(0);
                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-4 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-5 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-6 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-7 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-4 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-5 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-6 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-7 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                var totaladults1 = parseInt($(".adults-count-1").val());
	          	var totaladults2 = parseInt($(".adults-count-2").val());
	          	var totaladults3 = parseInt($(".adults-count-3").val());
	          
	          	var alladult  =  totaladults1 + totaladults2  + totaladults3;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

	           	var children1 = parseInt($(".childerns-count-1").val());
	          	var children2 = parseInt($(".childerns-count-2").val());
	          	var children3 = parseInt($(".childerns-count-3").val());

	          	var childcount  =  children1 + children2  + children3;
	          	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          } 
	          else if($('.totalroom-count').val() == 4) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');

                $(".room-total-inner-dropdown-5 .adults-count-5").val('');
                $(".room-total-inner-dropdown-6 .adults-count-6").val('');
                $(".room-total-inner-dropdown-7 .adults-count-7").val('');
                $(".room-total-inner-dropdown-8 .adults-count-8").val('');
                $(".room-total-inner-dropdown-9 .adults-count-9").val('');
                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

                $(".room-total-inner-dropdown-5 .childerns-count-5").val(0);
                $(".room-total-inner-dropdown-6 .childerns-count-6").val(0);
                $(".room-total-inner-dropdown-7 .childerns-count-7").val(0);
                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-5 .children-box .count").val(0);
                $(".room-total-inner-dropdown-6 .children-box .count").val(0);
                $(".room-total-inner-dropdown-7 .children-box .count").val(0);
                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-5 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-6 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-7 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-6 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-7 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                var totaladults1 = parseInt($(".adults-count-1").val());
	          	var totaladults2 = parseInt($(".adults-count-2").val());
	         	var totaladults3 = parseInt($(".adults-count-3").val());
	          	var totaladults4 = parseInt($(".adults-count-4").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

	          	var children1 = parseInt($(".childerns-count-1").val());
	          	var children2 = parseInt($(".childerns-count-2").val());
	          	var children3 = parseInt($(".childerns-count-3").val());
	          	var children4 = parseInt($(".childerns-count-4").val());

	          	var childcount  =  children1 + children2  + children3  + children4;

	          	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          }
	          else if($('.totalroom-count').val() == 5) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	            $(".room-total-inner-dropdown-5").addClass('active');

                $(".room-total-inner-dropdown-6 .adults-count-6").val('');
                $(".room-total-inner-dropdown-7 .adults-count-7").val('');
                $(".room-total-inner-dropdown-8 .adults-count-8").val('');
                $(".room-total-inner-dropdown-9 .adults-count-9").val('');
                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

                $(".room-total-inner-dropdown-6 .childerns-count-6").val(0);
                $(".room-total-inner-dropdown-7 .childerns-count-7").val(0);
                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-6 .children-box .count").val(0);
                $(".room-total-inner-dropdown-7 .children-box .count").val(0);
                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-6 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-7 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-6 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-7 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                var totaladults1 = parseInt($(".adults-count-1").val());
	          	var totaladults2 = parseInt($(".adults-count-2").val());
	          	var totaladults3 = parseInt($(".adults-count-3").val());
	          	var totaladults4 = parseInt($(".adults-count-4").val());
	          	var totaladults5 = parseInt($(".adults-count-5").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

	          	var children1 = parseInt($(".childerns-count-1").val());
	          	var children2 = parseInt($(".childerns-count-2").val());
	          	var children3 = parseInt($(".childerns-count-3").val());
	          	var children4 = parseInt($(".childerns-count-4").val());
	         	var children5 = parseInt($(".childerns-count-5").val());
	          
	          	var childcount  =  children1 + children2  + children3  + children4  + children5;
	          	if($(childcount === '0')) {
	          		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
	          	}
	          }
	          else if($('.totalroom-count').val() == 6) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	            $(".room-total-inner-dropdown-5").addClass('active');
	            $(".room-total-inner-dropdown-6").addClass('active');

                $(".room-total-inner-dropdown-7 .adults-count-7").val('');
                $(".room-total-inner-dropdown-8 .adults-count-8").val('');
                $(".room-total-inner-dropdown-9 .adults-count-9").val('');
                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

                $(".room-total-inner-dropdown-7 .childerns-count-7").val(0);
                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-7 .children-box .count").val(0);
                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-7 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-7 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                var totaladults1 = parseInt($(".adults-count-1").val());
				var totaladults2 = parseInt($(".adults-count-2").val());
				var totaladults3 = parseInt($(".adults-count-3").val());
				var totaladults4 = parseInt($(".adults-count-4").val());
				var totaladults5 = parseInt($(".adults-count-5").val());
				var totaladults6 = parseInt($(".adults-count-6").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5 + totaladults6 ;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

				var children1 = parseInt($(".childerns-count-1").val());
				var children2 = parseInt($(".childerns-count-2").val());
				var children3 = parseInt($(".childerns-count-3").val());
				var children4 = parseInt($(".childerns-count-4").val());
				var children5 = parseInt($(".childerns-count-5").val());
				var children6 = parseInt($(".childerns-count-6").val());
	          
	      
	          	var childcount  =  children1 + children2  + children3  + children4  + children5  + children6;
	          	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          }
	          else if($('.totalroom-count').val() == 7) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	            $(".room-total-inner-dropdown-5").addClass('active');
	            $(".room-total-inner-dropdown-6").addClass('active');
	            $(".room-total-inner-dropdown-7").addClass('active');

                $(".room-total-inner-dropdown-8 .adults-count-8").val('');
                $(".room-total-inner-dropdown-9 .adults-count-9").val('');
                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

                $(".room-total-inner-dropdown-8 .childerns-count-8").val(0);
                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-8 .children-box .count").val(0);
                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-8 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-8 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

				var totaladults1 = parseInt($(".adults-count-1").val());
				var totaladults2 = parseInt($(".adults-count-2").val());
				var totaladults3 = parseInt($(".adults-count-3").val());
				var totaladults4 = parseInt($(".adults-count-4").val());
				var totaladults5 = parseInt($(".adults-count-5").val());
				var totaladults6 = parseInt($(".adults-count-6").val());
				var totaladults7 = parseInt($(".adults-count-7").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5 + totaladults6  + totaladults7;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

				var children1 = parseInt($(".childerns-count-1").val());
				var children2 = parseInt($(".childerns-count-2").val());
				var children3 = parseInt($(".childerns-count-3").val());
				var children4 = parseInt($(".childerns-count-4").val());
				var children5 = parseInt($(".childerns-count-5").val());
				var children6 = parseInt($(".childerns-count-6").val());
				var children7 = parseInt($(".childerns-count-7").val());
	          
	          	var childcount  =  children1 + children2  + children3  + children4  + children5  + children6  + children7;
	          	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          }
	          else if($('.totalroom-count').val() == 8) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	            $(".room-total-inner-dropdown-5").addClass('active');
	            $(".room-total-inner-dropdown-6").addClass('active');
	            $(".room-total-inner-dropdown-7").addClass('active');
	            $(".room-total-inner-dropdown-8").addClass('active');

                $(".room-total-inner-dropdown-9 .adults-count-9").val('');
                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

                $(".room-total-inner-dropdown-9 .childerns-count-9").val(0);
                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-9 .children-box .count").val(0);
                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                 $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

                $(".room-total-inner-dropdown-9 .children-box").removeClass('active');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                $(".room-total-inner-dropdown-9 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');

				var totaladults1 = parseInt($(".adults-count-1").val());
				var totaladults2 = parseInt($(".adults-count-2").val());
				var totaladults3 = parseInt($(".adults-count-3").val());
				var totaladults4 = parseInt($(".adults-count-4").val());
				var totaladults5 = parseInt($(".adults-count-5").val());
				var totaladults6 = parseInt($(".adults-count-6").val());
				var totaladults7 = parseInt($(".adults-count-7").val());
				var totaladults8 = parseInt($(".adults-count-8").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5 + totaladults6  + totaladults7 + totaladults8;
	         	$("#roomguest #adultscount").html(alladult + ' Adults');

				var children1 = parseInt($(".childerns-count-1").val());
				var children2 = parseInt($(".childerns-count-2").val());
				var children3 = parseInt($(".childerns-count-3").val());
				var children4 = parseInt($(".childerns-count-4").val());
				var children5 = parseInt($(".childerns-count-5").val());
				var children6 = parseInt($(".childerns-count-6").val());
				var children7 = parseInt($(".childerns-count-7").val());
				var children8 = parseInt($(".childerns-count-8").val());
	      
	          	var childcount  =  children1 + children2  + children3  + children4  + children5  + children6  + children7  + children8;
	          	if($(childcount === '0')) {
	         		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
	         	}
	          }
	          else if($('.totalroom-count').val() == 9) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	            $(".room-total-inner-dropdown-5").addClass('active');
	            $(".room-total-inner-dropdown-6").addClass('active');
	            $(".room-total-inner-dropdown-7").addClass('active');
	            $(".room-total-inner-dropdown-8").addClass('active');
	            $(".room-total-inner-dropdown-9").addClass('active');

                $(".room-total-inner-dropdown-10 .adults-count-10").val('');

                $(".room-total-inner-dropdown-10 .childerns-count-10").val(0);

                $(".room-total-inner-dropdown-10 .children-box .count").val(0);

                $(".room-total-inner-dropdown-10 .child-block.dropdown-block").removeClass('show');
                $(".room-total-inner-dropdown-10 .children-box").removeClass('active');

                var totaladults1 = parseInt($(".adults-count-1").val());
		        var totaladults2 = parseInt($(".adults-count-2").val());
		        var totaladults3 = parseInt($(".adults-count-3").val());
		        var totaladults4 = parseInt($(".adults-count-4").val());
		        var totaladults5 = parseInt($(".adults-count-5").val());
		        var totaladults6 = parseInt($(".adults-count-6").val());
		        var totaladults7 = parseInt($(".adults-count-7").val());
		        var totaladults8 = parseInt($(".adults-count-8").val());
		        var totaladults9 = parseInt($(".adults-count-9").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5 + totaladults6  + totaladults7 + totaladults8 + totaladults9;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

				var children1 = parseInt($(".childerns-count-1").val());
				var children2 = parseInt($(".childerns-count-2").val());
				var children3 = parseInt($(".childerns-count-3").val());
				var children4 = parseInt($(".childerns-count-4").val());
				var children5 = parseInt($(".childerns-count-5").val());
				var children6 = parseInt($(".childerns-count-6").val());
				var children7 = parseInt($(".childerns-count-7").val());
				var children8 = parseInt($(".childerns-count-8").val());
				var children9 = parseInt($(".childerns-count-9").val());
	      
	          	var childcount  =  children1 + children2  + children3  + children4  + children5  + children6  + children7  + children8  + children9;
	         	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          }
	          else if($('.totalroom-count').val() == 10) {
	            $(".room-total-inner-dropdown").removeClass('active');
	            $(".room-total-inner-dropdown-1").addClass('active');
	            $(".room-total-inner-dropdown-2").addClass('active');
	            $(".room-total-inner-dropdown-3").addClass('active');
	            $(".room-total-inner-dropdown-4").addClass('active');
	            $(".room-total-inner-dropdown-5").addClass('active');
	            $(".room-total-inner-dropdown-6").addClass('active');
	            $(".room-total-inner-dropdown-7").addClass('active');
	            $(".room-total-inner-dropdown-8").addClass('active');
	            $(".room-total-inner-dropdown-9").addClass('active');
	            $(".room-total-inner-dropdown-10").addClass('active');

				var totaladults1 = parseInt($(".adults-count-1").val());
				var totaladults2 = parseInt($(".adults-count-2").val());
				var totaladults3 = parseInt($(".adults-count-3").val());
				var totaladults4 = parseInt($(".adults-count-4").val());
				var totaladults5 = parseInt($(".adults-count-5").val());
				var totaladults6 = parseInt($(".adults-count-6").val());
				var totaladults7 = parseInt($(".adults-count-7").val());
				var totaladults8 = parseInt($(".adults-count-8").val());
				var totaladults9 = parseInt($(".adults-count-9").val());
				var totaladults10 = parseInt($(".adults-count-10").val());

	          	var alladult  =  totaladults1 + totaladults2  + totaladults3  + totaladults4 + totaladults5 + totaladults6  + totaladults7 + totaladults8 + totaladults9 + totaladults10;
	          	$("#roomguest #adultscount").html(alladult + ' Adults');

				var children1 = parseInt($(".childerns-count-1").val());
				var children2 = parseInt($(".childerns-count-2").val());
				var children3 = parseInt($(".childerns-count-3").val());
				var children4 = parseInt($(".childerns-count-4").val());
				var children5 = parseInt($(".childerns-count-5").val());
				var children6 = parseInt($(".childerns-count-6").val());
				var children7 = parseInt($(".childerns-count-7").val());
				var children8 = parseInt($(".childerns-count-8").val());
				var children9 = parseInt($(".childerns-count-9").val());
				var children10 = parseInt($(".childerns-count-10").val());
	      
	          	var childcount  =  children1 + children2  + children3  + children4  + children5  + children6  + children7  + children8  + children9  + children10;
	         	setTimeout(function() {
			       if(childcount > 0 ) {
		        		$("#roomguest #childcount").html(' and ' + childcount + ' Children');
		       	 	}
		       	 	
		       	 	if(childcount == 0) {

		       	 		$("#roomguest #childcount").empty();
		       	 	}
			   }, 100);
	          }

	         
	        });
	    }


	    if($("#bookeddate").length) {
	    	$('#bookeddate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			});
	    }

	    if($(".hotel-filter-section-two").length) {
		    $('#activedate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			}).datepicker("setDate", new Date());

		    $('.travelers-adults-add').click(function () {   
			  if ($(this).prev().val() < 20) {
			    $(this).prev().val(+$(this).prev().val() + 1);
			  }
			});

			$('.travelers-adults-sub').click(function () {
				var th = $(this).closest('.wrap').find('.count');
				if (th.val() > 1) th.val(+th.val() - 1);
			});

			$('.travelers-children-add').click(function () { 
			   	if ($(this).prev().val() < 20) {
			    	$(this).prev().val(+$(this).prev().val() + 1);
			 	}

			    if($(".travelers-childerns-count").val() == 1) {
			      $(".children-box-1").addClass('active');
			      $(".child-block.dropdown-block").addClass('show');
			    } 
			    else if($(".travelers-childerns-count").val() == 2) {
			      $(".children-box-2").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 3) {
			      $(".children-box-3").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 2) {
			      $(".children-box-2").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 4) {
			      $(".children-box-4").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 5) {
			      $(".children-box-5").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 6) {
			      $(".children-box-6").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 7) {
			      $(".children-box-7").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 8) {
			      $(".children-box-8").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 9) {
			      $(".children-box-9").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 9) {
			      $(".children-box-9").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 10) {
			      $(".children-box-10").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 11) {
			      $(".children-box-11").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 12) {
			      $(".children-box-12").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 13) {
			      $(".children-box-13").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 14) {
			      $(".children-box-14").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 15) {
			      $(".children-box-15").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 16) {
			      $(".children-box-16").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 17) {
			      $(".children-box-17").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 18) {
			      $(".children-box-18").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 19) {
			      $(".children-box-19").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 20) {
			      $(".children-box-20").addClass('active');
			    }
			});

			$('.travelers-children-sub').click(function () {
			    var th = $(this).closest('.wrap').find('.count');     
			    if (th.val() > 0) th.val(+th.val() - 1);

			    if($(".travelers-childerns-count").val() == 0) {
			      $(".children-box").removeClass('active');
			      $(".child-block.dropdown-block").removeClass('show');
			    } 
			    else if($(".travelers-childerns-count").val() == 1) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			    } 
			    else if($(".travelers-childerns-count").val() == 2) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 3) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			    }
			   	else if($(".travelers-childerns-count").val() == 4) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 5) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			      $(".children-box.children-box-5").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 6) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			      $(".children-box.children-box-5").addClass('active');
			      $(".children-box.children-box-6").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 7) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			      $(".children-box.children-box-5").addClass('active');
			      $(".children-box.children-box-6").addClass('active');
			      $(".children-box.children-box-7").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 8) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			      $(".children-box.children-box-5").addClass('active');
			      $(".children-box.children-box-6").addClass('active');
			      $(".children-box.children-box-7").addClass('active');
			      $(".children-box.children-box-8").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 9) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			      $(".children-box.children-box-5").addClass('active');
			      $(".children-box.children-box-6").addClass('active');
			      $(".children-box.children-box-7").addClass('active');
			      $(".children-box.children-box-8").addClass('active');
			      $(".children-box.children-box-9").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 10) {
			      $(".children-box").removeClass('active');
			      $(".children-box.children-box-1").addClass('active');
			      $(".children-box.children-box-2").addClass('active');
			      $(".children-box.children-box-3").addClass('active');
			      $(".children-box.children-box-4").addClass('active');
			      $(".children-box.children-box-5").addClass('active');
			      $(".children-box.children-box-6").addClass('active');
			      $(".children-box.children-box-7").addClass('active');
			      $(".children-box.children-box-8").addClass('active');
			      $(".children-box.children-box-9").addClass('active');
			      $(".children-box.children-box-10").addClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 11) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-12").removeClass('active');
			      $(".children-box.children-box-13").removeClass('active');
			      $(".children-box.children-box-14").removeClass('active');
			      $(".children-box.children-box-15").removeClass('active');
			      $(".children-box.children-box-16").removeClass('active');
			      $(".children-box.children-box-17").removeClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 12) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-13").removeClass('active');
			      $(".children-box.children-box-14").removeClass('active');
			      $(".children-box.children-box-15").removeClass('active');
			      $(".children-box.children-box-16").removeClass('active');
			      $(".children-box.children-box-17").removeClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 13) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-14").removeClass('active');
			      $(".children-box.children-box-15").removeClass('active');
			      $(".children-box.children-box-16").removeClass('active');
			      $(".children-box.children-box-17").removeClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 14) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-15").removeClass('active');
			      $(".children-box.children-box-16").removeClass('active');
			      $(".children-box.children-box-17").removeClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 15) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-16").removeClass('active');
			      $(".children-box.children-box-17").removeClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 16) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-17").removeClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 17) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-18").removeClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 18) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-19").removeClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 19) {
			      $(".children-box").addClass('active');
			      $(".children-box.children-box-20").removeClass('active');
			    }
			    else if($(".travelers-childerns-count").val() == 19) {
			      $(".children-box").addClass('active');
			    }
			});

			$('.travelers-adults-add, .travelers-adults-sub').click(function () {
				var alladult = parseInt($(".travelers-adults-count").val());

				$("#roomguest span.default-text").remove();

				$("#roomguest #adultscount").html(alladult + ' Adults');
			});

			$('.travelers-children-add, .travelers-children-sub').click(function () {
				var childcount = parseInt($(".travelers-childerns-count").val());

				var alladult = parseInt($(".travelers-adults-count").val());

				$("#roomguest span.default-text").hide();

				
				
				if(childcount > 0 ) {
					$("#roomguest #childcount").html(' and ' + childcount + ' Children');
				}

				if( alladult == 0) {
					$("#roomguest #childcount").html(' ' + childcount + ' Children');
				}

				if(childcount == 0) {
		       	 	$("#roomguest #childcount").empty();
		       	}

		       	if(childcount == 0 && alladult == 0) {
		       		$("#roomguest span.default-text").show();
		       	}
			});

		}
		if($(".featured-hotels-box").length && $("#filter-serch-input").length) {
			$("[id*='featured-post-']" ).each(function () { 
				var featuredpostid = $(this).attr('id');
			    $("[id*="+featuredpostid+"] .book-btn a").on("click", function(e) {
			    	var hotal_title  = $("[id*="+featuredpostid+"] .hotel-content h2").html();
			    	document.querySelector("#filter-serch-input").value = hotal_title;
			    })
			});
		}
		if($('#transferdate').length) {
			$('#transferdate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			})
		}
		if($('#private-tour-date').length) {
			$('#private-tour-date').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			})
		}
		if($('#pickupdate').length) {
			$('#pickupdate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			})
		}
		if($('#dropoffdate').length) {
			$('#dropoffdate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			})
		}
		if($('#departuredate').length) {
			$('#departuredate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			})
		}
		if($('#returndate').length) {
			$('#returndate').datepicker({
			    dateFormat: 'd/m/yy',
			    minDate: "+3",
			    numberOfMonths: 1,
			    showOtherMonths: true,	    
			})
		}
	});

})(jQuery);