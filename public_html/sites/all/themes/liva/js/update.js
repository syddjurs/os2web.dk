// JavaScript Document

//scroll up 
$(document).ready(function(){
 
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});

	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});
	


});
//Message box
$(window).load(function(){
	jQuery('.message-box-wrap .close-but').click(function(){
		$(this).parent().parent().fadeOut("slow");
	  });
});

//jquery jcarousel 
jQuery(document).ready(function() {
		jQuery('#mycarousel').jcarousel();
		
});

jQuery(document).ready(function() {
		jQuery('#mycarouseltwo').jcarousel();
});

jQuery(document).ready(function() {
		jQuery('#mycarouselthree').jcarousel();
});

jQuery(document).ready(function() {
		jQuery('#mycarouselfour').jcarousel();
		
});

//testimonials
$(window).load(function(){
	$(".controlls li a").click(function(e) {
		e.preventDefault();
		var id = $(this).attr('class');
		$('#slider div:visible').fadeOut(500, function() {
			$('div#' + id).fadeIn();
		})
	});
});
$(window).load(function(){
	$("#menu > #tiny").find("ul").removeAttr('id');
	$(".container_full").hover(function(){
		$(".md-arrow").css('opacity',1);
	}, function(){
		$(".md-arrow").css('opacity',0);
	});
	$(".peopple_says .faide_slider .controlls a").click(function(){
		return false;
	});
});
