<?php
/**
 * Title: Teams
 * Slug: consultivo/teams
 * Categories: consultivo-patterns
 */
$consultivo_teams_url = trailingslashit( get_stylesheet_directory_uri() );
$consultivo_teams_img = array(
	$consultivo_teams_url . 'assets/images/testimonial-1.jpg',
	$consultivo_teams_url . 'assets/images/testimonial-2.jpg',
	$consultivo_teams_url . 'assets/images/testimonial-3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"650px"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"600"}},"fontSize":"jumbo"} -->
<h2 class="wp-block-heading has-text-align-center has-jumbo-font-size" style="font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Experts dedicated to driving your success', 'consultivo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column {"className":"is-style-saaslauncher-boxshadow-medium","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"210px"}} -->
<div class="wp-block-column is-style-saaslauncher-boxshadow-medium" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":368,"width":"210px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( $consultivo_teams_img[0] ); ?>" alt="" class="wp-image-368" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;aspect-ratio:1;object-fit:cover;width:210px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"fontSize":"xx-large"} -->
<h4 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Ethan Brown', 'consultivo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)">
<?php
	esc_html_e( 'IT Solutions Expert', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"heading-color","iconBackgroundColorValue":"#00061F","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"telegram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-saaslauncher-boxshadow-medium","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"210px"}} -->
<div class="wp-block-column is-style-saaslauncher-boxshadow-medium" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":384,"width":"210px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( $consultivo_teams_img[1] ); ?>" alt="" class="wp-image-384" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;aspect-ratio:1;object-fit:cover;width:210px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"fontSize":"xx-large"} -->
<h4 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;font-style:normal;font-weight:600">
<?php
	esc_html_e( 'John Anderson', 'consultivo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)">
<?php
	esc_html_e( 'Operations Head', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"heading-color","iconBackgroundColorValue":"#00061F","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"telegram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-saaslauncher-boxshadow-medium","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"210px"}} -->
<div class="wp-block-column is-style-saaslauncher-boxshadow-medium" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":386,"width":"210px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( $consultivo_teams_img[2] ); ?>" alt="" class="wp-image-386" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;aspect-ratio:1;object-fit:cover;width:210px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"fontSize":"xx-large"} -->
<h4 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Olivia Taylor', 'consultivo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)">
<?php
	esc_html_e( 'Financial Specialist', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"heading-color","iconBackgroundColorValue":"#00061F","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"telegram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->