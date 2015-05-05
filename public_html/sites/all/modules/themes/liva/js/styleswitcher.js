(function($) {
		  
$(document).ready(function(){

$('#sw-button-toggle').click(function(){									  

	
	  if($(this).parent().hasClass('toggle-in'))
	  {
	  	 $(this).parent().removeClass('toggle-in');
	  }
	  else
	  {
		  $(this).parent().addClass('toggle-in');
	  }
	  
	  
});


});

})(this.jQuery);