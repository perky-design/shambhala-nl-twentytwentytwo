<?php
/**
 * Title: Header with site title, navigation
 * Slug: shambhala-twentytwentytwo/header-default
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'         => __( 'Shambhala standard site header', 'shambhala-twentytwentytwo' ),
	'categories'    => array( 'sh-header' ),
	'blockTypes'    => array( 'core/template-part/header' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dmini, 1.25rem)","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dmini, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--mini, 1.25rem);padding-bottom:var(--wp--custom--spacing--mini, 1.25rem)"><!-- wp:site-logo {"width":305} /-->

<!-- wp:navigation {"ref":1838,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
