<?php
/**
 * Welcome section with text
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'         => __( 'Welcome section with text.', 'shambhala-twentytwentytwo' ),
	'categories'    => array( 'sh-section' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1","textTransform":"uppercase"}},"fontSize":"max-240"} -->
		<h2 class="has-text-align-center has-max-240-font-size" id="chicago" style="line-height:1;text-transform:uppercase">' . esc_html__( 'New York', 'shambhala-twentytwentytwo' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"max-60"} -->
		<p class="has-text-align-center has-max-60-font-size" style="line-height:1.25">' . esc_html__( 'Creating Enlighted Society', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->',
);
