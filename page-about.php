<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mottoform
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-margin" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="featured-image-container">
					<?php if ( has_post_thumbnail() ) {
	    			the_post_thumbnail( '2-col-square' );
					} ?>
					<header class="entry-header">
						<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div>
			</article><!-- #post-## -->

		<?php endwhile; endif; ?>

		</main><!-- #main -->

		<main id="press">
			<ul class="press-list">
				<h3>News and Press</h3>

				<?php
				$press_args = array( 'post_type' => 'press', 'posts_per_page' => 999 );
				$press_loop = new WP_Query( $press_args );
				while ( $press_loop->have_posts() ) : $press_loop->the_post(); ?>
				<li<?php if( has_tag('press-wide') ):	?> class="press-wide"<?php endif; ?>>
					<?php if( has_tag('press-wide') ):	?>
					<div class="press-image">
							<?php the_post_thumbnail( '2-col-small' ); ?>
					</div>
					<?php else: ?>
					<div class="press-image">
							<?php the_post_thumbnail( '1-col' ); ?>
					</div>
					<?php endif; ?>
					<div class="press-description">
							<span><?php the_content(); ?></span>
					</div>
				</li>

				<?php endwhile; ?>
			</ul>
		</main>

		<main id="recognition">
			<div class="site-margin">
				<h3>Recognition</h3>
			</div>
			<div class="product-flex-list">
				<div class="grid-2-col col-float-left">
					<div class="page-additional-text">
						<h4>Awards</h4>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_field('awards'); ?>
						<?php endwhile; ?>
					</div>
					<div class="page-additional-text">
						<h4 class="h4-spacer">Grants</h4>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_field('grants'); ?>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="grid-2-col col-float-right">
					<div class="page-additional-text">
						<h4>SELECT DESIGNS/PROJECTS</h4>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_field('select_designs'); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</main>
	</div><!-- #primary -->

	<?php get_footer(); ?>
