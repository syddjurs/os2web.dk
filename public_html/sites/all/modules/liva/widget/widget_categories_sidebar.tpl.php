<ul class="tags">
	<?php 
		foreach ( $terms as $term ) {
			print '<li><a href="'.url('taxonomy/term/' . $term->tid).'" title="'.$term->name.'">'.$term->name.'</a></li>';
		}
	?>
</ul>