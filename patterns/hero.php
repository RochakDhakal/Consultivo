<?php

/**
 * Title: Hero Section
 * Slug: saas-consulting-agency/hero
 * Categories: saas-consulting-agency-patterns
 */
$saas_consulting_agency_hero_url = trailingslashit( get_stylesheet_directory_uri() );
$saas_consulting_agency_hero_img = array(
	$saas_consulting_agency_hero_url . 'assets/images/hero.jpg',
);
?>
<!-- wp:group {"metadata":{"patternName":"saas-consulting-agency/hero","name":"Hero Section","categories":["saas-consulting-agency-patterns"]},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"background":{"gradient":"var:preset|gradient|gradient-1"}},"gradient":"gradient-1","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-gradient-1-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"575px"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"giga"} -->
<h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-giga-font-size">
<?php
	esc_html_e( 'Developing Resilient Leaders, Driving Smarter Growth', 'saas-consulting-agency' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"textColor":"light-color"} -->
<p class="has-light-color-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--50)">
<?php
	esc_html_e( 'Elegant, user-friendly interface with smooth animations and drag-and-drop functionality.', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"textColor":"light-color","className":"is-style-button-hover-light-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} -->
<div class="wp-block-button is-style-button-hover-light-bgcolor"><a class="wp-block-button__link has-light-color-color has-text-color has-link-color wp-element-button" href="#">
<?php
	esc_html_e( 'Learn More', 'saas-consulting-agency' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( $saas_consulting_agency_hero_img[0] ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":750,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"250px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:250px;border-bottom-right-radius:0px;min-height:750px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( $saas_consulting_agency_hero_img[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->