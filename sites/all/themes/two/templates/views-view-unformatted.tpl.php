<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>

<?php
  switch($view->name){
	case 'tweets':
		$classes_array[$id] .= ' grid grid-third';
		break;
  }
  ?>

  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <div class="inner clearfix">
		<?php print $row; ?>
    </div>
  </div>
<?php endforeach; ?>