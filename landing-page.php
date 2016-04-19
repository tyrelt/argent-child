<?php
/**
 * Template Name: landing-page
 *
 * @package Argent
 */

get_header(); ?>

<!-- Start landing-page content -->
<div class="landing">
	<div class="lpHero">
		<div class="titleContainer">
			<img src="<?php the_field('logo') ?>" alt="Overthink Group">
			<div class="titleText">
				<h1>Overthink</h1>
				<h2>group</h2>
			</div>
		</div>
			<p><?php the_field('hero_tagline') ?></p>	
			<p><a class="lpBtn" href="<?php the_field('primary_cta_link') ?>"><?php the_field('primary_cta_text') ?></a></p>
		</div>
	</div>

	<div class="threeWide">
		<h2><?php the_field('three_wide_header') ?></h2>
		<ul>
			<li>
				<img src="<?php the_field('three_wide_1_img') ?>" alt="Overthink Group">
				<h3><?php the_field('three_wide_1') ?></h3>
			</li>
			<li>
				<img src="<?php the_field('three_wide_2_img') ?>" alt="Overthink Group">
				<h3><?php the_field('three_wide_2') ?></h3>
			</li>
			<li>
				<img src="<?php the_field('three_wide_3_img') ?>" alt="Overthink Group">
				<h3><?php the_field('three_wide_3') ?></h3>
			</li>
		</ul>
	</div>
	<div class="contactLanding">
		<div class="contactContainer" id="contact">
			<?php the_field('contact') ?>
		</div>
	</div>
	<div class="lpFooter">
		<p>&copy; <?php echo date("Y"); ?> Overthink Group</p>
	</div>
</div>
