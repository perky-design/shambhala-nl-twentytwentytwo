<?php
/**
 * Title: Section with text (variant 2)
 * Slug: shambhala-twentytwentytwo/section-image-with-text-2
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'      => __( 'Image with text 2.', 'shambhala-twentytwentytwo' ),
	'categories' => array( 'sh-section' ),
	'content'    => '<!-- wp:media-text {"mediaPosition":"right","mediaLink":"#","mediaType":"image","verticalAlignment":"center","imageFill":false,"backgroundColor":"secondary","textColor":"foreground","className":"is-style-default"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center is-style-default has-foreground-color has-secondary-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="https://raw.githubusercontent.com/perky-design/shambhala-nl-twentytwentytwo-images/main/ikebana-gong.jpg" alt="' . esc_html__( 'A meditation gong and an ikebana', 'shambhala-twentytwentytwo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"foreground","fontSize":"x-large"} -->
	<h2 class="has-foreground-color has-text-color has-x-large-font-size">' . esc_html__( 'Shambhala Kado', 'shambhala-twentytwentytwo' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"has-text-color"} -->
	<p class="has-text-color">' . esc_html__( 'The word Kado is Chinese, meaning “Way or Path of Flowers,” and is utilized to claim the Chinese cultural origin and lineage of the contemplative art and practice. Japan imported the way from China some 1600 years ago and eventually changed the practice\'s name to Ikebana, meaning “Natural Flowers.', 'shambhala-twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color">' . /* translators: %s is replaced with "link" */ sprintf( esc_html__( 'Kado classes and retreats are offered in Europe and the United States. For further information, please visit %s.', 'shambhala-twentytwentytwo' ), '<a href="http://kado.shambhala.info">kado.shambhala.info</a>' ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);

