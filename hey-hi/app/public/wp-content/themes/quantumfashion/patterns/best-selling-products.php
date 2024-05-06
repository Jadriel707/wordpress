<?php
/**
 * Title: Best Selling Products
 * Slug: quantumfashion/best-selling-products
 * Categories: quantumfashion
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","className":"animated fadeInUp","layout":{"type":"constrained"},"metadata":{"name":"Best Selling Products"}} -->
<main class="wp-block-group animated fadeInUp has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:25px;padding-bottom:var(--wp--preset--spacing--50);padding-left:25px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:42px;font-style:normal;font-weight:600"><strong><?php echo esc_html__( 'Best Selling Products', 'quantumfashion' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5"><?php echo esc_html__( 'Pulvinar cras et sem egestas ullamcorper leo eu scelerisque. Euismod eu elementum urna pretium ut nunc eleifend vestibulum ultrices. Fringilla libero pellentesque pharetra feugiat libero leo.', 'quantumfashion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"16px"},"border":{"radius":"6px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:16px"><a class="wp-block-button__link wp-element-button" style="border-radius:6px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'See All', 'quantumfashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":2,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"border":{"radius":"10px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:10px;padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"","height":"250px","style":{"border":{"radius":"8px"}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"},"padding":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"accent-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}},"typography":{"fontSize":"16px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->