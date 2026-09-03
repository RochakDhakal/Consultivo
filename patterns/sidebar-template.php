<?php

/**
 * Title: Sidebar Default
 * Slug: saas-consulting-agency/sidebar-template
 * Categories:  saas-consulting-agency-patterns
 */
$saas_consulting_agency_sidebar_url    = trailingslashit( get_stylesheet_directory_uri() );
$saas_consulting_agency_sidebar_images = array(
	$saas_consulting_agency_sidebar_url . 'assets/images/testimonial-2.jpg',
);
?>
<!-- wp:group {"metadata":{"patternName":"saas-consulting-agency/sidebar-template","name":"Sidebar Default","categories":["saas-consulting-agency-patterns"]},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"light-color","textColor":"foreground","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-foreground-color has-light-color-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"12px","right":"12px"}},"border":{"style":"solid","width":"1px","radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-style:solid;border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;padding-top:24px;padding-right:12px;padding-bottom:24px;padding-left:12px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"24px"}},"border":{"style":"solid","width":"1px","radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-style:solid;border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:24px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"16px"}}}} -->
<ul style="padding-right:0;padding-left:16px" class="wp-block-list"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<li class="has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase">
<?php
	esc_html_e( 'Author', 'saas-consulting-agency' );
?>
</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"75px","height":"75px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $saas_consulting_agency_sidebar_images[0] ); ?>" alt="" style="object-fit:cover;width:75px;height:75px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"24px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:24px">
<?php
	esc_html_e( 'Archie Green', 'saas-consulting-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"16px"}}}} -->
<p class="has-text-align-center" style="margin-top:16px">
<?php
	esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"dark-color","iconBackgroundColorValue":"#1E273C","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"24px"}},"border":{"style":"solid","width":"1px","radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-style:solid;border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:24px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"16px"}}}} -->
<ul style="padding-right:0;padding-left:16px" class="wp-block-list"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<li class="has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase">
<?php
	esc_html_e( 'Categories', 'saas-consulting-agency' );
?>
</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:categories {"className":"is-style-homelancer-categories-bullet-hide-style","style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"heading-color","fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"24px"}},"border":{"style":"solid","width":"1px","radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-style:solid;border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:24px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"16px"}}}} -->
<ul style="padding-right:0;padding-left:16px" class="wp-block-list"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<li class="has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase">
<?php
	esc_html_e( 'Latest Blogs', 'saas-consulting-agency' );
?>
</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":32,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"16px"}}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"heading-color"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>
<?php
	esc_html_e( 'Blogs Not Found!', 'saas-consulting-agency' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->