<?php if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>
<h4><i><?php print $content['#node']->comment_count; ?> <?php print t('Comments');?></i></h4>
<div class="mar_top_bottom_lines_small3"></div>
<?php print render($content['comments']); ?>
<?php print str_replace('resizable', '', render($content['comment_form'])); ?>



<?php } ?>
