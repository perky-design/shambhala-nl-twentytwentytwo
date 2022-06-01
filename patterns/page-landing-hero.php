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
<h1 class="has-background-color has-primary-background-color has-text-color has-background">Shambhala: a global community</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","backgroundColor":"primary","textColor":"background","fontSize":"lead"} -->
<p class="has-text-align-left has-background-color has-primary-background-color has-text-color has-background has-lead-font-size">Shambhala is a global community of people inspired by the principle that every human being has a fundamental nature of basic goodness.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
<h2 class="alignwide has-x-large-font-size">Shambhala: a global community</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Shambhala is a global community of people inspired by the principle that every human being has a fundamental nature of basic goodness. This nature, our innate wisdom, can be developed so that it benefits our own lives and helps meet the many challenges facing the world.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":2703,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/community-group.jpg' ) ) . '" alt="People in Shambhala shrine room, some smiling, some pensive." class="wp-image-2703"/><figcaption>Community gathering</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Shambhala welcomes people from all walks of life, faiths, and backgrounds. They come together to practice meditation, gather, and celebrate to develop a global culture that cultivates dignity and sanity in an increasingly chaotic and stressful world.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:paragraph -->
<p>Each individual, group, and Shambhala Center worldwide are linked together by the Shambhala teachings and lineage, making a worldwide community of shared inspiration. There are thousands of members and friends of Shambhala on all continents.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>There are online communities and more than 200 Shambhala centres and groups and individual members located in major cities, towns, and rural settings in over 50 different countries.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size">Shambhala Vision</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Shambhala vision is rooted in the principle that every human being has a fundamental nature of basic goodness. This nature can be developed in daily life to radiate out to family, friends, community, and society.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Dive into Shambhala Vision</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/miksang-1.jpg' ) ) . '","id":2709,"dimRatio":20,"overlayColor":"accent-color","focalPoint":{"x":"0.35","y":"0.89"},"minHeight":791,"minHeightUnit":"px"} -->
<div class="wp-block-cover" style="min-height:791px"><span aria-hidden="true" class="wp-block-cover__background has-accent-color-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2709" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/miksang-1.jpg' ) ) . '" style="object-position:35% 89%" data-object-fit="cover" data-object-position="35% 89%"/><div class="wp-block-cover__inner-container"><!-- wp:quote -->
<blockquote class="wp-block-quote"><p>A great deal of the chaos in the world occurs because people don’t appreciate themselves.</p><p></p><cite>Chögyam Trungpa</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"has-x-large-font-size"} -->
<div class="wp-block-group alignwide has-x-large-font-size"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"300","fontSize":"34px"}}} -->
<p class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:300;line-height:1.25">Shambhala takes its name from a legendary kingdom famous for being an enlightened society. Today, the global Shambhala network brings together people of all ages and from all walks of life who are interested in exploring our own minds, transforming our experience, and awakening our potential for enlightened society.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"mediaLink":"#","mediaType":"image","mediaWidth":56,"verticalAlignment":"center","imageFill":false,"className":"is-style-default"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-default" style="grid-template-columns:56% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/ikebana-gong.jpg' ) ) . '" alt="A meditation gong and an ikebana"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dblack)"}}} -->
<h2 class="has-text-color" style="color:var(--wp--preset--color--black)">A header that sparks interest</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-text-color"} -->
<p class="has-text-color">We like to show the picture for illustration and inspiration, lead the visitor into the story, or highlight a certain point.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":106,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"list"},"align":"wide","className":"is-style-wp-block-query-small-grey","layout":{"inherit":true}} -->
<div class="wp-block-query alignwide is-style-wp-block-query-small-grey"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>Latest news</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><a href="#">All news</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:post-template -->
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
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
<div class="wp-block-column"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":106,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"list"},"align":"wide","className":"is-style-wp-block-query-small-grey","layout":{"inherit":true}} -->
<div class="wp-block-query alignwide is-style-wp-block-query-small-grey"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>Latest news</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><a href="#">All news</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:post-template -->
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
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
<!-- /wp:columns -->',
);
