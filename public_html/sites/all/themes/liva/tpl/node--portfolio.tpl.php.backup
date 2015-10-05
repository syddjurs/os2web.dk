<?php
 global $base_root;
 
?>
<div class="portfolio_area">
	<div class="portfolio_area_left">
	<?php 
		if (!empty($content['field_image'])){
				hide($content['field_image']);
				$field_image = field_get_items('node', $node, 'field_image');
				if (!empty($node->field_image['und']) && count($node->field_image['und']) == 1){ // 1 image
					print '<span class="itemImage">'.theme('image', array('path' => $field_image[0]['uri'])).'</span>';
				}else{
					
					print '<div class="project-flexslider">';
						print '<div class="flexslider flexslider-portfolio-detail mds-flexslider-slider nav-style-thin nav-size-large">';
							print '<ul class="slides">';
								foreach ($field_image as $img):
									print '<li>';
										//display image style
										//print theme('image_style', array('style_name' => 'YOUR_IMAGE_STYLE', 'path' => $img['uri'], 'attributes' => array('class' => 'attachment-large')));
										print theme('image', array('path' => $img['uri']));
									print '</li>';
								endforeach;
							print '</ul>';
						print '</div>';
					print '</div>';
					
					print '<script type="text/javascript">jQuery(window).on("load",function($){jQuery(".flexslider-portfolio-detail").flexslider({animation:"fade",direction:"horizontal",slideshow:true,controlNav:false,slideshowSpeed:5000,pauseOnAction:false,pauseOnHover:true,namespace:"mflex-",prevText:"<i class=\"micon-slider-arrow-left fa\"></i>",nextText:"<i class=\"micon-slider-arrow-right fa\"></i>",});});</script>';
				}
			}
	?>
	
	
	</div>
	<div class="portfolio_area_right">
		<h2><?php print $node->title;?></h2>
		<h3><i><?php print t('Project Description');?></i></h3>
		<p><?php print render($content['field_description_portfolio']);?></p>
		
		
		<div class="project_details">
			<h4><b><?php print t('Project Details');?></b></h4>
			<span><strong>Date</strong><em><?php print format_date($node->created, 'custom', 'M d, Y');?></em></span><span><strong><?php print 'Categories';?></strong><em><?php print widget_format_terms('field_portfolio_category', $node); ?></em></span><span><strong><?php print t('Author ');?></strong><em><?php print $node->name;?></em></span>
			<div class="clearfix mar_top3"></div>
			<a href="<?php $link = field_get_items('node', $node, 'field_link_portfolio'); print $link[0]['value'];?>" class="but_goback" target="_blank"><i class="fa fa-hand-o-right fa-lg"></i> <?php print t('Visit Site');?></a></div>
	</div>
</div>
