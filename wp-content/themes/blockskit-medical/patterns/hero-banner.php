<?php
/**
 * Title: Hero Banner
 * Slug: blockskit-medical/hero-banner
 * Categories: all, banner
 * Keywords: hero banner
 */
$blockskit_medical_images = array(
    BLOCKSKIT_MEDICAL_URL . 'assets/images/home-banners-img1.jpg',
    BLOCKSKIT_MEDICAL_URL . 'assets/images/home-banners-img2.png',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_medical_images[0]); ?>","id":1021,"dimRatio":90,"overlayColor":"secondary","minHeight":50,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"0","right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"margin":{"bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small);min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1021" alt="" src="<?php echo esc_url($blockskit_medical_images[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|large"}},"border":{"radius":"10px"}}} -->
<div class="wp-block-columns" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:var(--wp--preset--spacing--xx-large);flex-basis:45%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'MORE THAN JUST PATIENT &apos; S', 'blockskit-medical' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"right":"0","left":"0","top":"20px","bottom":"20px"}}}} -->
<h1 class="wp-block-heading has-text-align-left" style="margin-top:20px;margin-right:0;margin-bottom:20px;margin-left:0;line-height:1"><?php esc_html_e( 'Best Medical Health Care Solutions', 'blockskit-medical' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Sed irure ridiculus, magni amet ullamco laboris eaque molestias totam elit, architecto condimentum cumque beatae explicabo pretium eaque totam excepteur possimus.', 'blockskit-medical' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<div class="wp-block-buttons has-custom-font-size has-small-font-size" style="line-height:1"><!-- wp:button {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Contact Us', 'blockskit-medical' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"13px","bottom":"13px"}}},"borderColor":"accent-text","className":"is-style-outline","fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size"><a class="wp-block-button__link has-border-color has-accent-text-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:13px;padding-right:var(--wp--preset--spacing--small);padding-bottom:13px;padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Learn More', 'blockskit-medical' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%"><!-- wp:image {"id":1022,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_medical_images[1]); ?>" alt="" class="wp-image-1022"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->