<div class="clearfix mar_top7"></div>
<div class="fresh_projects">
	<div class="clearfix mar_top7"></div>
	<div class="container">
		<?php 
			$desc_temp = $settings['desc'];
			if(!empty($desc_temp))
				$desc = '<br/><i>'.$desc_temp.'</i>';
			else
				$desc = '';
			if(!empty($title)) 
				print '<h1>'.$title.$desc.'</h1>';
			else
				print $desc;
		?>
		<ul id="mycarouseltwo" class="jcarousel-skin-tango">
			<?php 
				foreach ($nodes as $node): 
			?>
			<?php $field_image = field_get_items('node', $node, 'field_image');?>
			<li>
				<div class="item">
					<div class="fresh_projects_list">
						<section class="cheapest">
							<div class="display">
								<div class="small-group">
									<div class="small money"><a title="<?php print $node->title;?>" href="<?php print url('node/' . $node->nid); ?>">
										<?php if(!empty($field_image)) print theme('image_style', array('style_name' => 'portfolio_preview', 'path' => $field_image[0]['uri'])); ?>
										<div class="info">
											<h1><?php print $node->title;?></h1>
											<h2><?php print widget_format_terms('field_portfolio_category', $node); ?></h2>
											<div class="additionnal"><b><?php print t('View Project');?></b></div>
										</div>
										<div class="hover"></div>
										</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</li>
			<?php 
				endforeach;
			?>
		</ul>
	</div>
	<div class="clearfix mar_top5"></div>
</div>