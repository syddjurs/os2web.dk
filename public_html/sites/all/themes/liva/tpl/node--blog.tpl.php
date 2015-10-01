<div class="blog_post" id="node-<?php print $node->nid; ?>">	
	<div class="blog_postcontent">
		<a href="<?php print $node_url; ?>" class="date">
			<strong><?php print format_date($node->created, 'custom', 'd');?></strong>
			<i><?php print format_date($node->created, 'custom', 'M');?></i>
		</a>
		<h3>
			<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
		</h3>
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
			<br />
			<br />
			<?php print render($content['field_image']); ?>
		</div>
	</div>
</div>

<div class="clearfix divider_line"></div>
<div class="clearfix mar_top5"></div>

<?php print render($content['comments']); ?>
