<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package brotakus
 */

get_header(); ?>

	<div id="page-primary" class="site-primary">
		<div class="grid-container">
      <div class="grid-x grid-padding-x">

				<main id="page-main" class="site-main small-12 large-8 cell" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #page-main -->
				<?php get_sidebar(); ?>

			</div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
	</div><!-- #page-primary -->

<?php get_footer(); ?>
