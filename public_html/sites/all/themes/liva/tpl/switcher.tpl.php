<?php
	$disable_switcher = theme_get_setting('liva_disable_switch', 'liva');
	if(empty($disable_switcher))
		$disable_switcher = 'on';
	if(!empty($disable_switcher) && $disable_switcher=='on'){
?>
<?php global $base_url;?>
<!-- Switcher
===============================-->
<div id="switcher"><span id="sw-button-toggle" class="icon-magic"></span>
<div id="style-selector">
	<div class="style-selector-wrapper">
		<div>
			<span class="title-sub2">Predefined Color Skins</span>
			<ul class="styles" id="styles_color">
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/orange.css'?>"><span class="pre-color-skin1"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/lightblue.css'?>"><span class="pre-color-skin2"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/lightgreen.css'?>"><span class="pre-color-skin3"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/blue.css'?>"><span class="pre-color-skin4"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/default.css'?>"><span class="pre-color-skin5"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/red.css'?>"><span class="pre-color-skin6"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/cyan.css'?>"><span class="pre-color-skin7"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/purple.css'?>"><span class="pre-color-skin8"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/pink.css'?>"><span class="pre-color-skin9"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/colors/brown.css'?>"><span class="pre-color-skin10"></span></a></li>
			</ul>
			
			<!-- end Predefined Color Skins -->
			<span class="title-sub2">BG Patterns for Boxed</span>
			<ul class="styles" id="styles_bg" style="border-bottom: none;">
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-default.css'?>"><span class="bg-patterns1"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-one.css'?>"><span class="bg-patterns2"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-two.css'?>"><span class="bg-patterns3"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-three.css'?>"><span class="bg-patterns4"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-four.css'?>"><span class="bg-patterns5"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-five.css'?>"><span class="bg-patterns6"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-six.css'?>"><span class="bg-patterns7"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-seven.css'?>"><span class="bg-patterns8"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-eight.css'?>"><span class="bg-patterns9"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-nine.css'?>"><span class="bg-patterns10"></span></a></li>
				<li><a href="#" rel="<?php print $base_url.'/'.path_to_theme().'/css/bg-patterns/pattern-ten.css'?>"><span class="bg-patterns11"></span></a></li>
			</ul>
			<!-- end BG Patterns -->
			</div>
	</div>
</div>
</div>
<script language="javascript">
(function($) {
	$(document).ready(function(){
	
		$('ul#styles_color li a').click(function(){
			var rel = ($(this).attr('rel'));
			
			$('link[id="skin"]').attr('href',rel);
			return false;
		});
		$('ul#styles_bg li a').click(function(){
			var rel = ($(this).attr('rel'));
			
			$('link[id="bg_patterns"]').attr('href',rel);
			return false;
		});
	});

})(this.jQuery);
</script>
<?php
	}
?>