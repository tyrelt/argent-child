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
						<h1>$300,000 in 6 months.</h1>
						<h2>But that’s not really the point.</h2>
						<p>Ipsum corrupti nisi quam atque provident libero quos assumenda blanditiis, laudantium consequuntur, dignissimos, rerum itaque modi aperiam unde. Beatae ab facere aut, dicta accusantium alias ut magni consequuntur! Beatae harum, sunt voluptas?</p>
						<a class="primaryBtn fullBtn" href="feature">Click here</a>
					</div>
				</div>
			</section>
			
			<!-- Trust marks -->
			<section class="trustmarks">
				<div class="contentContainer">
					<h1 class="title"><span>I’ve been featured in cool places</span></h1>
					<!-- <h2 class="sectionHeader"><?php the_field('clients_header'); ?></h2> -->
				    <ul>
				        <li><a href="<?php the_field('client1_link'); ?>" target="_blank"><img src="<?php the_field('client1_image'); ?>" alt="<?php the_field('client1_alt'); ?>"></a></li>
				        <li><a href="<?php the_field('client2_link'); ?>" target="_blank"><img src="<?php the_field('client2_image'); ?>" alt="<?php the_field('client2_alt'); ?>"></a></li>
				        <li><a href="<?php the_field('client3_link'); ?>" target="_blank"><img src="<?php the_field('client3_image'); ?>" alt="<?php the_field('client3_alt'); ?>"></a></li>
				    </ul>
				</div>
			</section>

			<!-- single column for benefits -->
			<section class="singleColBenefits">
				<div class="benefitsOverview" style="background-image: url('<?php the_field('benefits_overview'); ?>');">
					<h1>Here&rsquo;s another placeholder h1</h1>
					<h3>And a bit of descriptive text for underneath it</h3>
				</div>
				<div class="split">
					<div class="halfImage" style="background-image: url('<?php the_field('50_bg'); ?>');"></div>
					<div class="halfText">
						<div class="halfTextContent">
							<div class="halfTextContentInner">
								<h3>Lorem ipsum dolor sit amet.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contentContainer">
					<div class="twoColumn">
						<h3>Benefit one</h3>
						<p>Here's some text</p>
						<h3>Lorem ipsum dolor sit.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, porro!</p>
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
						<h3>Lorem ipsum dolor sit.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<span class="triangle"></span>
			</section>

			<!-- Blog preview section -->
			<section class="blogPreview">
				<div class="contentContainer">
					<h1 class="title"><span>Here's something to read</span></h1>
					<h3>So you're not a bum</h3>
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
						
								<?php the_content('<br><span class="primaryBtn postBtn">Keep reading</span>'); ?>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_query() ?>
					</div>
				</div>
				<div class="ctaOuter" style="background-image: url('<?php the_field('cta_bg'); ?>');">
					<div class="ctaInner">
						<p><a class="primaryBtn fullBtn" href="">See all the posts</a></p>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
