<?php
/**
 * Query grid three columns
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'         => __( 'Grid of posts in three columns.', 'shambhala-twentytwentytwo' ),
	'categories'    => array( 'sh-query' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
				<div class="wp-block-group alignwide">

				<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
				<div class="wp-block-query alignwide"><!-- wp:post-template -->
				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}}},"fontSize":"x-large"} /-->

				<!-- wp:post-date {"fontSize":"small"} /-->

				<!-- wp:spacer {"height":20} -->
				<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:post-excerpt {"moreText":"Lees verder"} /-->
				<!-- /wp:post-template -->

				<!-- wp:query-pagination -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-numbers /-->

				<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination --></div>
				<!-- /wp:query -->

				<!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
