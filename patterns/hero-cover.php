<?php
/**
 * Hero image with text that has background color.
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Registers block patterns, categories, and type.
 */
return array(
	'title'       => __( 'Hero cover image with title text', 'shambhala-twentytwentytwo' ),
	'categories'  => array( 'sh-section' ),
	'description' => _x( 'Hero image with text that has background color', 'shambhala-twentytwentytwo' ),
	'content'     => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/hero-kids-bubbles-play.jpg' ) ) . '","id":3149,"dimRatio":20,"overlayColor":"secondary","focalPoint":{"x":"0.55","y":"0.32"},"minHeight":800,"minHeightUnit":"px","align":"full","className":"cover-image-with-text-has-background"} -->
	<div class="wp-block-cover alignfull cover-image-with-text-has-background" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3149" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/hero-kids-bubbles-play.jpg' ) ) . '" style="object-position:55% 32%" data-object-fit="cover" data-object-position="55% 32%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"width-full-size "} -->
	<div class="wp-block-columns width-full-size"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:spacer {"height":"400px"} -->
	<div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"level":1,"backgroundColor":"primary","textColor":"background","className":"width-content-size","fontSize":"x-large"} -->
	<h1 class="width-content-size has-background-color has-primary-background-color has-text-color has-background has-x-large-font-size">' . esc_html__( 'About Shambhala', 'shambhala-twentytwentytwo' ) . '</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"left","backgroundColor":"primary","textColor":"background","className":"width-content-size","fontSize":"lead"} -->
	<p class="has-text-align-left width-content-size has-background-color has-primary-background-color has-text-color has-background has-lead-font-size">' . esc_html__( 'Through awakening our inherent goodness and potential as human beings – as individuals and as social networks and communities – we can help to foster an awake and compassionate global human society.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
);
