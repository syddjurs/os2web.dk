<?php
	$terms = array();
	$vid = NULL;
	$vid_machine_name = 'categories_portfolio';
	$vocabulary = taxonomy_vocabulary_machine_name_load($vid_machine_name);
	if (!empty($vocabulary->vid)) {
	  $vid = $vocabulary->vid;
	}
	if (!empty($vid)) {
	  $terms = taxonomy_get_tree($vid);
	}
?>
<div class="portfolioFilter">
	<a href="#" data-filter="*" class="current"><?php print t('Show All');?></a>
	<?php if (!empty($terms)): ?>
		<?php foreach ($terms as $term): ?>
		<a href="#" data-filter=".tid-<?php print $term->tid; ?>"><?php print $term->name; ?></a>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
<div class="clearfix mar_top5"></div>