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

				<div class="grid-1-col col-float-left featured-image-container page-contact" style="margin-left: 0;">
					<header class="entry-header">
						<?php the_title( '<h3 class="entry-title" style="margin-top: 0;">', '</h3>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div>

				<div class="grid-3-col col-float-right featured-image-container no-margin-mobile" style="margin-right: 0;">
					<?php if ( has_post_thumbnail() ) {
	    			the_post_thumbnail( '3-col-horizontal' );
					} ?>
					<div class="image-description">
						<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
					</div>
				</div>


			</article><!-- #post-## -->

		<?php endwhile; endif; ?>

		</main><!-- #main -->

	<?php get_footer(); ?>
