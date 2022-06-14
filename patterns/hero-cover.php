<?php
/**
 * Title: Hero image with text that has background color
 * Slug: shambhala-twentytwentytwo/hero-cover
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Registers block patterns, categories, and type.
 */
return array(
	'title'       => __( 'Hero cover image with title text', 'shambhala-twentytwentytwo' ),
	'categories'  => array( 'sh-section', 'featured' ),
	'description' => _x( 'Hero image with text that has background color', 'shambhala-twentytwentytwo', 'shambhala-twentytwentytwo' ),
	'content'     => '<!-- wp:cover {"url":"https://raw.githubusercontent.com/perky-design/shambhala-nl-twentytwentytwo-images/main/hero-kids-bubbles-play.jpg","id":3149,"dimRatio":20,"overlayColor":"secondary","focalPoint":{"x":"0.55","y":"0.32"},"minHeight":800,"minHeightUnit":"px","isDark":false,"align":"full","className":"cover-image-with-text"} -->
		<div class="wp-block-cover alignfull is-light cover-image-with-text" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3149" alt="" src="https://raw.githubusercontent.com/perky-design/shambhala-nl-twentytwentytwo-images/main/hero-kids-bubbles-play.jpg" style="object-position:55% 32%" data-object-fit="cover" data-object-position="55% 32%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"width-full-size "} -->
		<div class="wp-block-columns width-full-size"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"layout":{"inherit":false}} -->
		<div class="wp-block-group"><!-- wp:spacer {"height":"400px"} -->
		<div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"level":1,"textColor":"background"} -->
		<h1 class="has-background-color has-text-color">About Shambhala</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"background","className":"has-text-align-left has-text-color has-lead-font-size"} -->
		<p class="has-text-align-left has-text-color has-lead-font-size has-background-color">Through awakening our inherent goodness and potential as human beings – as individuals and as social networks and communities – we can help to foster an awake and compassionate global human society.</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div></div>
		<!-- /wp:cover -->',
);
