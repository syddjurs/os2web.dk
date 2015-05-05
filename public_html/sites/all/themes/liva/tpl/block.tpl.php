<?php 
$out = '';
if ($block->region == 'sidebar_first' or $block->region == 'sidebar_second') {
	
	$out .= '<div class="sidebar_widget '.$classes.'">';
		$out .= '<div class="mod-wrapper clearfix">';
			$out .= render($title_suffix);
			if ($block->subject && !empty($block->subject)) 
				$out .= '<div class="sidebar_title"><h3>'.$block->subject.'</h3></div>';
			$out .= $content;
		$out .= '</div>';	
	$out .= '</div>';
	$out .= '<div class="clearfix mar_top4"></div>';
	
}elseif($block->region == 'main_menu'){
	$out .= $content;
}elseif($block->region == 'section'){
	$out .= '<div class="'.$classes.'">';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</div>';
}elseif($block->region == 'footer_col_one' or $block->region == 'footer_col_two' or $block->region == 'footer_col_three' or $block->region == 'footer_col_four' ){
	$out .= '<div id="'.$block->module.'" class="'.$classes.'">';
		if(!empty($block->subject))
			$out .= '<h2>'.$block->subject.'</h2>';
			$out .= render($title_suffix);
			$out .= $content;
	$out .= '</div>';
}else{
	$out .= render($title_prefix);
	if ($block->subject):
		$out .= '<h2 '.$title_attributes.'>'.$block->subject.'</h2>';
	endif;
	
	$out .= $content;
}
print $out;
?>