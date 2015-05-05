<ul class="footer_social_links">
	<?php
		if(!empty($social['rss']))
			echo '<li><a target="_blank" class="" title="RSS" href="'.$social['rss'].'"><i class="fa fa-rss"></i></a></li>';
			
		if(!empty($social['facebook']))
			echo '<li><a target="_blank" class="" title="Facebook" href="'.$social['facebook'].'"><i class="fa fa-facebook"></i></a></li>';
			
		if(!empty($social['twitter']))
			echo '<li><a target="_blank" class="" title="Twitter" href="'.$social['twitter'].'"><i class="fa fa-twitter"></i></a></li>';
		
		if(!empty($social['googleplus']))
			echo '<li><a target="_blank" class="" title="Google plus" href="'.$social['googleplus'].'"><i class="fa fa-google-plus"></i></a></li>';
			
		if(!empty($social['youtube']))
			echo '<li><a target="_blank" class="" title="YouTube" href="'.$social['youtube'].'"><i class="fa fa-youtube"></i></a></li>';
		if(!empty($social['linkedin']))
			echo '<li><a target="_blank" class="" title="Linkedin" href="'.$social['linkedin'].'"><i class="fa fa-linkedin"></i></a></li>';
		
		if(!empty($social['skype']))
			echo '<li><a target="_blank" class="" title="Skype" href="skype:'.$social['skype'].'?call"><i class="fa fa-skype"></i></a></li>';	
		if(!empty($social['flickr']))
			echo '<li><a target="_blank" class="" title="Flickr" href="'.$social['flickr'].'"><i class="fa fa-flickr"></i></a></li>';	
	?>
</ul>