<?php
/**
 * Quote with citation
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'         => __( 'Quote with citation', 'shambhala-twentytwentytwo' ),
	'categories'    => array( 'sh-section' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:pullquote {"align":"wide"} -->
	<figure class="wp-block-pullquote alignwide"><blockquote><p>' . esc_html__( 'A great deal of the chaos in the world occurs because people don\'t appreciate themselves.', 'shambhala-twentytwentytwo' ) . '</p><cite><em>' . esc_html__( 'Chögyam Trungpa, Shambhala: The Sacred Path of the Warrior ', 'shambhala-twentytwentytwo' ) . '</em></cite></blockquote></figure>
	<!-- /wp:pullquote -->
	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);
