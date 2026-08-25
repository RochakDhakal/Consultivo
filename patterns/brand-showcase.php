<?php

/**
 * Title: Brand Showcase
 * Slug: consultivo/brand-showcase
 * Categories:  consultivo-patterns
 */
$consultivo_url        = trailingslashit( get_stylesheet_directory_uri() );
	$consultivo_images = array(
		$consultivo_url . 'assets/images/brand-1.png',
		$consultivo_url . 'assets/images/brand-2.png',
		$consultivo_url . 'assets/images/brand-3.png',
		$consultivo_url . 'assets/images/brand-4.png',
		$consultivo_url . 'assets/images/brand-5.png',
		$consultivo_url . 'assets/images/brand-6.png',
	);
	?>
<!-- wp:group {"metadata":{"categories":["consultivo-patterns"],"patternName":"consultivo/brand-showcase","name":"Brand Showcase"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"left":{"width":"0px","style":"none"}}},"gradient":"gradient-2","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-gradient-2-gradient-background has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase">
<?php
	esc_html_e( 'Trusted by innovative companies worldwide', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"16.65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:16.65%"><!-- wp:image {"width":"auto","height":"35px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[0] ); ?>" alt="" style="width:auto;height:35px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:16.65%"><!-- wp:image {"width":"auto","height":"35px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[1] ); ?>" alt="" style="width:auto;height:35px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:16.65%"><!-- wp:image {"width":"auto","height":"35px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[2] ); ?>" alt="" style="width:auto;height:35px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:16.65%"><!-- wp:image {"width":"auto","height":"35px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[3] ); ?>" alt="" style="width:auto;height:35px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:16.65%"><!-- wp:image {"width":"auto","height":"35px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[4] ); ?>" alt="" style="width:auto;height:35px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:16.65%"><!-- wp:image {"width":"auto","height":"35px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[5] ); ?>" alt="" style="width:auto;height:35px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->