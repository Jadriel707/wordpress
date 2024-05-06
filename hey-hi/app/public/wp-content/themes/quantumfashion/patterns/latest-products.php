<?php
/**
 * Title: Latest Products
 * Slug: quantumfashion/latest-products
 * Categories: quantumfashion
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","className":"animated fadeInUp","layout":{"type":"constrained"},"metadata":{"name":"Latest Products"}} -->
<main class="wp-block-group animated fadeInUp has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-8"}}}},"textColor":"accent-8","fontSize":"medium"} -->
<p class="has-text-align-center has-accent-8-color has-text-color has-link-color has-medium-font-size" style="margin-top:0;margin-bottom:0"><strong><?php echo esc_html__( 'New Arrival', 'quantumfashion' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-center has-body-font-family" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:42px;font-style:normal;font-weight:600"><strong><?php echo esc_html__( 'Elevate Your Wardrobe: Discover Timeless Trends', 'quantumfashion' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Feugiat tellus quis praesent rutrum et. Fusce volutpat imperdiet consectetur pharetra. Aliquam eget neque arcu integer sagittis nisl. Proin mattis accumsan ultrices amet.', 'quantumfashion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"typography":{"fontSize":"16px"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:16px"><a class="wp-block-button__link wp-element-button" style="border-radius:6px;padding-top:15px;padding-bottom:15px"><?php echo esc_html__( 'Shop Now!', 'quantumfashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":2,"query":{"perPage":"3","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"8px","width":"20px","color":"#161515"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#161515;border-width:20px;border-radius:8px"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"","height":"300px","style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->