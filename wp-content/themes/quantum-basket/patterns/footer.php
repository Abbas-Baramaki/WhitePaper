<?php
/**
 * Title: Footer
 * Slug: quantum-basket/footer
 * Categories: footer,quantum-basket
 * Keywords: footer
 * Block Types: core/template-part/footer
 */
if (!is_page("login" && !is_page("books")))
{
    ?>
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"50px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"0","bottom":"50px"}},"color":{"background":"#e6eaec"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:0;margin-bottom:50px;background-color:#e6eaec;color:#e6eaec"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"60px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<div class="wp-block-columns has-secondary-color has-text-color has-link-color" style="margin-bottom:60px"><!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"16px","top":"0"}}},"fontSize":"mdm-large"} -->
<h2 class="wp-block-heading has-mdm-large-font-size" style="margin-top:0;margin-bottom:16px;line-height:1"><?php echo esc_html__( 'Explore', 'quantum-basket' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'New Arrivals', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Trending Now', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Best Sellers', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Seasonal Picks', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"fontSize":"mdm-large"} -->
<h2 class="wp-block-heading has-mdm-large-font-size" style="margin-top:0;margin-bottom:16px;line-height:1"><?php echo esc_html__( 'Our Brand', 'quantum-basket' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Who We Are', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Sustainability', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Careers', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Help Center', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"fontSize":"mdm-large"} -->
<h2 class="wp-block-heading has-mdm-large-font-size" style="margin-top:0;margin-bottom:16px;line-height:1"><?php echo esc_html__( 'Resources', 'quantum-basket' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Track Your Order', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Return Policy', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Formal Men', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Partner With Us', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"fontSize":"mdm-large"} -->
<h2 class="wp-block-heading has-mdm-large-font-size" style="margin-top:0;margin-bottom:16px;line-height:1"><?php echo esc_html__( 'Follow Us On', 'quantum-basket' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:social-links {"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"background":"#e6eaec"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:0;margin-bottom:0;background-color:#e6eaec;color:#e6eaec"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html__( 'Designed with WordPress', 'quantum-basket' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"quantum-basket-scroll-top"} -->
<p class="quantum-basket-scroll-top"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:16px"><a href="#"><?php echo esc_html__( 'Terms of Use', 'quantum-basket' ); ?></a>  |  <a href="#"><?php echo esc_html__( 'Privacy Policy', 'quantum-basket' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
    <?php
}


