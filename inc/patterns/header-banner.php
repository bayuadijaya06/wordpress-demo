<?php 
/**
 * Default Header Banner
 */
return array(
	'title'      => esc_html__( 'Header Banner', 'fishland-fse' ),
	'categories' => array( 'fishland-fse', 'Header Banner' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/header-banner.jpg","id":20,"dimRatio":0,"minHeight":695,"className":"hdrbanner-BX","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover hdrbanner-BX" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:695px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-20" alt="" src="'.esc_url(get_template_directory_uri()).'/assets/images/header-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"bannerInfo","layout":{"type":"constrained","wideSize":"1170px","justifyContent":"center","contentSize":"1170px"}} -->
<div class="wp-block-group bannerInfo" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400","fontSize":"26px"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"foreground"} -->
<h5 class="wp-block-heading has-text-align-left has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:26px;font-style:normal;font-weight:400;text-transform:none">Dedicated Fish Farming</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"50px","textTransform":"none","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"foreground"} -->
<h2 class="wp-block-heading has-text-align-left has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-size:50px;font-style:normal;font-weight:700;text-transform:none">Best Quality Aqua<br>Fish Farming</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|60","left":"0"}}}} -->
<p class="has-text-align-left" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--60);margin-left:0">Sed eu justo sit amet metus laoreet accumsan vel non nisl.<br>umsausce ayli quam, tellus id interdum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"foreground","style":{"typography":{"fontSize":"16px"},"color":{"text":"#04006c"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:16px"><a class="wp-block-button__link has-foreground-background-color has-text-color has-background has-text-align-center wp-element-button" style="color:#04006c">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);