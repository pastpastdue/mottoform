<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mottoform
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main site-margin" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php

				$image_size = get_field('featured_image_size');
				$new_featured_image = get_field('select_featured_image');

				if( empty($new_featured_image) ):

					if ( has_post_thumbnail() ):
							the_post_thumbnail( $image_size );
					endif;

				elseif( !empty($new_featured_image) ) :
					echo '<img src="' . $new_featured_image['sizes'][$image_size] . '" alt="' . $new_featured_image['alt'] . '" />';
				endif;


			?>
			<header class="entry-header">
				<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->

	<?php endwhile; endif; ?>

	</main><!-- #main -->

	<?php // open the WordPress loop

	// are there any rows within within our flexible content?
	if( have_rows('product_page_content') ): ?>

	<div class="entry-product-flex">

		<?php while ( have_rows('product_page_content') ) : the_row();

		if( get_row_layout() == '1_column_image' )
			get_template_part('partials/1_column_image', 'single');

		if( get_row_layout() == '2_column_image' )
			get_template_part('partials/2_column_image');

		if( get_row_layout() == '3_column_image' )
			get_template_part('partials/3_column_image');

		if( get_row_layout() == '4_column_image' )
			get_template_part('partials/4_column_image');

		if( get_row_layout() == 'text_field' )
			get_template_part('partials/text_field', 'text_field');

		endwhile; // close the loop of flexible content ?>

	</div>

	<?php endif; // close flexible content conditional ?>

<?php get_footer(); ?>
