<?php

/**
 * Title: Case Study
 * Slug: consultivo/case-study
 * Categories:  consultivo-patterns
 */
$consultivo_url        = trailingslashit( get_stylesheet_directory_uri() );
	$consultivo_images = array(
		$consultivo_url . 'assets/images/case-study-1.jpg',
		$consultivo_url . 'assets/images/case-study-2.jpg',
		$consultivo_url . 'assets/images/case-study-3.jpg',
	);
	?>
<!-- wp:group {"metadata":{"patternName":"consultivo/case-study","name":"Case Study","categories":["consultivo-patterns"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"80%","layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Case Studies', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"mega"} -->
<h2 class="wp-block-heading has-mega-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Selected work, measured in outcomes.', 'consultivo' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'All Case Studies', 'consultivo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color"} -->
<div class="wp-block-columns has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:var(--wp--preset--spacing--80);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[0] ); ?>","id":293,"dimRatio":0,"isUserOverlayColor":true,"minHeight":545,"sizeSlug":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:545px"><img class="wp-block-cover__image-background wp-image-293 size-full" alt="" src="<?php echo esc_url( $consultivo_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'B2B SaaS -Product design · Web · SEO', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Nexora', 'consultivo' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '100% Conversion', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '250% Organic traffic', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '50% faster load time', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","style":"solid"}},"borderColor":"light-color"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color wp-element-button" style="border-style:solid;border-width:1px"><?php esc_html_e( 'View Case Study', 'consultivo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color"} -->
<div class="wp-block-columns has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:var(--wp--preset--spacing--80);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[1] ); ?>","id":340,"dimRatio":0,"isUserOverlayColor":true,"minHeight":545,"sizeSlug":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:545px"><img class="wp-block-cover__image-background wp-image-340 size-full" alt="" src="<?php echo esc_url( $consultivo_images[1] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'B2B SaaS -Product design · Web · SEO', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Aurum', 'consultivo' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '100% Conversion', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '250% Organic traffic', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '50% faster load time', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","style":"solid"}},"borderColor":"light-color"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color wp-element-button" style="border-style:solid;border-width:1px"><?php esc_html_e( 'View Case Study', 'consultivo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color"} -->
<div class="wp-block-columns has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:var(--wp--preset--spacing--80);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[2] ); ?>","id":342,"dimRatio":0,"isUserOverlayColor":true,"minHeight":545,"sizeSlug":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:545px"><img class="wp-block-cover__image-background wp-image-342 size-full" alt="" src="<?php echo esc_url( $consultivo_images[2] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'B2B SaaS -Product design · Web · SEO', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Valor', 'consultivo' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '100% Conversion', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '250% Organic traffic', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<p style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( '50% faster load time', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","style":"solid"}},"borderColor":"light-color"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color wp-element-button" style="border-style:solid;border-width:1px"><?php esc_html_e( 'View Case Study', 'consultivo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->