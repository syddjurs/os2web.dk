<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
 
 global $base_root;
 
?>
<div class="portfolio_area">
	<div class="portfolio_area_left">
	<?php 
		if (!empty($content['field_image'])){
				hide($content['field_image']);
				$field_image = field_get_items('node', $node, 'field_image');
				if (!empty($node->field_image['und']) && count($node->field_image['und']) == 1){ // 1 image
					print '<span class="itemImage">'.theme('image', array('path' => $field_image[0]['uri'])).'</span>';
				}else{
					
					print '<div class="project-flexslider">';
						print '<div class="flexslider flexslider-portfolio-detail mds-flexslider-slider nav-style-thin nav-size-large">';
							print '<ul class="slides">';
								foreach ($field_image as $img):
									print '<li>';
										//display image style
										//print theme('image_style', array('style_name' => 'YOUR_IMAGE_STYLE', 'path' => $img['uri'], 'attributes' => array('class' => 'attachment-large')));
										print theme('image', array('path' => $img['uri']));
									print '</li>';
								endforeach;
							print '</ul>';
						print '</div>';
					print '</div>';
					
					print '<script type="text/javascript">jQuery(window).on("load",function($){jQuery(".flexslider-portfolio-detail").flexslider({animation:"fade",direction:"horizontal",slideshow:true,controlNav:false,slideshowSpeed:5000,pauseOnAction:false,pauseOnHover:true,namespace:"mflex-",prevText:"<i class=\"micon-slider-arrow-left fa\"></i>",nextText:"<i class=\"micon-slider-arrow-right fa\"></i>",});});</script>';
				}
			}
	?>
	
	
	</div>
	<div class="portfolio_area_right">
		<h2><?php print $node->title;?></h2>
		<h3><i><?php print t('Project Description');?></i></h3>
		<p><?php print render($content['field_description_portfolio']);?></p>
		
		
		<div class="project_details">
			<h4><b><?php print t('Project Details');?></b></h4>
			<span><strong>Date</strong><em><?php print format_date($node->created, 'custom', 'M d, Y');?></em></span><span><strong><?php print 'Categories';?></strong><em><?php print widget_format_terms('field_portfolio_category', $node); ?></em></span><span><strong><?php print t('Author ');?></strong><em><?php print $node->name;?></em></span>
			<div class="clearfix mar_top3"></div>
			<a href="<?php $link = field_get_items('node', $node, 'field_link_portfolio'); print $link[0]['value'];?>" class="but_goback" target="_blank"><i class="fa fa-hand-o-right fa-lg"></i> <?php print t('Visit Site');?></a></div>
	</div>
</div>
