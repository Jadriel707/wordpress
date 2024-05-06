<?php
/**
 * Title: Product Hub
 * Slug: quantumfashion/product-hub
 * Categories: quantumfashion
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-2","className":"animated fadeInUp","layout":{"type":"constrained"},"metadata":{"name":"Product Hub"}} -->
<main class="wp-block-group animated fadeInUp has-accent-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"65%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="margin-top:0;margin-bottom:0;font-size:42px;font-style:normal;font-weight:600"><strong><?php echo esc_html__( 'Product Hub', 'quantumfashion' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5"><?php echo esc_html__( 'Pulvinar cras et sem egestas ullamcorper leo eu scelerisque. Euismod eu elementum urna pretium ut nunc eleifend vestibulum ultrices. Fringilla libero pellentesque pharetra feugiat libero leo. Euismod eu elementum urna pretium ut nunc eleifend vestibulum ultrices.', 'quantumfashion' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":2,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"border":{"radius":"8px"}},"backgroundColor":"accent-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-4-background-color has-background" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"250px","style":{"border":{"radius":"8px"}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"},"padding":{"top":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->