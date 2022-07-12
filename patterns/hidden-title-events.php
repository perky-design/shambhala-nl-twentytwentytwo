<?php
/**
 * Title: Events result title
 * Slug: shambhala-twentytwentytwo/hidden-title-events
 *
 * @package Shambhala Twenty Twenty-Two
 */

$events_title = __( 'Events', 'shambhala-twentytwentytwo' );

return array(
	'title'    => __( 'Events overview title', 'shambhala-twentytwentytwo' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1 class="alignwide wp-block-post-title">' . esc_attr( $events_title ) . '</h1>
				<!-- /wp:heading -->',
);
