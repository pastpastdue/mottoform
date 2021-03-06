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
				<?php if ( has_post_thumbnail() ) {
    			the_post_thumbnail( '2-col-square' );
				} ?>
				<header class="entry-header">
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		<?php endwhile; endif; ?>

		</main><!-- #main -->

	<?php get_footer(); ?>
