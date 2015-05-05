<?php 
global $base_url;

function liva_preprocess_html(&$variables) {
	//Include google font
	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style.css', array('type' => 'external'));


	drupal_add_css(base_path().path_to_theme().'/css/flexslider.css', array('type' => 'external'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery.flexslider.js', array(
	  'type' => 'external',
	  'scope' => 'header',
	  'group' => JS_THEME,
	  'weight' => 5,
	));
	drupal_add_js(base_path().path_to_theme().'/js/jflickrfeed.js', array(
	  'type' => 'external',
	  'scope' => 'header',
	  'group' => JS_THEME,
	  'weight' => 4,
	));
	
	drupal_add_js(base_path().path_to_theme().'/js/sticky-menu/core.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/portfolio/jquery.isotope.js', array('type' => 'file', 'scope' => 'footer'));
	
	if(theme_get_setting('liva_disable_switch', 'liva')=='on'){
		drupal_add_js(base_path().path_to_theme().'/js/styleswitcher.js', array('type' => 'file', 'scope' => 'footer'));
		drupal_add_css(base_path().path_to_theme().'/css/color-switcher.css', array('type' => 'external'));
		
	}
}
// Add css skin
$setting_skin = theme_get_setting('built_in_skins', 'liva');
if(empty($setting_skin) || !$setting_skin || $setting_skin=='default'){
	$skin_color = 'default.css';
}else{
	$skin_color = $setting_skin;
}
$css_skin = array(
  '#tag' => 'link', // The #tag is the html tag - <link />
  '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => $base_url.'/'.path_to_theme().'/css/colors/'.$skin_color, 
    'rel' => 'stylesheet',
    'type' => 'text/css',
	'id' => 'skin',
	
  ),
  '#weight' => 3,
);
drupal_add_html_head($css_skin, 'skin');

$setting_background = theme_get_setting('bg_patterns', 'liva');
if(empty($setting_background) || !$setting_background || $setting_background=='default'){
	$skin_bg = 'pattern-default.css';
}else{
	$skin_bg = $setting_background;
}
$css_patterns = array(
  '#tag' => 'link', // The #tag is the html tag - <link />
  '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => $base_url.'/'.path_to_theme().'/css/bg-patterns/'.$skin_bg, 
    'rel' => 'stylesheet',
    'type' => 'text/css',
	'id' => 'bg_patterns',
	
  ),
  '#weight' => 4,
);
drupal_add_html_head($css_patterns, 'bg_patterns');


$ie_script =  array(
	'#browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE),
	'#tag' => 'script',
	'#attributes' => array(
		'type' => "text/javascript",
		'src' => 'http://html5shim.googlecode.com/svn/trunk/html5.js',
	)
);
drupal_add_html_head($ie_script, "livaie");

function liva_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'liva_customize_comment_form';
}

function liva_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function liva_preprocess_page(&$vars) {
	
	// Node template suggestions like page--node--blog.tpl.php
	if (isset($vars['node'])) {  
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
		
		//$vars['theme_hook_suggestions'][] = 'page__node__'. $vars['node']->type; page--node--blog.tpl.php
	}
	
	//404 page
	$status = drupal_get_http_header("status");  
	if($status == "404 Not Found") {      
		$vars['theme_hook_suggestions'][] = 'page__404';
	}
	
}

//custom main menu
function liva_menu_tree__main_menu($variables) {
	$element = &$vars['element'];
	
	$str = '';
	$str .= '<ul id="tiny">';
		$str .= $variables['tree'];
	$str .= '</ul>';
	
	return $str;
}
function liva_menu_tree(&$variables) {
	return '<ul>' . $variables['tree'] . '</ul>';
}
//custom footer menu
function liva_menu_tree__menu_top_menu($variables) {
	
	
	
	$str = '';
	$str .= '<div id="sp-top-pan1" class="span3">';
		$str .= '<ul id="tiny">';
			$str .= $variables['tree'];
		$str .= '</ul>';
	$str .= '</div>';
	return $str;
}


// Remove superfish css files.
function liva_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
	
//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}

function liva_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
	if($form_id == 'contact_site_form'){
		$form['mail']['#attributes']['class'] = array("input-contact-form");
		$form['name']['#attributes']['class'] = array("input-contact-form");
		$form['subject']['#attributes']['class'] = array("input-contact-form");
		$form['message']['#attributes']['class'] = array("message-contact-form");
		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button'); 
	}
	if ($form_id == 'comment_form') {
		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
	}
}
function liva_breadcrumb($variables) {
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		$crumbs = '<div class="pagenation">&nbsp;';
			foreach($breadcrumb as $value) {
				$crumbs .= $value.'&nbsp;<i>/</i>&nbsp;';
			}
			$crumbs .= drupal_get_title();
		$crumbs .= '</div>';
		return $crumbs;
	}else{
		return NULL;
	}
}