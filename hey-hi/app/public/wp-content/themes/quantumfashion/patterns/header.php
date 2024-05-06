<?php
/**
 * Title: Header
 * Slug: quantumfashion/header
 * Categories: header, quantumfashion
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"25px","right":"25px"}},"border":{"bottom":{"color":"var:preset|color|accent-5","width":"1px"},"top":[],"right":[],"left":[]},"position":{"type":""}},"backgroundColor":"base-2","layout":{"type":"constrained","justifyContent":"center","contentSize":"1340px"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" id="sticky-header" style="border-bottom-color:var(--wp--preset--color--accent-5);border-bottom-width:1px;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"large"} /-->

<!-- wp:navigation {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"15px"},"border":{"radius":"6px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:15px"><a class="wp-block-button__link wp-element-button" style="border-radius:6px"><?php echo esc_html__( 'Call Now!', 'quantumfashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/mini-cart /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->