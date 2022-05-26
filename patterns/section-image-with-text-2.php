<?php
/**
 * Description section with text
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'      => __( 'Image with text 2.', 'shambhala-twentytwentytwo' ),
	'categories' => array( 'sh-section' ),
	'content'    => '<!-- wp:media-text {"mediaLink":"#","mediaType":"image","verticalAlignment":"center","imageFill":false,"backgroundColor":"accent-color","textColor":"background","className":"is-style-default"} -->
		<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-default has-background-color has-accent-color-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/ikebana-gong.jpg' ) . '" alt="' . esc_html__( 'A meditation gong and an ikebana', 'shambhala-twentytwentytwo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
		<h2 class="has-background-color has-text-color">' . esc_html__( 'Shambhala Kado', 'shambhala-twentytwentytwo' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"has-text-color"} -->
		<p class="has-text-color">' . esc_html__( 'The word Kado is Chinese, meaning “Way or Path of Flowers,” and is utilized to claim the Chinese cultural origin and lineage of the contemplative art and practice. Japan imported the way from China some 1600 years ago and eventually changed the practice\'s name to Ikebana, meaning “Natural Flowers.', 'shambhala-twentytwentytwo' ) . '”</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"background"} -->
		<p class="has-background-color has-text-color">' . /* translators: %s is replaced with "link" */ sprintf( esc_html__( 'Kado classes and retreats are offered in Europe and the United States. For further information, please visit %s.', 'shambhala-twentytwentytwo' ), '<a href="http://kado.shambhala.info">kado.shambhala.info</a>' ) . '</p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:media-text -->
		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->',
);
