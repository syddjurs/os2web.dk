<?php
 global $base_root;
 
?>
<div class="portfolio_area">
	<div class="portfolio_area_left">
		<?php print render($content['field_image']); ?>
	</div>
	<div class="portfolio_area_right">
		<h2>
			<?php print $node->title;?>
		</h2>
						
		<table class="portfolio_details_table">
			<tr>
				<td><strong><?php print t('Project Description'); ?></td>
				<td><em><?php print render($content['field_description_portfolio']);?></em></td>
			</tr>
			<tr>
				<td><strong><?php print t('Date');?></strong></td>
				<td><em><?php print format_date($node->created, 'custom', 'M d, Y');?></em></td>
			</tr>
			<tr>
				<td><strong><?php print t('Categories');?></strong></td>
				<td><em><?php print widget_format_terms('field_portfolio_category', $node); ?></em></td>
			</tr>
		</table>
		
		<div class="clearfix mar_top3"></div>				
				
		<a href="<?php $link = field_get_items('node', $node, 'field_link_portfolio'); print $link[0]['value'];?>" target="_blank">
			<?php print t('Visit Site');?>
		</a>
	</div>
</div>
