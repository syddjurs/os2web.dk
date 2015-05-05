<?php
$flickr_id = $settings['widget_flickr_id'];
$flickr_photos_count = $settings['widget_flickr_photo_count'];
?>
<div id="flickr_badge_wrapper" class="">
</div>
<script language="javascript">
$(document).ready(function(){
	/*----------------------------------------------------*/
	/*	Flickr Feed
	/*----------------------------------------------------*/
	$('#flickr_badge_wrapper').jflickrfeed({
		limit: <?php print $flickr_photos_count; ?>,
		qstrings: {
			id: '<?php print $flickr_id; ?>'
		},
		itemTemplate: '<a href="{{image_s}}" rel="prettyPhoto"><img alt="{{title}}" src="{{image_s}}" /></a>'
	});
});
</script>