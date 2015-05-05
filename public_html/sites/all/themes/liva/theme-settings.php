<?php
function liva_form_system_theme_settings_alter(&$form, $form_state) {

  $theme_path = drupal_get_path('theme', 'liva');
  
  $form['settings'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
	  '#attached' => array(
					'css' => array(drupal_get_path('theme', 'liva') . '/css/drupalet_base/admin.css'),
					'js' => array(
						drupal_get_path('theme', 'liva') . '/js/base_drupalet_admin/admin.js',
					),
					
			),
  );

  $form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'liva'),
  );
  
  //PORTFOLIO SETTING
  $form['settings']['portfolio'] = array(
      '#type' => 'fieldset',
      '#title' => t('Portfolio settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['portfolio']['default_portfolio'] = array(
      '#type' => 'select',
      '#title' => t('Default portfolio display'),
      '#options' => array(
		  //'2c' => 'Portfolio - 2cols',
		  '3c' => 'Portfolio - 3cols',
          //'4c' => 'Portfolio - 4cols',
      ),
      '#default_value' => theme_get_setting('default_portfolio', 'liva'),
  );
  $form['settings']['portfolio']['default_nodes_portfolio'] = array(
      '#type' => 'select',
      '#title' => t('Number nodes show on portfolio page'),
     '#options' => drupal_map_assoc(array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 25, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 100)),
      '#default_value' => theme_get_setting('default_nodes_portfolio', 'liva'),
  );

  $form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Footer copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message', 'liva'),
  );
  
  

  $form['settings']['skin'] = array(
      '#type' => 'fieldset',
      '#title' => t('Switcher Style'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );
  
  //Disable Switcher style;
  $form['settings']['skin']['liva_disable_switch'] = array(
      '#title' => t('Switcher style'),
      '#type' => 'select',
      '#options' => array('on' => t('ON'), 'off' => t('OFF')),
      '#default_value' => theme_get_setting('liva_disable_switch', 'liva'),
  );
  
  //Skin
  $form['settings']['skin']['built_in_skins'] = array(
      '#type' => 'radios',
		'#title' => t('Built-in Skins'),
		'#options' => array(
			  'default' => t('(Default)'),
			  'blue.css' => t('Blue'),
			  'brown.css' => t('Brown'),
			  'cyan.css' => t('Cyan'),
			  'lightblue.css' => t('Light blue'),
			  'lightgreen.css' => t('light green'),
			  'orange.css' => t('Orange'),
			  'pink.css' => t('Pink'),
			  'purple.css' => t('Purple'),
			  'red.css' => t('Red'),
		),
		'#default_value' => theme_get_setting('built_in_skins','liva')
	  
	 
  );
  
  $form['settings']['skin']['bg_patterns'] = array(
		'#type' => 'radios',
		'#field_prefix' => t('Select background'),
		'#title' => t('Background patterns'),
		'#options' => array(
				'default' => t('Default'),
				'pattern-one.css' => t('One'),
				'pattern-two.css' => t('Two'),
				'pattern-three.css' => t('Three'),
				'pattern-four.css' => t('Four'),
				'pattern-five.css' => t('Five'),
				'pattern-six.css' => t('Six'),
				'pattern-seven.css' => t('Seven'),
				'pattern-eight.css' => t('Eight'),
				'pattern-nine.css' => t('Nine'),
				'pattern-ten.css' => t('Ten'),
				
		),
		'#default_value' => theme_get_setting('bg_patterns')
  );
  
  
	$form['settings']['custom_css'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Custom CSS'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );  
	$form['settings']['custom_css']['custom_css'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Custom CSS'),
		  '#default_value' => theme_get_setting('custom_css', 'liva'),
		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	  );
	
	 //Contact settings
	$form['settings']['contact_pages'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Contact page'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );
	$form['settings']['contact_pages']['contact_page_address_info'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Address info'),
		  '#default_value' => theme_get_setting('contact_page_address_info', 'liva'),
		  '#rows' => 10
	  );
	$form['settings']['contact_pages']['contact_page_gmap'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Gmap'),
		  '#default_value' => theme_get_setting('contact_page_gmap', 'liva'),
		  '#description'  => t('Example: <pre>&lt;iframe class=&quot;google-map&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; src=&quot;http://maps.google.com/maps<br/>?f=q&amp;amp;source=s_q&amp;amp;hl=en&amp;amp;geocode=&amp;amp;q=WA,+United+States&amp;amp;aq=0&amp;amp;oq=WA&amp;amp;sll=47.605288,-122.329296&amp;<br/>amp;sspn=0.008999,0.016544&amp;amp;ie=UTF8&amp;amp;hq=&amp;amp;hnear=Washington,<br/>+District+of+Columbia&amp;amp;t=m&amp;amp;z=7&amp;amp;iwloc=A&amp;amp;output=embed&quot;&gt;&lt;/iframe&gt;</pre>'),
		  '#rows' => 6
	  );
	
	 //Page blog settings
	$form['settings']['blog_page'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Blog page'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );
	 $form['settings']['blog_page']['blog_page_style'] = array(
      '#title' => t('Blog page style'),
      '#type' => 'select',
      '#options' => array(
		  'with_large_image' => t('With large image (Default)'),
		  'with_small_image' => t('With small image'),
		),
      '#default_value' => theme_get_setting('blog_page_style', 'liva'),
  );
}