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

			<ul class="product-list">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				if ( is_front_page() ) : ?>


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


					<?php
					endif;
			endwhile;

			the_posts_navigation();

		endif; ?>

		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
