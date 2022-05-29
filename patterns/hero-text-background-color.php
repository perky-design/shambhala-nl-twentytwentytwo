<?php
/**
 * Hero image variant with text that has background color.
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Registers block patterns, categories, and type.
 */
return array(
	'title'       => __( 'Hero image variant', 'shambhala-twentytwentytwo' ),
	'categories'  => array( 'sh-section' ),
	'description' => _x( 'Hero image variant with text that has background color', 'shambhala-twentytwentytwo' ),
	'content'     => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/hero-5945441-1400x800.jpg' ) ) . '","id":2279,"dimRatio":20,"focalPoint":{"x":"0.47","y":"0.66"},"minHeight":800,"minHeightUnit":"px","isDark":false,"align":"full","className":"cover-image-with-text-has-background"} -->
<div class="wp-block-cover alignfull is-light cover-image-with-text-has-background" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2279" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/hero-5945441-1400x800.jpg' ) ) . '" style="object-position:47% 66%" data-object-fit="cover" data-object-position="47% 66%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"width-full-size "} -->
<div class="wp-block-columns width-full-size"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"400px"} -->
<div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"backgroundColor":"foreground","textColor":"background","className":"width-content-size","fontSize":"x-large"} -->
<h1 class="width-content-size has-background-color has-foreground-background-color has-text-color has-background has-x-large-font-size">' . esc_html__( 'Shambhala: a global community', 'shambhala-twentytwentytwo' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","backgroundColor":"foreground","textColor":"background","className":"width-content-size","fontSize":"lead"} -->
<p class="has-text-align-left width-content-size has-background-color has-foreground-background-color has-text-color has-background has-lead-font-size">' . esc_html__( 'Shambhala is a global community of people inspired by the principle that every human being has a fundamental nature of basic goodness.', 'shambhala-twentytwentytwo' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->',
);
