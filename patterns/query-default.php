<?php
/**
 * Title: Query list one column
 * Slug: shambhala-twentytwentytwo/query-default
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'         => __( 'List of posts with featured images in one column.', 'shambhala-twentytwentytwo' ),
	'categories'    => array( 'sh-query' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide"><!-- wp:query {"queryId":106,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template -->
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"align":"wide","fontSize":"x-large"} /-->

		<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"calc(1.75 * var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dblock-gap))"}}}} /-->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
		<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->

		<!-- wp:post-excerpt /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":""} -->
		<div class="wp-block-column"></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"16px"} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:separator {"opacity":"css","className":"alignwide is-style-wide"} -->
		<hr class="wp-block-separator has-css-opacity alignwide is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:spacer {"height":"16px"} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next {"fontSize":"small"} /-->
		<!-- /wp:query-pagination --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->
		<!-- wp:spacer {"height":"32px"} -->
		<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->',
);
