<?php 
/**
 * Default Sidebar
 */
return array(
	'title'      => esc_html__( 'Sidebar', 'fishland-fse' ),
	'categories' => array( 'fishland-fse', 'sidebar' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"className":"FL-Main-Sidebar","layout":{"type":"constrained"}} -->
<div class="wp-block-group FL-Main-Sidebar" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"blockGap":"0"},"border":{"radius":"7px"}},"className":"FL-SideLatest-post","layout":{"type":"constrained"}} -->
<div class="wp-block-group FL-SideLatest-post" style="border-radius:7px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Latest Post</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":70,"featuredImageSizeHeight":70,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.3","fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#9e9e9e"},"elements":{"link":{"color":{"text":"#424242"}}}},"className":"Sidebar-Latest-Post","fontFamily":"poppins"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:7px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Categories</h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"fontFamily":"poppins"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:7px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Archives</h2>
<!-- /wp:heading -->

<!-- wp:archives {"showPostCounts":true,"fontFamily":"poppins"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
