<?php
/**
 * Landing page with welcome text and sections.
 *
 * @package Shambhala Twenty Twenty-Two
 */

return array(
	'title'      => __( 'Landing page with welcome text.', 'shambhala-twentytwentytwo' ),
	'categories' => array( 'sh-page' ),
	'content'    => '<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1","fontSize":"clamp(2rem, 8.7vw - 1.5rem, 5rem)"}},"className":"width-full-size"} -->
		<h1 class="has-text-align-center width-full-size" style="font-size:clamp(2rem, 8.7vw - 1.5rem, 5rem);line-height:1">' . esc_html__( 'The Shambhala Path', 'shambhala-twentytwentytwo' ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.25"}},"fontSize":"max-60"} -->
		<p class="has-text-align-center has-max-60-font-size" style="line-height:1.25">' . esc_html__( 'The Path of Practice and Study', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p>' . esc_html__( 'The path begins and continues with meditation. Students are introduced to Buddhist and Shambhala teachings in the context of an ongoing meditation practice. Shambhala Meditation Centres around the world offer a broad and carefully thought-out range of classes, meditation programs and community activities. At our residential practice and retreat centres, students can deepen their meditation through longer programs, and engage in periods of intensive study.', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p>' . esc_html__( 'The path consists of a series of classes and retreats designed to stabilize and strengthen our meditation practice, and to clarify our understanding of the teachings. These courses offer entry into the wisdom tradition of Shambhala as well as the classical teachings of Tibetan Buddhism. A careful sequence of group practice programs at residential centres ensure the unfolding of deeper training, including week-long meditation retreats as well as specific Assemblies that introduce more advanced practices.', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:media-text {"mediaPosition":"right","mediaId":2812,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/meditatators.jpg' ) . '","mediaType":"image","mediaSizeSlug":"full","verticalAlignment":"center","imageFill":false,"backgroundColor":"foreground","textColor":"background","className":"is-style-default"} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center is-style-default has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/meditatators.jpg' ) . '" alt="' . esc_html__( 'Meditators', 'shambhala-twentytwentytwo' ) . '" class="wp-image-2812 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background","fontSize":"x-large"} -->
		<h2 class="has-background-color has-text-color has-x-large-font-size">' . esc_html__( 'Way of Shambhala', 'shambhala-twentytwentytwo' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"has-text-color"} -->
		<p class="has-text-color">' . esc_html__( 'Way of Shambhala is a complete introduction to the foundations of Shambhala Buddhism. This series of weekend contemplative workshops and weeknight classes provides an experiential overview of meditation practice, wisdom teachings, contemplative arts, and physical disciplines rooted in the ancient traditions of Shambhala and Tibetan Buddhism. This program is open to everyone and prepares students who wish to develop further their practice and study at Enlightened Society Assembly and Warrior Assembly.', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:media-text -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"secondary","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"has-x-large-font-size"} -->
		<div class="wp-block-group alignwide has-x-large-font-size"><!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"300","fontSize":"34px"}}} -->
		<p class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:300;line-height:1.25">' . esc_html__( 'Shambhala is based on trust in human dignity. We offer a path of meditation practice and contemplative arts oriented towards modern life. Our communities around the world cultivate kindness, bravery, and genuine dialogue.  Our vision is to inspire compassionate, sustainable, and just human societies.', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:media-text {"mediaId":2819,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/ashe-on-paper.jpg' ) . '","mediaType":"image","mediaSizeSlug":"full","verticalAlignment":"center","imageFill":false,"backgroundColor":"foreground","textColor":"background","className":"is-style-default"} -->
		<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-default has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/ashe-on-paper.jpg' ) . '" alt="' . esc_html__( 'Ashe', 'shambhala-twentytwentytwo' ) . '" class="wp-image-2819 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background","fontSize":"x-large"} -->
		<h2 class="has-background-color has-text-color has-x-large-font-size">' . esc_html__( 'Shambhala Training: Heart of Warriorship', 'shambhala-twentytwentytwo' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'The Shambhala Training Heart of Warriorship program (Levels I-V) introduces teachings on “warriorship” that cultivate genuineness, confidence, humor, and dignity in daily life.', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'When taken as a component of the integrated Way of Shambhala curriculum, this course of study prepares students who wish to develop their practice and study further for Enlightened Society Assembly and the Shambhala Sacred Path program. Shambhala Training Levels I-V, or The Heart of Warriorship, may also be practiced as a series of independent workshops.', 'shambhala-twentytwentytwo' ) . '</p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:media-text -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
<!-- wp:media-text {"mediaLink":"#","mediaType":"image","verticalAlignment":"center","imageFill":false,"backgroundColor":"accent-color","textColor":"background","className":"is-style-default"} -->
		<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-default has-background-color has-accent-color-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/ikebana-gong.jpg' ) . '" alt="' . esc_html__( 'A meditation gong and an ikebana', 'shambhala-twentytwentytwo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
		<h2 class="has-background-color has-text-color">' . esc_html__( 'Shambhala Kado', 'shambhala-twentytwentytwo' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"has-text-color"} -->
		<p class="has-text-color">' . esc_html__( 'The word Kado is Chinese, meaning “Way or Path of Flowers,” and is utilized to claim the Chinese cultural origin and lineage of the contemplative art and practice. Japan imported the way from China some 1600 years ago and eventually changed the practice\'s name to Ikebana, meaning “Natural Flowers.', 'shambhala-twentytwentytwo' ) . '.”</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"background"} -->
		<p class="has-background-color has-text-color">' . /* translators: %s is replaced with "link" */ sprintf( esc_html__( 'Kado classes and retreats are offered in Europe and the United States. For further information, please visit %s.', 'shambhala-twentytwentytwo' ), '<a href="http://kado.shambhala.info">kado.shambhala.info</a>' ) . '</p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:media-text -->
		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->',
);
