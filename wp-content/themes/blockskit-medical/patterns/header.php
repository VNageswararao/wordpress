<?php
/**
 * Title: Header
 * Slug: blockskit-medical/header
 * Categories: all, header
 */
$blockskit_medical_images = array(
    BLOCKSKIT_MEDICAL_URL . 'assets/images/header-img1.png',
    BLOCKSKIT_MEDICAL_URL . 'assets/images/header-img2.png',
    BLOCKSKIT_MEDICAL_URL . 'assets/images/header-img3.png',
    BLOCKSKIT_MEDICAL_URL . 'assets/images/header-img4.png',
);
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"right":"0","left":"0","top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'Get vaccination against the covid', 'blockskit-medical' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Learn More', 'blockskit-medical' ); ?></a> <img class="wp-image-1082" style="width: 11px;" src="<?php echo esc_url($blockskit_medical_images[0]); ?>" alt=""></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"0","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:column {"verticalAlignment":"center","width":"410px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:410px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><img class="wp-image-1017" style="width: 15px;" src="<?php echo esc_url($blockskit_medical_images[1]); ?>" alt=""> <?php esc_html_e( '+1987 123456', 'blockskit-medical' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><img class="wp-image-1018" style="width: 16px;" src="<?php echo esc_url($blockskit_medical_images[2]); ?>" alt=""> <?php esc_html_e( 'info@example.com', 'blockskit-medical' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><img class="wp-image-1019" style="width: 15px;" src="<?php echo esc_url($blockskit_medical_images[3]); ?>" alt=""> <?php esc_html_e( '+9987 554855', 'blockskit-medical' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"190px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:190px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Follow us :', 'blockskit-medical' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#20cbc2","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:column {"verticalAlignment":"center","width":"9%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:9%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":26,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":115,"icon":"menu","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"198px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:198px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"10px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:10px"><?php esc_html_e( 'Book Appointment', 'blockskit-medical' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->