<?php get_header(); // Load header.php ?>

	<?php if (have_posts()) : // Check for posts ?>
		<?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div class="container">
		
					<h1><?php the_title();?></h1>

					<?php if (has_post_thumbnail()) : // If the post has a thumbnail, show it: ?>
						<br><!-- correct spacing for image -->
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
					<?php endif; ?>
					
					<div class="two-thirds pull-right">
						<?php the_content(); // Get the post body ?>
					</div>

					<aside class="one-third">

						<div class="author-box">
							<?php // Get Author info ?>
							<div class="author-photo">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
							</div>
							<p class="lead author-name"><?php the_author(); ?></p>
							<p class="author-bio"><?php get_the_author_meta('description'); ?></p>
						</div>

					</aside>

				</div>
			</article>
		
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); // Load footer.php ?>