<div class="portfolio_page">
<?php require_once 'portfolio_filter.tpl.php';?>
<div class="portfolio-Container">
	<?php
		$i=0;
		foreach ($nodes as $node) :
			$i++;
		$image_full = '';
		$image_field = field_get_items('node', $node, 'field_image');
		if (!empty($image_field)) {
			$image_full = file_create_url($image_field[0]['uri']);
		}
		$node_url = url('node/' . $node->nid);
	?>
		<div class="<?php print portfolio_format_terms('field_portfolio_category', $node); ?>">
			<a class="fancybox" href="<?php print $node_url;?>" data-fancybox-group="gallery" title="">
				<div class="imgWrap">
					<?php 
					if (!empty($image_field)):
						$image_uri = $image_field[0]['uri'];
						$style_name = 'portfolio_preview';
						print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri)); 
					endif;
					?>
					<p class="imgDescription"><i class="fa fa-search fa-4x"></i></p>
					<h3><?php print $node->title;?></h3>
			</div>
		</a>
		</div>
	<?php
		endforeach;
	?>
</div>
</div>
<script type="text/javascript">
$(window).load(function(){
    var $container = $('.portfolio-Container');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});
</script>