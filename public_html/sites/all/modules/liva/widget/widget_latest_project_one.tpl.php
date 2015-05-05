<div class="sidebar_title"><h3><?php print $title;?></h3></div>
<div class="portfolio_sidebar_widget">
        
	<ul class="">
	<?php foreach ($nodes as $node): ?>
	<?php $field_image = field_get_items('node', $node, 'field_image'); ?>
		<li>
			<div class="item">                        
			<div class="fresh_projects_list">
				<section class="cheapest">
					<div class="display">                  
						<div class="small-group">        
							<div class="small money">  
								<a href="<?php print url('node/' . $node->nid); ?>">
									<?php 
								print theme('image_style', array('style_name' => 'portfolio_preview', 'path' => $field_image[0]['uri'], 'attributes' => array('width' => '100%', 'height' => 'auto'))); ?>
									<div class="info">
										<h1><?php print $node->title; ?></h1>
										<h2><?php print widget_format_terms('field_portfolio_category', $node); ?></h2>
										<div class="additionnal">
											 <b>View Project</b>
										</div>
									</div>
									<div class="hover"></div>
								</a>   
							</div>        
						</div>     
					</div>
				</section>
			</div>
			</div>
		</li><!-- end item -->
	<?php endforeach;?>
  </ul>
  
</div>