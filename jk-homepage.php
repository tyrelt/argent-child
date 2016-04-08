<?php
/**
 * Template Name: jk-homepage
 *
 * @package Argent
 */

get_header(); ?>

<!-- Start homepage content -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<!-- Hero section -->
			<section class="hero" style="background-image: url('<?php the_field('hero_bg'); ?>');">
				<div class="contentContainer">
					<div class="heroText">
						<?php the_field('hero_text') ?>
						<a class="primaryBtn fullBtn" href="<?php the_field('hero_button_link') ?>"><?php the_field('hero_button_text') ?></a>
					</div>
				</div>
			</section>
			
			<!-- Trust marks -->
			<section class="trustmarks">
				<div class="contentContainer">
					<h1 class="title"><span><?php the_field('trustmarks_header') ?></span></h1>
				    <ul>
				        <li><a href="<?php the_field('image1_link'); ?>" target="_blank"><img src="<?php the_field('image1'); ?>" alt="<?php the_field('image1_alt'); ?>"></a></li>
				        <li><a href="<?php the_field('image2_link'); ?>" target="_blank"><img src="<?php the_field('image2'); ?>" alt="<?php the_field('image2_alt'); ?>"></a></li>
				        <li><a href="<?php the_field('image3_link'); ?>" target="_blank"><img src="<?php the_field('image3'); ?>" alt="<?php the_field('image3_alt'); ?>"></a></li>
				    </ul>
				</div>
			</section>

			<!-- single column for benefits -->
			<section class="singleColBenefits">
				<div class="benefitsOverview" style="background-image: url('<?php the_field('benefits_bg'); ?>');">
					<?php the_field('benefits_header') ?>
				</div>
				<div class="split">
					<div class="halfImage" style="background-image: url('<?php the_field('half_bg'); ?>');"></div>
					<div class="halfText">
						<div class="halfTextContent">
							<div class="halfTextContentInner">
								<?php the_field('half_text') ?>
							</div>
						</div>
					</div>
				</div>
				<div class="contentContainer">
					<div class="twoColumn">
						<?php the_field('benefits') ?>
					</div>
				</div>
				<span class="triangle"></span>
			</section>

			<!-- Blog preview section -->
			<section class="blogPreview">
				<div class="contentContainer">
					<h1 class="title"><span><?php the_field('postpreview_header') ?></span></h1>
					<?php the_field('postpreview_secondary_header')?>					
					<article class="postContainer">
								
						<?php
							global $post;
							$myposts = get_posts('numberposts=3');
							foreach($myposts as $post) :
								setup_postdata($post);
						?>
							<div class="post">
									<div class="postPreviewMeta">
									<?php 
										$author = get_the_author();
										echo get_avatar( get_the_author_meta( 'ID' ), 60, null, $author . '&rsquo;s author photo', array( 'class' => "authorPhoto")); 
									?>
									<ul class="postMetaDetails">
									 	<li><h4><?php the_author() ?></h4></li>
									 	<li><h5><?php the_time('F j, Y'); ?></h5></li>
									 </ul>	
								 </div>		

								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php the_post_thumbnail('large', array( 'class' => "postPreviewThumb")); ?>		
						
								<?php the_content('<br><span class="primaryBtn postBtn">Continue reading</span>'); ?>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_query() ?>
					</div>
				</div>
				<div class="ctaOuter" style="background-image: url('<?php the_field('cta_bg'); ?>');">
					<div class="ctaInner">
						<p><a class="primaryBtn fullBtn" href="<?php the_field('full_button_link') ?>"><?php the_field('full_button') ?></a></p>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
