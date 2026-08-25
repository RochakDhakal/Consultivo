<?php

/**
 * Title: What We Do
 * Slug: consultivo/what-we-do
 * Categories: consultivo-patterns
 */
$consultivo_url        = trailingslashit( get_stylesheet_directory_uri() );
	$consultivo_images = array(
		$consultivo_url . 'assets/images/how-we-work-1.jpg',
		$consultivo_url . 'assets/images/how-we-work-2.jpg',
		$consultivo_url . 'assets/images/how-we-work-3.jpg',
	);
	?>
<!-- wp:group {"metadata":{"patternName":"consultivo/what-we-do","name":"What We Do","categories":["consultivo-patterns"]},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"65%","layout":{"type":"constrained","contentSize":"575px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase">
<?php esc_html_e( 'What We Do', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"mega"} -->
<h2 class="wp-block-heading has-mega-font-size" style="margin-top:var(--wp--preset--spacing--50)">
<?php esc_html_e( 'Five disciplines, one accountable team.', 'consultivo' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Strategy, design, engineering and growth under a single roof — so nothing gets lost between hand-offs.', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"constrained","contentSize":"475px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
<p class="has-primary-color has-text-color has-link-color has-normal-font-size">
<?php esc_html_e( '01', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"jumbo"} -->
<h3 class="wp-block-heading has-jumbo-font-size">
<?php esc_html_e( 'Website Design & Development', 'consultivo' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50)">
<?php esc_html_e( 'High-performance websites engineered to turn attention into revenue — fast, accessible, and built to scale.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","layout":{"type":"constrained","contentSize":"150px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<ul style="padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item -->
<li><?php esc_html_e( 'Design Systems', 'consultivo' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<li style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Core Web Vitals', 'consultivo' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","layout":{"type":"constrained","contentSize":"150px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<ul style="padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item -->
<li><?php esc_html_e( 'Headless Builds', 'consultivo' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<li style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'CMS Training', 'consultivo' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary","width":"2px"}}}} -->
<p style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Northbeam · +184% demo requests', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"light-color","fontSize":"normal"} -->
<p class="has-light-color-color has-text-color has-link-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--60)"><a href="#"><?php esc_html_e( 'Learn More', 'consultivo' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[0] ); ?>","id":215,"dimRatio":0,"isUserOverlayColor":true,"minHeight":460,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;min-height:460px"><img class="wp-block-cover__image-background wp-image-215 size-full" alt="" src="<?php echo esc_url( $consultivo_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[1] ); ?>","id":215,"dimRatio":0,"isUserOverlayColor":true,"minHeight":460,"sizeSlug":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"textColor":"primary","fontSize":"normal","layout":{"type":"default"}} -->
<div class="wp-block-cover has-primary-color has-text-color has-link-color has-normal-font-size" style="border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;min-height:460px"><img class="wp-block-cover__image-background wp-image-215 size-full" alt="" src="<?php echo esc_url( $consultivo_images[1] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"475px"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px"><?php esc_html_e( '02', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"jumbo"} -->
<h3 class="wp-block-heading has-jumbo-font-size"><?php esc_html_e( 'Branding & Creative Design', 'consultivo' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Identity work with a point of view: naming, art direction, and systems that stay memorable everywhere.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","layout":{"type":"constrained","contentSize":"150px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<ul style="padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item -->
<li><?php esc_html_e( 'Positioning', 'consultivo' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<li style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Identity System', 'consultivo' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","layout":{"type":"constrained","contentSize":"150px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<ul style="padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item -->
<li><?php esc_html_e( 'Art Direction', 'consultivo' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<li style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Brand Guidelines', 'consultivo' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary","width":"2px"}}}} -->
<p style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Aurum - Full Rebrand in 9 weeks.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"light-color","fontSize":"normal"} -->
<p class="has-light-color-color has-text-color has-link-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--60)"><a href="#"><?php esc_html_e( 'Learn More', 'consultivo' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"constrained","contentSize":"475px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
<p class="has-primary-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e( '03', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"jumbo"} -->
<h3 class="wp-block-heading has-jumbo-font-size"><?php esc_html_e( 'SaaS & Product Design', 'consultivo' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Intuitive product surfaces for complex software — onboarding, dashboards, and flows users actually finish.', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","layout":{"type":"constrained","contentSize":"150px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<ul style="padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item -->
<li><?php esc_html_e( 'Product Strategy', 'consultivo' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<li style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'UX architecture', 'consultivo' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","layout":{"type":"constrained","contentSize":"150px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<ul style="padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item -->
<li><?php esc_html_e( 'UI System', 'consultivo' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<li style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Prototyping', 'consultivo' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary","width":"2px"}}}} -->
<p style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Nexora · Activation up 63%', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"light-color","fontSize":"normal"} -->
<p class="has-light-color-color has-text-color has-link-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--60)"><a href="#"><?php esc_html_e( 'Learn More', 'consultivo' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $consultivo_images[2] ); ?>","id":215,"dimRatio":0,"isUserOverlayColor":true,"minHeight":460,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;min-height:460px"><img class="wp-block-cover__image-background wp-image-215 size-full" alt="" src="<?php echo esc_url( $consultivo_images[2] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"120px"}},"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px","style":"solid"}},"backgroundColor":"secondary-shade-2","borderColor":"border-color"} -->
<div class="wp-block-columns has-border-color has-border-color-border-color has-secondary-shade-2-background-color has-background" style="border-style:solid;border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:120px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"465px","justifyContent":"center"}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( '04', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"xxx-large"} -->
<h4 class="wp-block-heading has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'SEO & Growth Marketing', 'consultivo' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Technical SEO, content systems and paid experiments that compound into qualified pipeline.', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"465px","justifyContent":"center"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( '05', 'consultivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"xxx-large"} -->
<h4 class="wp-block-heading has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Conversion Optimization', 'consultivo' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Research, testing and UX refinement that lifts the numbers your board actually watches.', 'consultivo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->