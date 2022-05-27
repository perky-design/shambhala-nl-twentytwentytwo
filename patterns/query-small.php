<?php
/**
 * Query list small
 *
 * @package Shambhala Twenty Twenty-Two
 */

// Get URL for Page for post setting.
$news_page_id = get_option( 'page_for_posts' );
if ( $news_page_id ) {
	$news_url = get_permalink( $news_page_id );
} else {
	$news_url = '#';
}

return array(
	'title'         => __( 'List of posts in one column (no featured images).', 'shambhala-twentytwentytwo' ),
	'categories'    => array( 'sh-query' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
			<div class="wp-block-group alignwide"><!-- wp:query {"queryId":106,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"list"},"align":"wide","className":"is-style-wp-block-query-small-grey","layout":{"inherit":true}} -->
			<div class="wp-block-query alignwide is-style-wp-block-query-small-grey"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"66%"} -->
			<div class="wp-block-column" style="flex-basis:66%"><!-- wp:heading {"fontSize":"large"} -->
			<h2 class="has-large-font-size">' . esc_html__( 'Latest news', 'shambhala-twentytwentytwo' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"right"} -->
			<p class="has-text-align-right"><a href="' . $news_url . '">' . esc_html__( 'All news', 'shambhala-twentytwentytwo' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:post-template -->
			<!-- wp:group {"layout":{"inherit":true}} -->
			<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
			<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:post-title {"level":3,"isLink":true,"align":"wide","fontSize":"large"} /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group -->',
);
