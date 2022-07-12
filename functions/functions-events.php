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

		// This is for the Events Calendar Plugin single page content.
		if ( 'tribe_events' === $post->post_type
			&& function_exists( 'tribe_get_event' )
			&& function_exists( 'tribe_get_venue_details' )
			&& function_exists( 'tribe_events_event_schedule_details' ) ) {
			$pre_content   = '';
			$post_content  = '';
			$tribe_event   = tribe_get_event( $post->ID );
			$tribe_meta    = get_post_meta( $post->ID );
			$venue_details = tribe_get_venue_details();
			$date_info     = wp_strip_all_tags( tribe_events_event_schedule_details( $post ) );

			$pre_content .= '<h2 class="tribe-single-event-date-info">' . $date_info . '</h2>';

			// Add excerpt before content.
			if ( isset( $tribe_event->post_excerpt ) ) {
				$pre_content .= '<p class="program-single-page-excerpt">' . $tribe_event->post_excerpt . '</p>';
			}

			// Registration button only for events in the future.
			if ( is_array( $tribe_meta ) && ! $tribe_event->is_past ) {
				$registration_button = shambhala_twentytwentytwo_get_registration_button( $tribe_meta );
				if ( $registration_button ) {
					$post_content .= $registration_button;
				}
			}

			// Add event details.
			$post_content .= shambhala_twentytwentytwo_get_details();
			$post_content .= shambhala_twentytwentytwo_get_organizer( $post->ID );
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
function shambhala_twentytwentytwo_get_registration_button( $tribe_meta ) {

	if ( isset( $tribe_meta['_EventURL'][0] )
		&& preg_match( '/registration/i', $tribe_meta['_EventURL'][0] ) ) {
			$button  = '<!-- wp:buttons -->';
			$button .= '<div class="wp-block-buttons">';
			$button .= '<!-- wp:button -->';
			$button .= '<div class="wp-block-button">';
			$button .= '<a class="wp-block-button__link" href="';
			$button .= $tribe_meta['_EventURL'][0];
			$button .= '">';
			$button .= __( 'Register', 'shambhala-twentytwentytwo' );
			$button .= '</a>';
			$button .= '<!-- /wp:button --></div>';
			$button .= '<!-- /wp:buttons --></div>';

			return $button;
	}
	return false;
}


/**
 * Display organizer info.
 *
 * @param int $event_id The event ID..
 *
 * @return string HTML of empty string.
 */
function shambhala_twentytwentytwo_get_organizer( $event_id ) {
	$html = '';
	if ( function_exists( 'tribe_get_organizer_id' )
		&& function_exists( 'tribe_get_organizer' ) ) {
		$organizer_id   = (int) tribe_get_organizer_id( $event_id );
		$organizer_link = get_post_permalink( $organizer_id );

		$html .= '<h3>' . __( 'Organizer', 'shambhala-twentytwentytwo' ) . '</h3>';
		$html .= '<h4>' . tribe_get_organizer( $event_id ) . '</h4>';
		if ( is_string( $organizer_link ) ) {
			/* translators: %s is replaced with "organizer link URL" */
			$link = sprintf( wp_kses( __( '<a href="%s">View all events by this organizer</a>', 'shambhala-twentytwentytwo' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( $organizer_link ) );
			$html .= '<p>' . $link . '</p>';
		}
	}

	return $html;
}

/**
 * Display details after content
 *
 * @return mixed false or string with HTML
 */
function shambhala_twentytwentytwo_get_details() {

	$event_id             = '';
	$time_format          = '';
	$time_range_separator = ' - ';
	$show_time_zone       = false;
	$local_start_time     = '';
	$time_zone_label      = '';
	$start_datetime       = '';
	$start_date           = '';
	$start_time           = '';
	$start_ts             = '';
	$end_datetime         = '';
	$end_date             = '';
	$end_time             = '';
	$end_ts               = '';
	$time_formatted       = '';
	$time_title           = '';

	if ( class_exists( 'Tribe__Main' )
		&& function_exists( 'tribe_events_get_event_website_title' )
		&& function_exists( 'tribe_get_event_website_link' )
		&& function_exists( 'tribe_get_formatted_cost' )
		&& function_exists( 'tribe_get_end_date' )
		&& function_exists( 'tribe_get_display_end_date' )
		&& function_exists( 'tribe_get_start_date' )
		&& function_exists( 'tribe_get_option' )
		&& class_exists( 'Tribe__Date_Utils' )
		&& class_exists( 'Tribe__Events__Timezones' ) ) {
		$event_id             = Tribe__Main::post_id_helper();
		$time_format          = get_option( 'time_format', Tribe__Date_Utils::TIMEFORMAT );
		$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );
		$show_time_zone       = tribe_get_option( 'tribe_events_timezones_show_zone', false );
		$local_start_time     = tribe_get_start_date( $event_id, true, Tribe__Date_Utils::DBDATETIMEFORMAT );
		$time_zone_label      = Tribe__Events__Timezones::is_mode( 'site' ) ? Tribe__Events__Timezones::wp_timezone_abbr( $local_start_time ) : Tribe__Events__Timezones::get_event_timezone_abbr( $event_id );
		$start_datetime       = tribe_get_start_date();
		$start_date           = tribe_get_start_date( null, false );
		$start_time           = tribe_get_start_date( null, false, $time_format );
		$start_ts             = tribe_get_start_date( null, false, Tribe__Date_Utils::DBDATEFORMAT );
		$end_datetime         = tribe_get_end_date();
		$end_date             = tribe_get_display_end_date( null, false );
		$end_time             = tribe_get_end_date( null, false, $time_format );
		$end_ts               = tribe_get_end_date( null, false, Tribe__Date_Utils::DBDATEFORMAT );

		$time_formatted = null;
		if ( $start_time === $end_time ) {
			$time_formatted = esc_html( $start_time );
		} else {
			$time_formatted = esc_html( $start_time . $time_range_separator . $end_time );
		}

		$time_formatted = apply_filters( 'tribe_events_single_event_time_formatted', $time_formatted, $event_id ); /* @phpstan-ignore-line */
		$time_title     = apply_filters( 'tribe_events_single_event_time_title', __( 'Time:', 'shambhala-twentytwentytwo' ), $event_id ); /* @phpstan-ignore-line */
		$cost           = tribe_get_formatted_cost();
		$website        = tribe_get_event_website_link( $event_id );
		$website_title  = tribe_events_get_event_website_title();
	}

	if ( isset( $start_datetime ) && function_exists( 'tribe_get_formatted_cost' ) ) {
		$html = '';
		$cost = tribe_get_formatted_cost();

		$html .= '<!-- wp:spacer {"height":"32px"} --><div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->';
		$html .= '<!-- wp:group {"layout":{"inherit":true}} -->';
		$html .= '<div class="wp-block-group">';
		$html .= '<!-- wp:columns -->';
		$html .= '<div class="wp-block-columns">';
		$html .= '<!-- wp:columns -->';
		$html .= '<div class="wp-block-column">';
		$html .= '<div class="tribe-events-meta-group tribe-events-meta-group-details">';
		$html .= '<h2>' . esc_html__( 'Details', 'shambhala-twentytwentytwo' ) . '</h2>';
		$html .= '<dl>';

		if ( function_exists( 'tribe_event_is_all_day' )
			&& function_exists( 'tribe_event_is_multiday' ) ) {
			// All day (multiday) events.
			if ( tribe_event_is_all_day() && tribe_event_is_multiday() ) {
				$html .= '<dt class="tribe-events-start-date-label">' . esc_html__( 'Start:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd>';
				$html .= '<abbr class="tribe-events-abbr tribe-events-start-date published dtstart" title="' . esc_attr( $start_ts ) . '">' . esc_html( $start_date ) . '</abbr>';
				$html .= '</dd>';
				$html .= '<dt class="tribe-events-end-date-label">' . esc_html__( 'End:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd>';
				$html .= '<abbr class="tribe-events-abbr tribe-events-end-date dtend" title="' . esc_attr( $end_ts ) . '">' . esc_html( $end_date ) . '</abbr>';
				$html .= '</dd>';
			} elseif ( tribe_event_is_all_day() ) {
				// All day (single day) events.
				$html .= '<dt class="tribe-events-start-date-label">' . esc_html__( 'Date:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd>';
				$html .= '<abbr class="tribe-events-abbr tribe-events-start-date published dtstart" title="' . esc_attr( $start_ts ) . '">' . esc_html( $start_date ) . '</abbr>';
				$html .= '</dd>';
			} elseif ( tribe_event_is_multiday() ) {
				// Multiday events.
				$html .= '<dt class="tribe-events-start-datetime-label">' . esc_html__( 'Start:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd>';
				$html .= '<abbr class="tribe-events-abbr tribe-events-start-datetime updated published dtstart" title="' . esc_attr( $start_ts ) . '">' . esc_html( $start_datetime ) . '</abbr>';
				if ( $show_time_zone ) {
					$html .= '<span class="tribe-events-abbr tribe-events-time-zone published ">' . esc_html( $time_zone_label ) . '</span>';
				}
				$html .= '</dd>';
				$html .= '<dt class="tribe-events-end-datetime-label">' . esc_html__( 'End:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd>';
				$html .= '<abbr class="tribe-events-abbr tribe-events-end-datetime dtend" title="' . esc_attr( $end_ts ) . '">' . esc_html( $end_datetime ) . '</abbr>';
				if ( $show_time_zone ) {
					$html .= '<span class="tribe-events-abbr tribe-events-time-zone published ">' . esc_html( $time_zone_label ) . '</span>';
				}
				$html .= '</dd>';
			} else {
				// Single day events.
				$html .= '<dt class="tribe-events-start-date-label">' . esc_html__( 'Date:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd>';
				$html .= '<abbr class="tribe-events-abbr tribe-events-start-date published dtstart" title="' . esc_attr( $start_ts ) . '">' . esc_html( $start_date ) . '</abbr>';
				$html .= '</dd>';
				$html .= '<dt class="tribe-events-start-time-label">' . esc_html( $time_title ) . '</dt>';
				$html .= '<dd>';
				$html .= '<div class="tribe-events-abbr tribe-events-start-time published dtstart" title="' . esc_attr( $end_ts ) . '">';
				$html .= $time_formatted;
				if ( $show_time_zone ) {
					$html .= '<span class="tribe-events-abbr tribe-events-time-zone published ">' . esc_html( $time_zone_label ) . '</span>';
				}
				$html .= '</div></dd>';
			}

			if ( $cost ) {
				$html .= '<dt class="tribe-events-event-cost-label">' . esc_html__( 'Cost:', 'shambhala-twentytwentytwo' ) . '</dt>';
				$html .= '<dd class="tribe-events-event-cost">' . esc_attr( $cost ) . '</dd>';
			}
		}

		if ( function_exists( 'tribe_get_event_categories' ) ) {
			$html .= tribe_get_event_categories(
				get_the_id(),
				array(
					'before'       => '',
					'sep'          => ', ',
					'after'        => '',
					'label'        => null, // An appropriate plural/singular label will be provided.
					'label_before' => '<dt class="tribe-events-event-categories-label">',
					'label_after'  => '</dt>',
					'wrap_before'  => '<dd class="tribe-events-event-categories">',
					'wrap_after'   => '</dd>',
				)
			);
		}

		$html .= '</dl></div><!-- tribe-events-meta-group tribe-events-meta-group-details -->';
		$html .= '</div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->';

		return $html;
	}

	return false;
}


/**
 * Display date and time after the title on the event page.
 *
 * @param string $title The title.
 *
 * @return string HTML
 */
function shambhala_twentytwentytwo_single_event_title( $title ) {
	global $post;
	if ( is_singular() && is_main_query() ) {
		if ( 'tribe_organizer' === $post->post_type || 'tribe_venue' === $post->post_type ) {
			return __( 'Events', 'shambhala-twentytwentytwo' ) . ' > ' . $title;
		}
	}

	return $title;
}
add_filter( 'the_title', 'shambhala_twentytwentytwo_single_event_title' );

