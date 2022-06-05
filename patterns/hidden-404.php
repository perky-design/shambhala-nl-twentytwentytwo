<?php
/**
 * 404 error content
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'    => __( '404 error content.', 'shambhala-twentytwentytwo' ),
	'inserter' => false,
	'content'  => '
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"layout":{"inherit":false}} -->
<div class="wp-block-column">

<h1 class="alignwide wp-block-post-title">' . esc_html__( 'Page not found', 'shambhala-twentytwentytwo' ) . '</h1>

<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator wp-block-separator-after-title alignwide is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:column --></div>

<!-- wp:spacer {"height":32} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Oops, we can’t seem to find the page you’re looking for.', 'shambhala-twentytwentytwo' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>' . esc_html__( 'Error code: 404 Page not found.', 'shambhala-twentytwentytwo' ) . '</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Please use the links in the menu or the search form below.', 'shambhala-twentytwentytwo' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":32} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:group -->

<!-- wp:search {"label":"' . esc_html_x( 'Search', 'label', 'shambhala-twentytwentytwo' ) . '","showLabel":true,"width":90,"widthUnit":"%","buttonText":"' . esc_html__( 'Search', 'shambhala-twentytwentytwo' ) . '","buttonUseIcon":true,"align":"alignwide"} /-->

<!-- wp:spacer {"height":32} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
',
);
