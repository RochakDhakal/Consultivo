<?php

/**
 * Title: 404 Block
 * Slug: saas-consulting-agency/block-404
 * Categories: saas-consulting-agency-patterns
 */
$saas_consulting_agency_404_url = trailingslashit( get_stylesheet_directory_uri() );
$saas_consulting_agency_404_img = array(
	$saas_consulting_agency_404_url . 'assets/images/404.png',
);
?>
<!-- wp:group {"tagName":"main","metadata":{"patternName":"saas-consulting-agency/block-404","name":"404 Block","categories":["saas-consulting-agency-patterns"]},"style":{"spacing":{"padding":{"right":"26px","left":"26px","top":"42px","bottom":"42px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group has-light-color-background-color has-background" style="padding-top:42px;padding-right:26px;padding-bottom:42px;padding-left:26px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"fontSize":"xxxx-large","layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group has-xxxx-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isUserOverlayColor":true,"minHeight":400,"isDark":false,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover is-light" style="padding-bottom:var(--wp--preset--spacing--80);min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1454,"width":"308px","height":"146px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#C3CAD5","#6B00D6"]}}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $saas_consulting_agency_404_img[0] ); ?>" alt="" class="wp-image-1454" style="width:308px;height:146px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","textTransform":"uppercase","letterSpacing":"4px","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"small"} -->
<h4 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:300;letter-spacing:4px;text-transform:uppercase">
<?php
	esc_html_e( 'OOPS! Page Not Found!', 'saas-consulting-agency' );
?>
</h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"425px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"left"}}} -->
<h3 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Helpful Links', 'saas-consulting-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
<?php
	esc_html_e( "Something went wrong! We couldn't find the page you were looking for. But don't worry, we've got some other Links that might be helpful:", 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
<div class="wp-block-column has-foregound-alt-color has-text-color has-link-color"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Pages', 'saas-consulting-agency' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:page-list {"className":"is-style-homelancer-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
<div class="wp-block-column has-foregound-alt-color has-text-color has-link-color"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">
<?php
	esc_html_e( 'Categories', 'saas-consulting-agency' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-homelancer-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"textColor":"foregound-alt"} -->
<div class="wp-block-column has-foregound-alt-color has-text-color has-link-color" style="padding-top:0;padding-bottom:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h4 class="wp-block-heading" style="margin-top:0;margin-bottom:0">
<?php
	esc_html_e( 'Latest Posts', 'saas-consulting-agency' );
?>
</h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":31,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"style":{"typography":{"textTransform":"none"}}} -->
<!-- wp:post-title {"level":5,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"layout":{"selfStretch":"fit"},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"25px"}}},"textColor":"contrast","fontSize":"medium"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->