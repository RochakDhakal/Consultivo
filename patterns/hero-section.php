<?php

/**
 * Title: Hero Section
 * Slug: consultivo/hero-section
 * Categories:  consultivo-patterns
 */
$consultivo_url        = trailingslashit( get_stylesheet_directory_uri() );
	$consultivo_images = array(
		$consultivo_url . 'assets/images/hero-cover.png',
		$consultivo_url . 'assets/images/hero.jpg',
		$consultivo_url . 'assets/images/hero-icon-1.png',
	);
	?>
<!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[0] ); ?>","id":22,"dimRatio":0,"isUserOverlayColor":true,"minHeight":950,"contentPosition":"top center","sizeSlug":"large","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);min-height:950px"><img class="wp-block-cover__image-background wp-image-22 size-large" alt="" src="<?php echo esc_url( $consultivo_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:0;padding-bottom:120px;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"layout":{"type":"constrained","contentSize":"575px","justifyContent":"left"}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"border":{"width":"1px","style":"solid","color":"#35393D","radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<ul style="border-color:#35393D;border-style:solid;border-width:1px;border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list is-style-list-style-check-circle has-border-color"><!-- wp:list-item -->
<li>
<?php
	esc_html_e( 'Digital Studio EST.2026', 'consultivo' );
?>
</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading {"fontSize":"giga"} -->
<h2 class="wp-block-heading has-giga-font-size">
<?php
	esc_html_e( 'We build digital experiences that drive growth.', 'consultivo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--50)">
<?php
	esc_html_e( 'We help ambitious businesses build high-performing websites, brands, and digital experiences that attract customers and accelerate growth.', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"className":"is-style-button-with-uparrow-icon"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button">
<?php
	esc_html_e( 'View Demo', 'consultivo' );
?>
</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px"}},"borderColor":"light-color"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color wp-element-button" style="border-width:1px">
<?php
	esc_html_e( 'View Projects', 'consultivo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
<h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size">
<?php
	esc_html_e( '100+', 'consultivo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
<p class="has-foreground-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( 'Projects delivered', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
<h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size">
<?php
	esc_html_e( '12', 'consultivo' );
?>
<0/h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
<p class="has-foreground-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( 'Design awards', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
<h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size">
<?php
	esc_html_e( '5.0', 'consultivo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
<p class="has-foreground-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( 'Average Client rating', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
<h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size">
<?php
	esc_html_e( '95%', 'consultivo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
<p class="has-foreground-color has-text-color has-link-color has-x-small-font-size">
<?php
	esc_html_e( 'Client Retention', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[1] ); ?>","id":74,"dimRatio":0,"isUserOverlayColor":true,"minHeight":600,"contentPosition":"bottom right","isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-right" style="border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30);min-height:600px"><img class="wp-block-cover__image-background wp-image-74 size-full" alt="" src="<?php echo esc_url( $consultivo_images[1] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"color":"#252d39","width":"1px","style":"solid"}},"gradient":"gradient-1"} -->
<div class="wp-block-columns is-not-stacked-on-mobile has-border-color has-gradient-1-gradient-background has-background" style="border-color:#252d39;border-style:solid;border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"40px","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40px"><!-- wp:image {"id":121,"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $consultivo_images[1] ); ?>" alt="" class="wp-image-121" style="width:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<div class="wp-block-column is-vertically-aligned-center has-foreground-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
<p class="has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Websites Launched', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"9px"}}} -->
<p style="margin-top:0;margin-bottom:0;font-size:9px">
<?php
	esc_html_e( 'Vela Health', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->