<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<header class="header" id="header" role="banner">
<div class="inner">
<div class="wrap">
	
    <div class="logo">
		<?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
        <?php endif; ?>
        <div class="tagline hear"></div>
        <div class="tagline taste"></div>
    </div>

</div>
</div>
</header>


<div id="navigation">
<div class="wrap">

      <?php if ($main_menu): ?>
        <div id="menu-toggle"><a href="#" class="open">Menu<span></span></a></div>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('clearfix'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php //print render($page['navigation']); ?>

</div>
</div>


<div id="page">
<div class="wrap">

  <div id="main">

    <div id="content" class="column" role="main">
      <a id="main-content"></a>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if ($title): ?>
      <div id="title">
      <div class="inner">
        <h1 class="page__title title" id="page-title"><?php print $title; ?><span></span></h1>
        <?php 
			if(isset($node) && $node->nid == '2'){
				print '<div class="violin"></div>';
			}
		?>
      </div>
      </div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

  </div>

  <?php print render($page['bottom']); ?>

</div>
</div>

<?php print render($page['footer']); ?>
