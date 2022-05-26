<?php
/**
 * Hero block pattern for landing pages.
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Registers block patterns, categories, and type.
 */
return array(
	'title'       => __( 'About Hero', 'shambhala-twentytwentytwo' ),
	'categories'  => array( 'sh-section' ),
	'description' => _x( 'About Hero with description and buttons', 'Cover photo, headline, a short text and buttons.', 'shambhala-twentytwentytwo' ),
	'blockTypes'  => array( 'core/template-part/footer' ),
	'content'     => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/shambhala-meditators-shrine.jpg' ) ) . '","id":2145,"dimRatio":40,"focalPoint":{"x":"0.54","y":"0.35"},"minHeight":800,"minHeightUnit":"px","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2145" alt="' . esc_html__( 'Meditators in Shambhala shrine room', 'shambhala-twentytwentytwo' ) . '" src="' . esc_url( get_theme_file_uri( '/assets/images/shambhala-meditators-shrine.jpg' ) ) . '" style="object-position:54% 35%" data-object-fit="cover" data-object-position="54% 35%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"x-large"} -->
<h1 class="has-text-align-center has-background-color has-text-color has-x-large-font-size" id="about-us">' . esc_html__( 'Shambhala: a global community', 'shambhala-twentytwentytwo' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"background","className":"width-content-size","fontSize":"lead"} -->
<p class="has-text-align-center width-content-size has-background-color has-text-color has-lead-font-size">' . esc_html__( 'Shambhala is a global community of people inspired by the principle that every human being has a fundamental nature of basic goodness.', 'shambhala-twentytwentytwo' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-green"} -->
<div class="wp-block-button is-style-green"><a class="wp-block-button__link">' . esc_html__( 'Find a centre', 'shambhala-twentytwentytwo' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"background","className":"is-style-white-link is-style-outline"} -->
<div class="wp-block-button is-style-white-link is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . esc_html__( 'Calendar', 'shambhala-twentytwentytwo' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);
