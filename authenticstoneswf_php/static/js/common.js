$(document).ready(function() {
	$('#home-navbar').affix({
		offset : {
			top : 140
		}
	});

	// add bottom padding to header when navbar element is affixed to avoid flickering
	// since the home-navbar element is positioned as fixed, an equivalent bottom-padding is to provided to fill in that space
	// padding added should be equal to the height of the home-navbar element
	$("#home-navbar").on("affix.bs.affix", function() {
	  $("#header").addClass("bottom-padded");
	});

	// remove padding to main content when navbar element is unaffixed to avoid flickering
	$("#home-navbar").on("affix-top.bs.affix", function() {
	  $("#header").removeClass("bottom-padded");
	});
	
	//$( "#search-control" ).select2( { placeholder: "Search...", theme: "bootstrap" } );
	
	$("#top-search-button").popover({
	    html: true, 
		content: function() {
          return $('#popover-content').html();
        }
	});
	
	/**
	 * If the modal is opened from loginLink show the Login tab or else
	 * If the modal is opened from registerLink show the Register tab
	 */
	$('#signinupModal').on('show.bs.modal', function (event) {
	  var triggerElem = $(event.relatedTarget) // Button that triggered the modal
	  //alert("IN signinupModal show.bs.modal - "+triggerElem.attr("id"));
	  if(triggerElem.attr("id")=="loginLink" || triggerElem.attr("id")=="footerLoginLink"){
		  $('#loginTab').tab('show');
	  }else if(triggerElem.attr("id")=="registerLink" || triggerElem.attr("id")=="footerRegisterLink"){
		  $('#registerTab').tab('show');
	  }
	});
	
	$("#signinupModal .nav-tabs > li > a").on('show.bs.tab', function (event) {
		var triggeredTab = $(event.target) // Tab that is triggered
		//alert("IN tab show.bs.modal - "+triggeredTab.attr("id"));
		if(triggeredTab.attr("id")=="loginTab"){
			$("#signinupModalLabel").html("Have an Account?");
		}else if(triggeredTab.attr("id")=="registerTab"){
			$("#signinupModalLabel").html("Create an Account");
		}
	});
	
});
