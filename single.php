<?php get_header(); // Load header.php ?>

	<?php if (have_posts()) : // Check for posts ?>
		<?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div class="container">
		
					<h1><?php the_title();?></h1>

					<?php if (has_post_thumbnail()) : // If the post has a thumbnail, show it: ?>
						<br>
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
					<?php endif; ?>

					
					<div class="two-thirds">
						<?php the_content(); // Get the post body ?>
					</div>

					<div class="one-third pull-right">
						<?php // Get Author info ?>
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
						<h3><?php the_author(); ?></h3>
						<p><?php get_the_author_meta('description'); ?></p>
					</div>

				</div>
			</article>
		
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); // Load footer.php ?>