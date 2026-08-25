<?php

/**
 * Title: Call To Action
 * Slug: consultivo/cta
 * Categories:  consultivo-patterns
 */
$consultivo_url        = trailingslashit( get_stylesheet_directory_uri() );
	$consultivo_images = array(
		$consultivo_url . 'assets/images/cta.png',
	);
	?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"gradient":"gradient-3","layout":{"type":"constrained","contentSize":"850px"}} -->
<div class="wp-block-group has-gradient-3-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Ready to build something exceptional?', 'consultivo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"575px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( "Let's create a digital experience that helps your business stand out and grow.", 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-button-with-uparrow-icon"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Start Your Project', 'consultivo' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px"}},"borderColor":"border-color"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px"><?php esc_html_e( 'Book a Consultation', 'consultivo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Average reply time: 4 hours · Projects from $25k', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->