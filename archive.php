<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Argent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="hero">
				<div class="contentContainer">
					<div class="page-header">
						<?php
							the_archive_title( '<h1>', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</div>
				</div>
			</header>
			<section class="blogPreview">
				<div class="contentContainer">
					<?php if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) : ?>

						<div id="portfolio-wrapper">

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'portfolio' ); ?>

							<?php endwhile; ?>

						</div><!-- .portfolio-wrapper -->

					<?php else : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>

						<?php endwhile; ?>

					<?php endif; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</section>
		</main><!-- #main -->
	<!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
