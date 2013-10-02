<?php
/**
 * @file
 * Returns HTML for a region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728112
 */
?>

  <div class="<?php print $classes; ?>">
    <?php print $content; ?>
    <?php include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--footer.inc'; ?>
  </div>

