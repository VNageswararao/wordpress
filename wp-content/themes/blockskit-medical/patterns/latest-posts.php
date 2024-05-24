<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-medical/latest-posts
 * Categories: all, latest-posts
 * Keywords: latest-posts
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-small","left":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'ARTICLES &amp; ADVICE', 'blockskit-medical' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"lineHeight":"1.1"}}} -->
<h3 class="wp-block-heading has-text-align-left" style="line-height:1.1"><?php esc_html_e( 'Checkout Our Most Recent Blogs And Insights', 'blockskit-medical' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"37%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:37%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"13%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:13%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"right","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link has-text-align-right wp-element-button" style="border-radius:10px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'View All  Blogs', 'blockskit-medical' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"accent-text","className":"is-style-bk-box-shadow","layout":{"inherit":false}} -->
<div class="wp-block-group is-style-bk-box-shadow has-accent-text-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:post-featured-image {"style":{"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"lineHeight":"1.1"}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"typography":{"textTransform":"capitalize"}}} /-->

<!-- wp:paragraph -->
<p>|</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","className":"link-no-underline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->