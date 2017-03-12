<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mottoform
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<ul class="product-list" id="product">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>

				<li>
					<div class="product-image">
							<?php the_post_thumbnail(); ?>
					</div>
					<div class="product-overlay">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<span><?php the_title(); ?></span>
						</a>
					</div>
				</li>

						<?php endwhile;

			endif; ?>

			</ul>


			<ul class="product-list" id="surface">

				<h3>Surface: Textile and Wallpaper</h3>

				<?php
				$surface_args = array( 'post_type' => 'surface', 'posts_per_page' => 9999 );
				$surface_loop = new WP_Query( $surface_args );
				while ( $surface_loop->have_posts() ) : $surface_loop->the_post(); ?>


				<li>
					<div class="product-image">
							<?php the_post_thumbnail(); ?>
					</div>
					<div class="product-overlay">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<span><?php the_title(); ?></span>
						</a>
					</div>
				</li>

				<?php endwhile; ?>

			</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
 ?>
