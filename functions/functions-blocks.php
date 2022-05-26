<?php
/**
 * Shambhala Twenty Twenty-Two block functions.
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @return void
 */
function shambhala_twentytwentytwo_register_block_patterns() {
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
			register_block_pattern_category_type( 'shambhala-twentytwentytwo', array( 'label' => __( 'Shambhala Twenty Twenty-Two', 'shambhala-twentytwentytwo' ) ) );
	}

	$block_pattern_categories = array(
		'sh-section' => array(
			'label'         => __( 'Shambhala: Section', 'shambhala-twentytwentytwo' ),
			'categoryTypes' => array( 'shambhala-twentytwentytwo' ),
		),
		'sh-page'    => array(
			'label'         => __( 'Shambhala: Page', 'shambhala-twentytwentytwo' ),
			'categoryTypes' => array( 'shambhala-twentytwentytwo' ),
		),
		'sh-header'  => array(
			'label'         => __( 'Shambhala: Header', 'shambhala-twentytwentytwo' ),
			'categoryTypes' => array( 'shambhala-twentytwentytwo' ),
		),
		'sh-footer'  => array(
			'label'         => __( 'Shambhala: Footer', 'shambhala-twentytwentytwo' ),
			'categoryTypes' => array( 'shambhala-twentytwentytwo' ),
		),
		'sh-query'   => array(
			'label'         => __( 'Shambhala: Query', 'shambhala-twentytwentytwo' ),
			'categoryTypes' => array( 'shambhala-twentytwentytwo' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'shambhala_twentytwentytwo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'footer-default',
		'header-default',
		'hero-about',
		'hidden-404',
		'page-landing-hero',
		'page-landing-welcome-text',
		'page-shambhala-centre',
		'query-default',
		'query-grid',
		'section-description-text',
		'section-image-with-text-1',
		'section-image-with-text-2',
		'section-image-with-text-3',
		'section-image-with-text-4',
		'section-three-columns',
		'section-two-columns',
		'section-welcome-text',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'shambhala_twentytwentytwo_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'shambhala-twentytwentytwo/' . $block_pattern,
			require get_theme_file_path( '/patterns/' . $block_pattern . '.php' )
		);
	}
}
add_action( 'init', 'shambhala_twentytwentytwo_register_block_patterns', 99 );

/**
 * Unregisters block patterns.
 *
 * @return void
 */
function shambhala_twentytwentytwo_unregister_block_patterns() {

	// Don't load remote block patterns.
	// apply_filters( 'should_load_remote_block_patterns', false );.

	// Disable some patterns from the parent theme.
	$block_patterns = array(
		'footer-default',
		'footer-dark',
		'footer-logo',
		'footer-navigation',
		'footer-title-tagline-social',
		'footer-social-copyright',
		'footer-navigation-copyright',
		'footer-about-title-logo',
		'footer-query-title-citation',
		'footer-query-images-title-citation',
		'footer-blog',
		'general-subscribe',
		'general-featured-posts',
		'general-layered-images-with-duotone',
		'general-wide-image-intro-buttons',
		'general-large-list-names',
		'general-video-header-details',
		'general-list-events',
		'general-two-images-text',
		'general-image-with-caption',
		'general-video-trailer',
		'general-pricing-table',
		'general-divider-light',
		'general-divider-dark',
		'header-default',
		'header-large-dark',
		'header-small-dark',
		'header-image-background',
		'header-image-background-overlay',
		'header-with-tagline',
		'header-text-only-green-background',
		'header-text-only-salmon-background',
		'header-title-and-button',
		'header-text-only-with-tagline-black-background',
		'header-logo-navigation-gray-background',
		'header-logo-navigation-social-black-background',
		'header-title-navigation-social',
		'header-logo-navigation-offset-tagline',
		'header-stacked',
		'header-centered-logo',
		'header-centered-logo-black-background',
		'header-centered-title-navigation-social',
		'header-title-and-button',
		'hidden-404',
		'hidden-bird',
		'hidden-heading-and-bird',
		'page-about-media-left',
		'page-about-simple-dark',
		'page-about-media-right',
		'page-about-solid-color',
		'page-about-links',
		'page-about-links-dark',
		'page-about-large-image-and-buttons',
		'page-layout-image-and-text',
		'page-layout-image-text-and-video',
		'page-layout-two-columns',
		'page-sidebar-poster',
		'page-sidebar-grid-posts',
		'page-sidebar-blog-posts',
		'page-sidebar-blog-posts-right',
		'query-default',
		'query-simple-blog',
		'query-grid',
		'query-text-grid',
		'query-image-grid',
		'query-large-titles',
		'query-irregular-grid',
	);
	foreach ( $block_patterns as $block_pattern ) {
		unregister_block_pattern(
			'twentytwentytwo/' . $block_pattern
		);
	}
}
add_action( 'init', 'shambhala_twentytwentytwo_unregister_block_patterns', 999 );
