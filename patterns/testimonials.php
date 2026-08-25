<?php

/**
 * Title: Testimonials
 * Slug: consultivo/testimonials
 * Categories:  consultivo-patterns
 */
$consultivo_url        = trailingslashit( get_stylesheet_directory_uri() );
	$consultivo_images = array(
		$consultivo_url . 'assets/images/testimonial.png',
		$consultivo_url . 'assets/images/star.png',
	);
	?>
<!-- wp:group {"metadata":{"patternName":"consultivo/testimonials","name":"Testimonials","categories":["consultivo-patterns"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"575px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">
<?php
	esc_html_e( 'Clients who came back for the second project.', 'consultivo' );
?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px"}},"fontSize":"normal","borderColor":"border-color"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color has-normal-font-size has-custom-font-size wp-element-button" style="border-width:1px">
<?php
	esc_html_e( 'Watch Testimonial Video', 'consultivo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"borderColor":"border-color"} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"id":622,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[1] ); ?>" alt="" class="wp-image-622" style="width:auto;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Thanks to their strategic design and marketing approach, our SaaS business saw a significant increase in conversions and customer engagement. The team was professional.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"65px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65px"><!-- wp:image {"id":635,"width":"65px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[0] ); ?>" alt="" class="wp-image-635" style="aspect-ratio:1;object-fit:cover;width:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading">
<?php
	esc_html_e( 'Hanna Wilson', 'consultivo' );
?>
</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Founder & CEO', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( '+185 qualified demos', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"borderColor":"border-color"} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"id":622,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[1] ); ?>" alt="" class="wp-image-622" style="width:auto;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Thanks to their strategic design and marketing approach, our SaaS business saw a significant increase in conversions and customer engagement. The team was professional.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"65px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65px"><!-- wp:image {"id":635,"width":"65px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[0] ); ?>" alt="" class="wp-image-635" style="aspect-ratio:1;object-fit:cover;width:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading">
<?php
	esc_html_e( 'Hanna Wilson', 'consultivo' );
?>
</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Founder & CEO', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( '+185 qualified demos', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"borderColor":"border-color"} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"id":622,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[1] ); ?>" alt="" class="wp-image-622" style="width:auto;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Thanks to their strategic design and marketing approach, our SaaS business saw a significant increase in conversions and customer engagement. The team was professional.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"65px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65px"><!-- wp:image {"id":635,"width":"65px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[0] ); ?>" alt="" class="wp-image-635" style="aspect-ratio:1;object-fit:cover;width:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading">
<?php
	esc_html_e( 'Hanna Wilson', 'consultivo' );
?>
</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Founder & CEO', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( '+185 qualified demos', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->