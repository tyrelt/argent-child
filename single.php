<?php
/**
 * The template for displaying all single posts.
 *
 * @package Argent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="hero" style="background-image: url('<?php the_field('hero_bg'); ?>');">
				<div class="contentContainer">
					<div>
						<?php the_field('hero_text', get_option('page_for_posts')) ?>
					</div>
				</div>
			</section>
			<section class="blogPreview">
				<div class="contentContainer">
					<!-- <h1 class="title"><span><?php the_field('postpreview_header') ?></span></h1>
					<?php the_field('postpreview_secondary_header')?>					 -->
					<article class="postContainer">
						<?php if ( have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', 'single' ); ?>
							<?php endwhile; ?>
							<?php the_posts_navigation(); ?>
							<?php else : ?>
								<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
						<?php wp_reset_query() ?>
					</article>				
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
