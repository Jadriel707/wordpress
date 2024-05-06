<?php
 /**
  * Title: Blog Left
  * Slug: quantumfashion/blog-left
  * Inserter: no
  */
?>
<!-- wp:cover {"overlayColor":"cat-color","isUserOverlayColor":true,"minHeight":232,"minHeightUnit":"px","tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-cat-color-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Blogs With Left Sidebar', 'quantumfashion' ); ?></h1>
<!-- /wp:heading --></div></main>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"right":"24px","left":"24px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-right:24px;padding-left:24px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"quantumfashion","area":"uncategorized"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":37,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base","className":"post-block","layout":{"type":"default"}} -->
<div class="wp-block-group post-block has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"15px","left":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:15px;padding-left:15px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"},"spacing":{"padding":{"top":"0"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":10} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"Read More","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php echo esc_html__( 'No posts found', 'quantumfashion' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->