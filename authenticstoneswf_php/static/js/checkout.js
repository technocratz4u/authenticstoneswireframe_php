$(document).ready(function() {
	
	$("#addNewAddr").click(function(e){
		e.preventDefault();
		$("#newAddress").show();
		$("#address").hide();
	});
	$("#useExiAddr").click(function(e){
		e.preventDefault();
		$("#newAddress").hide();
		$("#address").show();
	});
	
	$(".nav-pills li").on("click", function(e) {
		  if ($(this).hasClass("disabled")) {
		    e.preventDefault();
		    return false;
		  }
		});
	
	$("#checkoutBtn").click(function(e){
		e.preventDefault();
		if($("#checkoutBtn").attr('value') == "chekout_address"){
			$("#review_li").removeClass("disabled");
			$('#review_tab').tab('show');
			$("#checkoutBtn").attr('value','checkout_review')
			$("#checkoutBtn").html('Continue to Payment Method<i class="fa fa-chevron-right"></i>');
		}else if($("#checkoutBtn").attr('value') == "checkout_review"){
			$("#payment_li").removeClass("disabled");
			$('#payment_tab').tab('show');
			$("#checkoutBtn").attr('value','make_payment')
			$("#checkoutBtn").html('Make Payment');
		}
		
	});
});
