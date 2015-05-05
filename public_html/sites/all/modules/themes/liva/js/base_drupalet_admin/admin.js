jQuery(document).ready(function($){
	
    jQuery.fn.exists = function () { return this.length > 0 };
    
    if($('#edit-built-in-skins').exists()) {
		$('input:checked').parent().addClass('form-item-active');
	
		$('input:radio').click(function() {
			$('input:radio[name='+$(this).attr('name')+']').parent().removeClass('form-item-active');
	        $(this).parent().addClass('form-item-active');
		});
	}
	

 
});
