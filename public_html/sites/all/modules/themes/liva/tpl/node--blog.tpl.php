<?php 
	global $base_root;
	
	if (!$page) { 
		if($node->field_image){
			$imageone = $node->field_image['und'][0]['uri']; 
			$style = 'blog'; //image style
		}
		
		$blog_style = theme_get_setting('blog_page_style', 'liva');
		if($blog_style=='with_small_image')
			$blog_style_n = ' small';
		else
			$blog_style_n = '';
?>
<div class="blog_post" id="node-<?php print $node->nid; ?>">	
	<div class="blog_postcontent">
	
	<?php if (!empty($node->field_image['und']) && count($node->field_image['und']) > 1){ ?>
	<div class="flexslider flexslider-portfolio-detail mds-flexslider-slider nav-style-thin nav-size-large<?php print $blog_style_n?>">
		<ul class="slides">
			<?php 
				foreach ($node->field_image['und'] as $img): 
					$img_view = file_create_url($img['uri']);
				?>
			<li>
			<img src="<?php print render(file_create_url($img['uri']));?>" class="attachment-single-thumb-large" /></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<script type="text/javascript">jQuery(window).on("load",function($){jQuery(".flexslider-portfolio-detail").flexslider({animation:"fade",direction:"horizontal",slideshow:true,controlNav:false,slideshowSpeed:5000,pauseOnAction:false,pauseOnHover:true,namespace:"mflex-",prevText:"<i class=\"micon-slider-arrow-left fa\"></i>",nextText:"<i class=\"micon-slider-arrow-right fa\"></i>",});});</script>
	
	
	
	<?php }else{?>
	<div class="image_frame<?php print $blog_style_n?>"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><img src="<?php print image_style_url($style, $imageone) ?>" alt="<?php print $title; ?>" /></a></div>
	<?php
	}
	?>
	
	<?php 
		if($blog_style=='with_small_image'){
			print '<div class="post_info_content_small">';
	?>
	<style type="text/css">
		.mflex-direction-nav{
			margin-top:-30px;
		}
	</style>
	<?php
		}
	?>
	
	
	<a href="#" class="date"><strong><?php print format_date($node->created, 'custom', 'd');?></strong><i><?php print format_date($node->created, 'custom', 'M');?></i></a>
	<h3><a href="<?php print $node_url; ?>" title="<?php print $node->title; ?>"><?php print $node->title; ?></a></h3>
		<ul class="post_meta_links">
			<li class="post_by"><?php print $node->name?></li>
			<li class="post_categoty"><?php print render($content['field_categories']);?></li>
			<li class="post_comments"><a href="#"><?php print $comment_count; ?> Comments</a></li>
		</ul>
	 
	
	<?php 
		if($blog_style!='with_small_image')
			print '<div class="post_info_content">';
		hide($content['comments']); 
		hide($content['links']); 
		hide($content['field_tags']); 
		hide($content['field_categories']); 
		print render($content); 
	?>
	</div>
	</div>
</div><!-- /# end post -->

<div class="clearfix divider_line"></div>



<?php }else{
	if($node->field_image){
			$imageone = $node->field_image['und'][0]['uri']; 
			$style = 'blog'; //image style
		}
	?>
<div class="blog_post">	
	<div class="blog_postcontent">
	<?php if (!empty($node->field_image['und']) && count($node->field_image['und']) > 1){ ?>
	<div class="flexslider flexslider-portfolio-detail mds-flexslider-slider nav-style-thin nav-size-large">
		<ul class="slides">
			<?php 
				foreach ($node->field_image['und'] as $img): 
					$img_view = file_create_url($img['uri']);
				?>
			<li>
			<img src="<?php print render(file_create_url($img['uri']));?>" class="attachment-single-thumb-large" /></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<script type="text/javascript">jQuery(window).on("load",function($){jQuery(".flexslider-portfolio-detail").flexslider({animation:"fade",direction:"horizontal",slideshow:true,controlNav:false,slideshowSpeed:5000,pauseOnAction:false,pauseOnHover:true,namespace:"mflex-",prevText:"<i class=\"micon-slider-arrow-left fa\"></i>",nextText:"<i class=\"micon-slider-arrow-right fa\"></i>",});});</script>
	
	
	
	<?php }else{?>
	<div class="image_frame"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><img src="<?php print image_style_url($style, $imageone) ?>" alt="<?php print $title; ?>" /></a></div>
	<?php
	}
	?>
	
	<!--<div class="image_frame"><a href="#"><img src="http://placehold.it/810x360" alt="" /></a></div>-->
	<a href="<?php print $node_url; ?>" class="date"><strong><?php print format_date($node->created, 'custom', 'd');?></strong><i><?php print format_date($node->created, 'custom', 'M');?></i></a>
	<h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
		<ul class="post_meta_links">
			<li class="post_by"><?php print $node->name?></li>
			<li class="post_categoty"><?php print render($content['field_categories']);?></li>
			<li class="post_comments"><a href="#"><?php print $comment_count?> Comments</a></li>
		</ul>
	 
	<div class="post_info_content">
		<?php
			hide($content['comments']); 
			hide($content['links']); 
			hide($content['field_tags']); 
			hide($content['field_image']); 
			hide($content['field_categories']); 
			
			print render($content);
		?>
	</div>
	</div>
</div><!-- /# end post -->

<div class="clearfix divider_line"></div>
<div class="clearfix mar_top5"></div>
<?php print render($content['comments']); ?>
<?php
	}
?>