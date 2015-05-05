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
	
	<div class="page_title">
		<div class="container">
			<div class="title">
				<?php if(!empty($title)) print '<h1>'.$title.'</h1>';?>
			</div>
			<?php if($breadcrumb):?>
				<?php print $breadcrumb; ?>
			<?php endif;?>
		</div>
	</div>
	
	
	<?php 
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		
		
	if($page['sidebar_first']){
		$class = 'content_right';
	}else{
		$class = 'content_fullwidth';
	}
		
	?>
	<div class="container">
		<?php
			if ($page['sidebar_first']):
				print '<div class="left_sidebar">';
					print render($page['sidebar_first']);
				print '</div>';
			endif;
		?>
		<div class="<?php print $class;?>">
			<?php 
			if($messages)
				print '<div id="system-message">'.$messages.'</div>';
			if($page['content'] or $page['section']){
				print render($page['content']);
				print render($page['section']);
			}
			?>
		</div>
		
	</div>
	<div class="clearfix mar_top7"></div>
	<?php include_once('footer.tpl.php');?>
</div>