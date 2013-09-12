<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
	
	// Include Flexslider on fromt
	if($is_front){
		libraries_load('flexslider');
		include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--flexslider.inc';
		print('<div class="front-content clearfix"><div class="home-logo"><img src="/'. path_to_theme() .'/images/img_home_logo.png" /></div>');
	}
	
	// Print node content
    print render($content);
	
	// Include blocks on front
	if($is_front){
		print '</div>';
		include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--newsletter.inc';
		include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--whatshappening.inc';
	}
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
