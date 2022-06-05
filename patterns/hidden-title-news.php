<?php
/**
 * News overview title.
 *
 * @package Shambhala Twenty Twenty-Two
 */

$news_page_id = get_option( 'page_for_posts' );

return array(
	'title'    => __( 'News title', 'shambhala-twentytwentytwo' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1 class="alignwide wp-block-post-title">' . esc_attr( get_the_title( $news_page_id ) ) . '</h1>
				<!-- /wp:heading -->',
);
