jQuery(document).ready(function($){
	
    jQuery.fn.exists = function () { return this.length > 0 };
    if($('#edit-field-template-und').exists()) {
		$template = $('select#edit-field-template-und');
		
		switch($template.val()) {
			case 'video':
				$('.field-name-field-slider-block').hide();
			break;
			case 'image':
				$('.field-name-field-slider-block').hide();
				$('.field-name-field-video').hide();
			break;
			case 'slider':
				$('.field-name-field-slider-block').show();
				$('.field-name-field-video').hide();
			break;
		}
		//template change
		$template.change(function () {
			switch($(this).val()) {
				case 'video':
					$('.field-name-field-video').show();
					$('.field-name-field-slider-block').hide();
				break;
				case 'image':
					$('.field-name-field-slider-block').hide();
					$('.field-name-field-video').hide();
				break;
				case 'slider':
					$('.field-name-field-slider-block').show();
					$('.field-name-field-video').hide();
				break;
			}
		});
    }
	//Add class to vertical tab button
    if($('body.page-admin-appearance').exists()) {
		
		
		if($('#edit-custom div.form-wrapper').exists() == false) {
			$('#edit-custom').remove();
		};
		
		//Settings color picker
		$('#edit-backgroundcolor').ColorPicker({
				onSubmit: function(hsb, hex, rgb, el) {
					$(el).val(hex);
					$(el).ColorPickerHide();
				},
				onBeforeShow: function () {
					$(this).ColorPickerSetColor(this.value);
				}
			}).bind('keyup', function(){
				$(this).ColorPickerSetColor(this.value);
			});
		//Change text btn submit
		$('.colorpicker_submit').text('OK');
		
		//Settings background image
		$('input:checked').parent().addClass('form-item-active');
		$('input:radio').click(function() {
			$('input:radio[name='+$(this).attr('name')+']').parent().removeClass('form-item-active');
	        $(this).parent().addClass('form-item-active');
		});
		
		
    }
	
    

});