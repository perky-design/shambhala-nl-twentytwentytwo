<?php
/**
 * Title: News overview title
 * Slug: shambhala-twentytwentytwo/hidden-title-news
 *
 * @package Shambhala Twenty Twenty-Two
 */

$news_page_id = get_option( 'page_for_posts' );
if ( $news_page_id && is_int( $news_page_id ) ) {
	$news_url   = get_permalink( $news_page_id );
	$news_title = esc_attr( get_the_title( $news_page_id ) );
} else {
	$news_url   = '#';
	$news_title = __( 'News', 'shambhala-twentytwentytwo' );
}


return array(
	'title'    => __( 'News title', 'shambhala-twentytwentytwo' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1 class="alignwide wp-block-post-title">' . $news_title . '</h1>
				<!-- /wp:heading -->',
);
