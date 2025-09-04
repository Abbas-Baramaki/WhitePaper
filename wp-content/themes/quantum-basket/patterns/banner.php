<?php
/**
 * Title: Banner
 * Slug: quantum-basket/banner
 * Categories: quantum-basket
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"className":"responsive-spacing","style":{"spacing":{"padding":{"right":"20px","left":"20px","bottom":"50px","top":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group responsive-spacing" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","className":"wow animate__animated animate__fadeIn"} -->
<div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__fadeIn"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1","fontSize":"72px"},"spacing":{"margin":{"top":"5px","bottom":"0"}}}} -->
<h1 class="wp-block-heading" style="margin-top:5px;margin-bottom:0;font-size:72px;line-height:1"><?php echo esc_html__( 'Your Favorite Find is Just a Click Away', 'quantum-basket' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}},"typography":{"lineHeight":"1.5"}}} -->
<p style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px;line-height:1.5"><?php echo esc_html__( 'Mattis pellentesque ex phasellus amet nulla aliquam commodo eu posuere in sit efficitur per libero consectetuer id elit neque condimentum parturient Adipiscing ipsum netus donec erat vivamus congue eget fermentum', 'quantum-basket' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Explore Collection', 'quantum-basket' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"contrast","className":"is-style-outline has-arrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"10px","color":"#e6eaec","width":"1px"}}} -->
<div class="wp-block-button is-style-outline has-arrow-icon"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color has-border-color wp-element-button" style="border-color:#e6eaec;border-width:1px;border-radius:10px"><?php echo esc_html__( 'Get Started', 'quantum-basket' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg","id":79,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.6,"y":0.44},"minHeight":650,"sizeSlug":"full","className":"r-cover","style":{"border":{"radius":"20px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover r-cover" style="border-style:none;border-width:0px;border-radius:20px;min-height:650px"><img class="wp-block-cover__image-background wp-image-79 size-full" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" style="object-position:60% 44%" data-object-fit="cover" data-object-position="60% 44%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->