<?php
/**
 * Title: Latest Products
 * Slug: quantum-basket/products
 * Categories: quantum-basket
 * Keywords: products
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Latest Products"},"className":"responsive-spacing","style":{"spacing":{"padding":{"right":"20px","left":"20px","bottom":"50px","top":"50px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group responsive-spacing" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:group {"className":"title-spacing","style":{"spacing":{"margin":{"top":"0","bottom":"40px"},"padding":{"bottom":"0","top":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group title-spacing" style="margin-top:0;margin-bottom:40px;padding-top:0;padding-bottom:0"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Latest Product', 'quantum-basket' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"contrast","className":"is-style-outline has-arrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"10px","color":"#e6eaec","width":"1px"}}} -->
<div class="wp-block-button is-style-outline has-arrow-icon"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color has-border-color wp-element-button" style="border-color:#e6eaec;border-width:1px;border-radius:10px"><?php echo esc_html__( 'View All Products', 'quantum-basket' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":"10px"}}} -->
<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"fontSize":"mdm-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"sml-medium","style":{"spacing":{"margin":{"top":"0.75rem","bottom":"0.75rem"}}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->