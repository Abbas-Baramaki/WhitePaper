<?php
 /**
  * Title: Single Product
  * Slug: quantum-basket/single-product
  * Inserter: no
  */
?>
<!-- wp:cover {"customOverlayColor":"#111111","isUserOverlayColor":true,"minHeight":232,"minHeightUnit":"px","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#111111"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center"} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-color has-text-color has-link-color"><!-- wp:woocommerce/breadcrumbs {"textColor":"link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","className":"responsive-spacing","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group responsive-spacing" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:woocommerce/store-notices /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"60px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"40px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"512px"} -->
<div class="wp-block-column" style="flex-basis:512px"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true} /-->

<!-- wp:post-excerpt {"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:woocommerce/product-meta {"metadata":{"ignoredHookedBlocks":["core/post-terms"]}} -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-sku /-->

<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/product-details -->
<div class="wp-block-woocommerce-product-details alignwide"></div>
<!-- /wp:woocommerce/product-details -->

<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
<div class="wp-block-query"><!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);font-size:32px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Related Products', 'quantum-basket' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"16rem"},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"height":"300px"} -->
<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"16px"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"24px","right":"24px"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:woocommerce/related-products --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"contrast-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-2-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3,"fontSize":"mdm-large"} -->
<h3 class="wp-block-heading has-mdm-large-font-size"><?php echo esc_html__( 'Search', 'quantum-basket' ); ?> </h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"contrast-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-2-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3,"className":"is-style-default","fontSize":"mdm-large"} -->
<h3 class="wp-block-heading is-style-default has-mdm-large-font-size"><?php echo esc_html__( 'Categories', 'quantum-basket' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"hasCount":false,"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"sml-medium"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"contrast-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-2-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"mdm-large"} -->
<h3 class="wp-block-heading has-mdm-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Filter by color', 'quantum-basket' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"className":"has-black-color has-text-color has-link-color","attributeId":1} -->
<div class="wp-block-woocommerce-attribute-filter is-loading has-black-color has-text-color has-link-color"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"contrast-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-2-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast"} -->
<h4 class="wp-block-heading has-contrast-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Filter by size', 'quantum-basket' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":"","lock":{"remove":true},"textColor":"black","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading has-black-color has-text-color has-link-color"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->