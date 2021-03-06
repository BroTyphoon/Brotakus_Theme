<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package brotakus
 */

get_header(); ?>

	<div id="archive-primary" class="site-primary">
		<div class="grid-container">
      <div class="grid-x grid-padding-x">

				<main id="archive-main" class="site-main small-12 large-8 cell" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php numeric_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #archive-main -->
				<?php get_sidebar(); ?>

			</div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
	</div><!-- #archive-primary -->

<?php get_footer(); ?>
