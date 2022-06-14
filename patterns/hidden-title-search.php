<?php
/**
 * Title: Search result title
 * Slug: shambhala-twentytwentytwo/hidden-title-search
 *
 * @package Shambhala Twenty Twenty-Two
 */

$search_title = __( 'Search', 'shambhala-twentytwentytwo' );

return array(
	'title'    => __( 'Search result title', 'shambhala-twentytwentytwo' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1 class="alignwide wp-block-post-title">' . esc_attr( $search_title ) . '</h1>
				<!-- /wp:heading -->',
);
