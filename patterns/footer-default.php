<?php

/**
 * Title: Footer Default
 * Slug: consultivo/footer-default
 * Categories:  footer,consultivo-patterns
 */
?>






<!-- wp:group {"metadata":{"patternName":"consultivo/footer-default","name":"Footer Default","categories":["footer","consultivo-patterns"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"fontSize":"normal","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-normal-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"45%","layout":{"type":"constrained","contentSize":"385px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:site-title {"level":2,"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"xx-large"} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--60)">
<?php
	esc_html_e( 'An independent digital studio building brands, products and growth engines for ambitious teams.', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->
<?php
if ( class_exists( 'WPCF7' ) ) {
	?>
<!-- wp:contact-form-7/contact-form-selector {"id":817,"hash":"1136a3a","title":"Contact form 1","className":"consultivo-newsletter"} -->
<div class="wp-block-contact-form-7-contact-form-selector consultivo-newsletter">[contact-form-7 id="1136a3a" title="Contact form 1"]</div>
<!-- /wp:contact-form-7/contact-form-selector -->

	<?php
} else {
	?>
<!-- wp:paragraph -->
<p>
	<?php
	esc_html_e( 'Note: Install and Activate the Contact Form 7 plugin. Add the class-name "consultivo-newsletter" as the additional class on the contact 7 block.', 'consultivo' );
	?>
</p>
<!-- /wp:paragraph -->
	<?php
}
?>
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase"}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--40);text-transform:uppercase">
<?php
	esc_html_e( 'Navigate', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:home-link /-->

<!-- wp:page-list /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase"}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--40);text-transform:uppercase">
<?php
	esc_html_e( 'Services', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Web Design', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30)">
<?php
	esc_html_e( 'Development', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30)">
<?php
	esc_html_e( 'Branding', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30)">
<?php
	esc_html_e( 'Marketing', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30)">
<?php
	esc_html_e( 'SEO', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase"}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--40);text-transform:uppercase">
<?php
	esc_html_e( 'Social', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#999EA7","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","showLabels":true,"size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--40);margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0"><!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->

<!-- wp:social-link {"url":"#","service":"discord","label":"Discord"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin","label":"LinkedIn"} /-->

<!-- wp:social-link {"url":"#","service":"youtube","label":"YouTube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>
<?php
	esc_html_e( '© 2026 SaasLauncher. All rights reserved.', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Terms', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Policy', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'Documentation', 'consultivo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->