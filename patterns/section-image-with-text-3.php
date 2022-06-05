<?php
/**
 * Description section with text
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'      => __( 'Image with text 3.', 'shambhala-twentytwentytwo' ),
	'categories' => array( 'sh-section', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"light-grey"} -->
	<div class="wp-block-group alignfull has-light-grey-background-color has-background"><!-- wp:media-text {"mediaId":3442,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/meditators-illustration.png' ) . '","mediaType":"image","mediaWidth":33,"mediaSizeSlug":"full","verticalAlignment":"center","imageFill":false,"className":"width-full-size center-block"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center width-full-size center-block" style="grid-template-columns:33% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/meditators-illustration.png' ) . '" alt="' . esc_html__( 'Illustration with four smiling meditators', 'shambhala-twentytwentytwo' ) . '" class="wp-image-3442 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"left","style":{"color":{"text":"#000000"}},"fontSize":"x-large"} -->
	<h2 class="has-text-align-left has-text-color has-x-large-font-size" style="color:#000000">' . esc_html__( 'Find your path online', 'shambhala-twentytwentytwo' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Connect with teachings to deepen your spiritual journey—anytime, anywhere.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Visit Course Library', 'shambhala-twentytwentytwo' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);

