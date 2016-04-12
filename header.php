<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package argent
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div id="navContainer">
				<h1 id="navTitle"><a href="<?php get_site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<button class="menu-toggle" id="menu-button" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'argent' ); ?></button>
				<div class="mainMenu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
		
		<!-- Conditional statement so we don't show the branding on the homepage-->
		<?php if (!is_page_template('jk-homepage.php')) : ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		<?php endif?>
		<!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
