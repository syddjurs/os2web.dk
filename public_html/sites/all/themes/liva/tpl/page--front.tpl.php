<div class="site_wrapper">
	<?php include_once('header.tpl.php');?>

	<?php if ($page['slideshow']): ?>
	<div class="container_full">
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner">
				<!-- START MEGASLIDER -->
				<?php print render($page['slideshow']); ?>
				<!-- STOP MEGASLIDER -->
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php 
	if($page['content'] or isset($messages) or $page['section']){
		if(drupal_is_front_page()) {
			unset($page['content']['system_main']['default_message']);
		}
		print $messages;
		print render($page['content']);
		print render($page['section']);
	}
	?>
	<?php include_once('footer.tpl.php');?>
</div>