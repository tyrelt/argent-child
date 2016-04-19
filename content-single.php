<?php
/**
 * @package Argent
 */
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
	<!-- 	<div class="categorization">
			<p><?php the_category(); ?></p>
			<p><?php the_tags(); ?></p>
		</div> -->

		<header>		
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</header>
		<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail('large', array( 'class' => "postPreviewThumb")); ?>		
		<?php } ?>
		<div class="postContent">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</div>


	