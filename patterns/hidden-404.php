<?php
/**
 * 404 error content
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'    => __( '404 error content.', 'shambhala-twentytwentytwo' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1>' . esc_html__( 'Not found, error 404', 'shambhala-twentytwentytwo' ) . '</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html__( 'Oops, the page you are looking for does not exist or is no longer available. Everything is still awesome. Just use the search form.', 'shambhala-twentytwentytwo' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:search {"width":75,"widthUnit":"%","showLabel":false,"buttonText":"Search"} /-->',
);
