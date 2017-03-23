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
						$product_query = new WP_Query( array(
						'post_type' => 'product',
						'posts_per_page' => 999));

						if ( $product_query->have_posts() ) :
							while ( $product_query->have_posts() ) :
                $product_query->the_post();

					?>

				<li>

					<div class="product-image">
							<?php the_post_thumbnail(); ?>
					</div>

					<div class="product-overlay">

						<?php
							if( has_tag('coming-soon') ):
						?>
							<a>
								<span><?php the_title(); ?> Coming Soon</span>
							</a>
						<?php
							else:
						?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<span><?php the_title(); ?></span>
						</a>
					<?php endif; ?>
					</div>

				</li>

			<?php
					endwhile;
			endif; ?>

			</ul>


			<ul class="product-list" id="surface">
				<h3><?php echo category_description( get_category_by_slug('surface')->term_id ); ?></h3>
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						if( has_category('surface') ):

					?>

				<li>

					<div class="product-image">
							<?php the_post_thumbnail(); ?>
					</div>

					<div class="product-overlay">

						<?php
							if( has_tag('coming-soon') ):
						?>
							<a>
								<span><?php the_title(); ?> Coming Soon</span>
							</a>
						<?php
							else:
						?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<span><?php the_title(); ?></span>
						</a>
					<?php endif; ?>
					</div>

				</li>

			<?php
						endif;
					endwhile;

			endif; ?>

			</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
