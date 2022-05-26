<?php
/**
 * Shambhala Twenty Twenty-Two style functions.
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Sets up theme stylesheets.
 *
 * @return void
 */
function shambhala_twentytwentytwo_enqueue_scripts() {

	// Register parent theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$version_string = is_string( $theme_version ) ? $theme_version : false;

	// Parent theme CSS.
	wp_register_style(
		'twentytwentytwo-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$version_string
	);

	// Header font.
	wp_register_style(
		'shambhala-twentytwentytwo-font-roboto-slab',
		'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap',
		array( 'twentytwentytwo-style' ),
		$version_string
	);
	wp_enqueue_style( 'shambhala-twentytwentytwo-font-roboto-slab' );

	// Load Google font for body text.
	wp_register_style(
		'shambhala-twentytwentytwo-font-poppins',
		'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,100;1,300&display=swap',
		array(),
		$version_string
	);
	wp_enqueue_style( 'shambhala-twentytwentytwo-font-poppins' );

	// Child theme CSS for styling not support yet in them.json.
	wp_register_style(
		'shambhala-twentytwentytwo-app',
		get_stylesheet_directory_uri() . '/assets/css/app.css',
		array( 'twentytwentytwo-style' ),
		$version_string
	);
	wp_enqueue_style( 'shambhala-twentytwentytwo-app' );

}
add_action( 'wp_enqueue_scripts', 'shambhala_twentytwentytwo_enqueue_scripts' );


if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @return void
	 */
	function shambhala_twentytwentytwo_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', shambhala_twentytwentytwo_get_font_face_styles() );
	}

endif;

add_action( 'admin_init', 'shambhala_twentytwentytwo_editor_styles' );


if ( ! function_exists( 'shambhala_twentytwentytwo_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions shambhala_twentytwentytwo_styles() and shambhala_twentytwentytwo_editor_styles() above.
	 *
	 * @return void
	 */
	function shambhala_twentytwentytwo_get_font_face_styles() {
		// Register editor style.
		wp_register_style(
			'shambhala-twentytwentytwo-admin-css',
			get_stylesheet_directory_uri() . '/assets/css/admin.css',
			array(),
			shambhala_twentytwentytwo_version()
		);
		wp_enqueue_style( 'shambhala-twentytwentytwo-admin-css' );
	}

endif;

if ( ! function_exists( 'shambhala_twentytwentytwo_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @return void
	 */
	function shambhala_twentytwentytwo_preload_webfonts() {
		?>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
		<?php
	}

endif;
add_action( 'wp_head', 'shambhala_twentytwentytwo_preload_webfonts' );

/**
 * Add stylesheet class to body.
 *
 * @param array $classes The classes for the body tag.
 * @return array $classes_plus The classes for the body tag.
 */
function shambhala_twentytwentytwo_body_class( $classes ) {
	$classes_plus = array_merge( $classes, array( 'shambhala-twentytwentytwo' ) );
	return $classes_plus;
}
add_filter( 'body_class', 'shambhala_twentytwentytwo_body_class' );

/**
 * Add block style for rounded corner image.
 * See: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @return void
 */
function shambhala_twentytwentytwo_enqueue() {

		wp_enqueue_script(
			'rounded-corner-script',
			get_stylesheet_directory_uri() . '/assets/js/style-rounded.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			shambhala_twentytwentytwo_version(),
			true
		);

		register_block_style(
			'core/media-text',
			array(
				'name'         => 'rounded-image',
				'label'        => __( 'Rounded image', 'shambhala-twentytwentytwo' ),
				'inline_style' => '.wp-block-media-text.is-style-rounded-image img { border-radius: 50%; }',
			)
		);
}
add_action( 'enqueue_block_editor_assets', 'shambhala_twentytwentytwo_enqueue' );

/**
 * Get version.
 *
 * @return string
 */
function shambhala_twentytwentytwo_version() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : '';
		return $version_string;
}

/**
 * Load translations for shambhala-twentytwentytwo.
 */
function wshambhala_twentytwentytwo_translations() {
	load_theme_textdomain( 'shambhala-twentytwentytwo', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'wshambhala_twentytwentytwo_translations' );

echo 'c: ' . wp_get_theme()->get( 'Version' );
