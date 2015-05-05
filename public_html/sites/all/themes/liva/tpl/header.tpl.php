<!-- HEADER -->
<header id="header">
	<!-- Top header bar -->
	
	<div id="trueHeader">
		<div class="wrapper">
			<div class="container">
				<?php
					if($logo || $site_slogan):
				?>
				<div id="sp-logo" class="span2">
					<?php
						if($logo){
					?>
					<div class="one_fourth"><a href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>" rel="home" ><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a></div>
					
					<?php }?>
					<?php if ($site_slogan){ ?>
					  <div id="site-slogan">
						<?php print $site_slogan; ?>
					  </div>
					<?php } ?>
				</div>
				<?php
					endif;
				?>
				<!-- Logo -->
				
				<!-- Menu -->
				<div class="three_fourth last">
					<nav id="access" class="access" role="navigation">
						<div id="menu" class="menu">
							
								<?php if ($page['main_menu']): ?>
									<?php print render($page['main_menu']); ?>
								<?php endif; ?>
							
							
							
						</div>
					</nav>
					<!-- end nav menu -->
				</div>
			</div>
		</div>
	</div>
</header>
<!-- end header -->
<div class="clearfix"></div>
	