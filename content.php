<?php
/**
 * @package Argent
 */
?>

		<article class="postContainer" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				<header>		
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail('large', array( 'class' => "postPreviewThumb")); ?>		
				<?php } ?>
				<div class="postContent">
					<?php the_content('<br><span class="primaryBtn postBtn">Continue reading</span>'); ?>
				</div>
			</div>
		</article>
	