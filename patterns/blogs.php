<?php

/**
 * Title: Blogs
 * Slug: consultivo/blogs
 * Categories:  consultivo-patterns
 */

?>
<!-- wp:group {"metadata":{"patternName":"consultivo/blogs","name":"Blogs","categories":["consultivo-patterns"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">
<?php
	esc_html_e( 'Insights', 'consultivo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"normal"} -->
<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button">
<?php
	esc_html_e( 'View All', 'consultivo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":1}} -->
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"480px","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}}} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"primary"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"textColor":"light-color","fontSize":"jumbo"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-time-to-read {"displayAsRange":false} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>
<?php
	esc_html_e( 'Oops! Blogs Not Found.', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":15,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"width":"1px","color":"#35393D","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center has-border-color" style="border-color:#35393D;border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"200px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:200px"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"180px","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size" style="text-transform:capitalize"><!-- wp:post-author-name /-->

<!-- wp:post-time-to-read /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"light-color"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>
<?php
	esc_html_e( 'Oops! Blogs Not Found.', 'consultivo' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->