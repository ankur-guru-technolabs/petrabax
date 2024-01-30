(function($) {
	
	"use strict";

	function menu_toggle_switch() {
		$(".toggle-switch-menu a").on("click",function() {
	      $(".admin-sidebar .sidebar-menu-list").toggleClass('active');
	    });
	}

	function password_toggle_show() {
		if($(".toggle-password").length) {
			$(".toggle-password").click(function() {
		        $(this).toggleClass("fa-eye-slash fa-eye ");
		        var input = $($(this).attr("toggle"));
		        if (input.attr("type") == "password") {
		          input.attr("type", "text");
		        } else {
		          input.attr("type", "password");
		        }
		    });
		}
	}


	
	/* + Document On Ready */
	$(document).on("ready", function() {
		
	});	/* - Document On Ready /- */

	/* + Window On Resize */ 
	$( window ).on("resize",function() {
	

	});
	
	$( window ).on("load",function() {
		menu_toggle_switch();

		password_toggle_show();

		if($(".niceselect").length) {
			$('.niceselect').niceSelect(); 
		}
		if($(".admin-sidebar").length) {
			$(".admin-sidebar").niceScroll({
		      cursorcolor: "#4C735A",
		      cursorwidth: "3px", 
		      cursorborder: "none",
		      cursorborderradius: "3px",
		      autohidemode: false,
		      railpadding: { top: 0, right: 3, left: 3, bottom: 0 }
		    });
		}
	});

})(jQuery);