<?php
/**
 * Title: Header
 * Slug: quantum-basket/header
 * Categories: header, quantum-basket
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"base-2","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" id="sticky-header" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"28px","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:navigation {"icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"25px"}},"layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"8px","bottom":"8px","left":"12px","right":"12px"}},"border":{"radius":"50px","color":"#565656","width":"2px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-border-color" style="border-color:#565656;border-width:2px;border-radius:50px;padding-top:8px;padding-right:12px;padding-bottom:8px;padding-left:12px"><!-- wp:image {"id":50,"width":"18px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/contact-2.png" alt="" class="wp-image-50" style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:14px;font-style:normal;font-weight:600"><?php echo esc_html__( '+025 - 365 - 5 - 5501', 'quantum-basket' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","hasHiddenPrice":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->