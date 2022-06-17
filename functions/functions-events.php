<?php
/**
 * Shambhala Twenty Twenty-Two block functions.
 *
 * @package Shambhala Twenty Twenty-Two
 */

/**
 * Filter the content.
 *
 * @param string $content The post content.
 * @return string $content
 */
function shambhala_twentytwentytwo_filter_the_content( $content ) {
	// Check if we're inside the main loop in a single Post.
	if ( is_singular() && in_the_loop() && is_main_query() ) {
		global $post;

		// Check if this is an Event from The Events Calendar.
		if ( function_exists( 'tribe_get_event' )
			&& 'tribe_events' === $post->post_type ) {
			$pre_content  = '';
			$post_content = '';
			$tribe_event  = tribe_get_event( $post->ID );
			$tribe_meta   = get_post_meta( $post->ID );

			// Event in the future.
			if ( is_array( $tribe_meta ) && ! $tribe_event->is_past ) {
				$registration_button = shambhala_twentytwentytwo_get_registration_button( $tribe_meta );
				if ( $registration_button ) {
					$post_content .= $registration_button;
				}
			}

			return $pre_content . $content . $post_content;
		}
		return $content;
	}
	return $content;
}
add_filter( 'the_content', 'shambhala_twentytwentytwo_filter_the_content', 1 );

/**
 * Display Registration button (or not)
 *
 * @param array $tribe_meta the Tribe event post meta.
 *
 * @return mixed false or string with HTML
 */
function shambhala_twentytwentytwo_get_registration_button( array $tribe_meta ) {

	if ( isset( $tribe_meta['_EventURL'][0] )
		&& preg_match( '/registration/i', $tribe_meta['_EventURL'][0] ) ) {
			$button  = '<!-- wp:buttons -->';
			$button .= '<div class="wp-block-buttons"><!-- wp:button -->';
			$button .= '<div class="wp-block-button"><a class="wp-block-button__link" href="';
			$button .= $tribe_meta['_EventURL'][0];
			$button .= '">';
			$button .= __( 'Register', 'shambhala-twentytwentytwo' );
			$button .= '</a></div>';
			$button .= '<!-- /wp:button --></div>';
			$button .= '<!-- /wp:buttons --></div></div>';

			return $button;
	}
	return false;
}
