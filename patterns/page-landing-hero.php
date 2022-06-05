<?php
/**
 * Landing page with hero image and sections.
 *
 * @package Shambhala Twenty Twenty-Two
 */

// Get URL for Page for post setting.
$news_page_id = get_option( 'page_for_posts' );
if ( $news_page_id ) {
	$news_url = get_permalink( $news_page_id );
} else {
	$news_url = '#';
}

return array(
	'title'      => __( 'Landing page with hero image.', 'shambhala-twentytwentytwo' ),
	'categories' => array( 'sh-page' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/meditator-under-tree.jpg' ) ) . '","id":2145,"dimRatio":15,"overlayColor":"secondary","focalPoint":{"x":"0.51","y":"0.27"},"minHeight":800,"minHeightUnit":"px","isDark":false,"align":"full","className":"cover-image-with-text-has-background"} -->
	<div class="wp-block-cover alignfull is-light cover-image-with-text-has-background" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2145" alt="Meditator under a tree" src="' . esc_url( get_theme_file_uri( '/assets/images/meditator-under-tree.jpg' ) ) . '" style="object-position:51% 27%" data-object-fit="cover" data-object-position="51% 27%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"width-full-size "} -->
	<div class="wp-block-columns width-full-size"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:spacer {"height":"400px"} -->
	<div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"level":1,"backgroundColor":"primary","textColor":"background"} -->
	<h1 class="has-background-color has-primary-background-color has-text-color has-background">' . esc_html__( 'Shambhala: a global community', 'shambhala-twentytwentytwo' ) . '</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"left","backgroundColor":"primary","textColor":"background","fontSize":"lead"} -->
	<p class="has-text-align-left has-background-color has-primary-background-color has-text-color has-background has-lead-font-size">' . esc_html__( 'Shambhala is a global community of people inspired by the principle that every human being has a fundamental nature of basic goodness.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="alignwide has-x-large-font-size">' . esc_html__( 'Shambhala: a global community', 'shambhala-twentytwentytwo' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph -->
	<p>' . esc_html__( 'Shambhala is a global community of people inspired by the principle that every human being has a fundamental nature of basic goodness. This nature, our innate wisdom, can be developed so that it benefits our own lives and helps meet the many challenges facing the world.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:image {"id":2703,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/community-group.jpg' ) ) . '" alt="' . esc_html__( 'People in Shambhala shrine room, some smiling, some pensive.', 'shambhala-twentytwentytwo' ) . '" class="wp-image-2703"/><figcaption>' . esc_html__( 'Community gathering', 'shambhala-twentytwentytwo' ) . '</figcaption></figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Shambhala welcomes people from all walks of life, faiths, and backgrounds. They come together to practice meditation, gather, and celebrate to develop a global culture that cultivates dignity and sanity in an increasingly chaotic and stressful world.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"35%"} -->
	<div class="wp-block-column" style="flex-basis:35%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'Each individual, group, and Shambhala Center worldwide are linked together by the Shambhala teachings and lineage, making a worldwide community of shared inspiration. There are thousands of members and friends of Shambhala on all continents.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'There are online communities and more than 200 Shambhala centres and groups and individual members located in major cities, towns, and rural settings in over 50 different countries.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="has-large-font-size">Shambhala Vision</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Shambhala vision is rooted in the principle that every human being has a fundamental nature of basic goodness. This nature can be developed in daily life to radiate out to family, friends, community, and society.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><a href="#">' . esc_html__( 'Dive into Shambhala Vision', 'shambhala-twentytwentytwo' ) . '</a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/balance-blur-boulder-close-up-355863.jpg' ) ) . '","id":3496,"dimRatio":70,"overlayColor":"dark-blue","focalPoint":{"x":"0.35","y":"0.89"},"minHeight":791,"minHeightUnit":"px"} -->
<div class="wp-block-cover" style="min-height:791px"><span aria-hidden="true" class="wp-block-cover__background has-dark-blue-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3496" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/balance-blur-boulder-close-up-355863.jpg' ) ) . '" style="object-position:35% 89%" data-object-fit="cover" data-object-position="35% 89%"/><div class="wp-block-cover__inner-container"><!-- wp:quote {"fontSize":"x-large"} -->
<blockquote class="wp-block-quote has-x-large-font-size"><p>' . esc_html__( 'A great deal of the chaos in the world occurs because people don’t appreciate themselves.', 'shambhala-twentytwentytwo' ) . '</p><p></p><cite>' . esc_html__( 'Chögyam Trungpa', 'shambhala-twentytwentytwo' ) . '</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"32px"} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

	<!-- wp:group {"align":"full","backgroundColor":"light-grey"} -->
	<div class="wp-block-group alignfull has-light-grey-background-color has-background"><!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:media-text {"mediaId":2901,"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/buddha-statue-circle.jpg' ) ) . '","mediaType":"image","mediaWidth":33,"verticalAlignment":"center","imageFill":false,"className":"rounded-image is-style-rounded-image width-full-size center-block"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center rounded-image is-style-rounded-image width-full-size center-block" style="grid-template-columns:33% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/buddha-statue-circle.jpg' ) ) . '" alt="' . esc_html__( 'Buddha statue', 'shambhala-twentytwentytwo' ) . '" class="wp-image-2901 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-heading-capitalized"} -->
	<h2 class="is-style-heading-capitalized">' . esc_html__( 'Welcome', 'shambhala-twentytwentytwo' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"left","level":3,"style":{"color":{"text":"#000000"}},"fontSize":"x-large"} -->
	<h3 class="has-text-align-left has-text-color has-x-large-font-size" style="color:#000000">' . esc_html__( 'Shambhala brings together people of all ages and from all walks of life', 'shambhala-twentytwentytwo' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Shambhala brings together people of all ages and from all walks of life', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Learn more', 'shambhala-twentytwentytwo' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:media-text -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"align":"wide","className":"sh-query","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide sh-query"><!-- wp:query {"queryId":106,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"list"},"align":"wide","className":"is-style-wp-block-query-small-grey","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide is-style-wp-block-query-small-grey"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66%"} -->
	<div class="wp-block-column" style="flex-basis:66%"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","className":"is-style-heading-capitalized"} -->
	<h2 class="is-style-heading-capitalized has-primary-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Latest news', 'shambhala-twentytwentytwo' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"right","textColor":"tertiary","className":"is-style-heading-capitalized link-no-underline","fontSize":"small"} -->
	<p class="has-text-align-right is-style-heading-capitalized link-no-underline has-tertiary-color has-text-color has-small-font-size"><a href="http://shnl-wakkerisme.localhost/nieuws/">' . esc_html__( 'All news >', 'shambhala-twentytwentytwo' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:post-template -->
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
	<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:post-title {"level":3,"isLink":true,"align":"wide","fontSize":"large"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"align":"wide","className":"sh-query","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide sh-query"><!-- wp:query {"queryId":106,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"list"},"align":"wide","className":"is-style-wp-block-query-small-grey","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide is-style-wp-block-query-small-grey"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66%"} -->
	<div class="wp-block-column" style="flex-basis:66%"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","className":"is-style-heading-capitalized"} -->
	<h2 class="is-style-heading-capitalized has-primary-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Upcoming events', 'shambhala-twentytwentytwo' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"right","textColor":"tertiary","className":"is-style-heading-capitalized link-no-underline","fontSize":"small"} -->
	<p class="has-text-align-right is-style-heading-capitalized link-no-underline has-tertiary-color has-text-color has-small-font-size"><a href="#">' . esc_html__( 'All events >', 'shambhala-twentytwentytwo' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:post-template -->
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
	<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:post-title {"level":3,"isLink":true,"align":"wide","fontSize":"large"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);
