<ul class="tags">
	<?php 
		foreach ( $terms as $term ) {
			print '<li><a href="'.url('taxonomy/term/' . $term->tid).'">'.$term->name.'</a></li>';
		}
	?>	
</ul>