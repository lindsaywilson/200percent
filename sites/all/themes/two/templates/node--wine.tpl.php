<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
 //dpm($node);
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  
	<div class="section top clearfix">
    
		<div class="grid product-description">
            <div class="logo"><img src="/<?php print path_to_theme(); ?>/images/logo_shop.png" /></div>
            <?php print render($content['body']); ?>
        </div>
        
		<div class="grid product-image">
        	<img src="/<?php print path_to_theme(); ?>/images/bottle_shop.png" />
        </div>
  
	</div>
	
	<div class="section bottom clearfix">
    
    	<div class="product-details clearfix">
        	<div class="grid">
            	<?php print render($content['field_date_bottled']); ?>
                <?php print render($content['field_release_date']); ?>
                <?php print render($content['field_cases_produced']); ?>
            </div>
            <div class="grid">
				<?php print render($content['field_alcohol_content']); ?>
                <?php print render($content['field_bottle_size']); ?>
                <?php print render($content['field_sku']); ?>
            </div>
        </div>
        <div class="product-price clearfix">
        	<div class="grid label">Price per bottle</div>
			<div class="grid price"><span class="dollar">$</span><span class="value"><?php print $node->field_price['und'][0]['safe_value'] ?></span></div>
        </div>
        <div class="add-to-cart"><a rel="external" href="http://hillsidewinery.ca/cart/add/e-p<?php print $node->field_product_id['und'][0]['safe_value'] ?>?destination=cart/checkout">Add to cart</a></div>
    
    </div>


</article>
