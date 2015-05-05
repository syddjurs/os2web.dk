<div class="clearfix"></div>
<div class="footer">
	<div class="clearfix mar_top6"></div>
	<div class="container">
		<?php
			if($page["footer_col_one"]):
		?>
		<div class="one_fourth">
			<?php
				print render($page["footer_col_one"]);
			?>
		</div>
		<?php
			endif;
		?>
		<?php
			if($page["footer_col_two"]):
		?>
		<div class="one_fourth">
			<?php
				print render($page["footer_col_two"]);
			?>
		</div>
		<?php
			endif;
		?>
		<?php
			if($page["footer_col_three"]):
		?>
			<div class="one_fourth">
				<?php
					print render($page["footer_col_three"]);
				?>
			</div>
		<?php
			endif;
		?>
		<?php
			if($page["footer_col_four"]):
		?>
			<div class="one_fourth last">
				<?php
					print render($page["footer_col_four"]);
				?>
			</div>
		<?php
			endif;
		?>
	</div>
	<div class="clearfix mar_top6"></div>
</div>
<div class="copyright_info">
	<div class="container">
		<div class="one_half"><?php print theme_get_setting('footer_copyright_message', 'liva'); ?></div>
		<?php
			if($page["social_network"]):
		?>
			<div class="one_half last">
				<?php
					print render($page["social_network"]);
				?>
			</div>
		<?php
			endif;
		?>
	</div>
</div>
<a href="#" class="scrollup">Scroll</a>
<?php include_once('switcher.tpl.php');?>