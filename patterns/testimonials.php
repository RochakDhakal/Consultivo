<?php
/**
 * Title: Testimonials
 * Slug: saas-consulting-agency/testimonials
 * Categories: saas-consulting-agency-patterns
 */
$saas_consulting_agency_testimonials_url = trailingslashit( get_stylesheet_directory_uri() );
$saas_consulting_agency_testimonials_img = array(
	$saas_consulting_agency_testimonials_url . 'assets/images/testimonial-1.jpg',
	$saas_consulting_agency_testimonials_url . 'assets/images/testimonial-2.jpg',
	$saas_consulting_agency_testimonials_url . 'assets/images/testimonial-3.jpg',
	$saas_consulting_agency_testimonials_url . 'assets/images/star.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"626px"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"jumbo"} -->
<h2 class="wp-block-heading has-text-align-center has-jumbo-font-size">
<?php
	esc_html_e( "Customer's Reviews ! ", 'saas-consulting-agency' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--50)">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"className":"is-style-saaslauncher-boxshadow-medium","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"light-color"} -->
<div class="wp-block-column is-style-saaslauncher-boxshadow-medium has-light-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70px">
<!-- wp:image {"id":477,"width":"70px","height":"70px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( $saas_consulting_agency_testimonials_img[0] ); ?>" alt="" class="wp-image-477" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;object-fit:cover;width:70px;height:70px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"},"blockGap":"0"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--border-color);border-left-width:1px;padding-left:var(--wp--preset--spacing--50)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">
<?php
	esc_html_e( 'Simon Minter', 'saas-consulting-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Marketing Coordinator', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} -->
<p class="has-meta-color-color has-text-color has-link-color">
<?php
	esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":213,"width":"auto","height":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#052FE7","rgb(5, 47, 231)"]},"layout":{"selfStretch":"fixed","flexSize":"150px"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $saas_consulting_agency_testimonials_img[3] ); ?>" alt="" class="wp-image-213" style="width:auto;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-saaslauncher-boxshadow-medium","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"light-color"} -->
<div class="wp-block-column is-style-saaslauncher-boxshadow-medium has-light-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70px">
<!-- wp:image {"id":477,"width":"70px","height":"70px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( $saas_consulting_agency_testimonials_img[1] ); ?>" alt="" class="wp-image-477" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;object-fit:cover;width:70px;height:70px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"},"blockGap":"0"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--border-color);border-left-width:1px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">
<?php
	esc_html_e( 'Tobi Brown', 'saas-consulting-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Marketing Coordinator', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} -->
<p class="has-meta-color-color has-text-color has-link-color">
<?php
	esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":213,"width":"auto","height":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#052FE7","rgb(5, 47, 231)"]},"layout":{"selfStretch":"fixed","flexSize":"150px"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $saas_consulting_agency_testimonials_img[3] ); ?>" alt="" class="wp-image-213" style="width:auto;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-saaslauncher-boxshadow-medium","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"light-color"} -->
<div class="wp-block-column is-style-saaslauncher-boxshadow-medium has-light-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70px">
<!-- wp:image {"id":477,"width":"70px","height":"70px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( $saas_consulting_agency_testimonials_img[2] ); ?>" alt="" class="wp-image-477" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;object-fit:cover;width:70px;height:70px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"},"blockGap":"0"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--border-color);border-left-width:1px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">
<?php
	esc_html_e( 'Freya Brent', 'saas-consulting-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Marketing Coordinator', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} -->
<p class="has-meta-color-color has-text-color has-link-color">
<?php
	esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":213,"width":"auto","height":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#052FE7","rgb(5, 47, 231)"]},"layout":{"selfStretch":"fixed","flexSize":"150px"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $saas_consulting_agency_testimonials_img[3] ); ?>" alt="" class="wp-image-213" style="width:auto;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->