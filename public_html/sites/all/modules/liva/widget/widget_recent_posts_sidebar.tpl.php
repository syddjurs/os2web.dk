<ul class="recent_posts_list">
	<?php foreach ($nodes as $node): ?>
	<?php $field_image = field_get_items('node', $node, 'field_image'); ?>
	
	<li>
		<?php if(!empty($field_image)):?>
			<span><a href="<?php print url('node/' . $node->nid);?>" title=""><?php print theme('image_style', array('style_name' => 'thumbnail', 'path' => $field_image[0]['uri'], 'attributes' => array('width' => '50px', 'height'=>'50px'))); ?></a></span>
		<?php endif;?>
		<?php print l($node->title, 'node/' . $node->nid); ?>
		 <i><?php print date("M d, Y",$node->created); ?></i> 
	</li>	
	
		
	<?php endforeach; ?>
</ul>