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

						<?php
							if( has_tag('coming-soon') ):
						?>
							<a>
								<span><?php the_title(); ?> Coming Soon</span>
							</a>
						<?php
							else() :
						?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<span><?php the_title(); ?></span>
						</a>
					<?php endif; ?>
					</div>

				</li>

						<?php endwhile;

			endif; ?>

			</ul>

			<div id="container">
	<div id="content" role="main">

	<?php
	// get all the categories from the database
	$cats = get_categories();

		// loop through the categries
		foreach ($cats as $cat) {
			// setup the cateogory ID
			$cat_id= $cat->term_id;
			// Make a header for the cateogry
			echo "<h2>".$cat->name."</h2>";
			// create a custom wordpress query
			query_posts("cat=$cat_id&posts_per_page=9999");
			// start the wordpress loop!
			if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php // create our link now that the post is setup ?>
				<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
				<?php echo '<hr/>'; ?>

			<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
		<?php } // done the foreach statement ?>

	</div><!-- #content -->
</div><!-- #container -->


			<ul class="product-list" id="surface">

				<h3><?php echo category_description( get_category_by_slug('surface')->term_id ); ?></h3>

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
