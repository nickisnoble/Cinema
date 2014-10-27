<?php get_header(); // Load header.php ?>

	<?php if (have_posts()) : // Check for posts ?>
		<?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div class="container">
		
					<h1><?php the_title();?></h1>
					
					<?php the_content(); // Get the post body ?>

					<?php 
					  global $user_ID;

					  function validate_gravatar($email) {
							// Craft a potential url and test its headers
							$hash = md5(strtolower(trim($email)));
							$uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
							$headers = @get_headers($uri);
							if (!preg_match("|200|", $headers[0])) {
								$has_valid_avatar = FALSE;
							} else {
								$has_valid_avatar = TRUE;
							}
							return $has_valid_avatar;
						}

					  if ( get_the_author_meta('description',$user_ID) ) : // If a user has filled out their decscription show a bio on their entries 
					?>

					  <aside class="author-box">
					  	<?php if ( validate_gravatar( get_the_author_meta('user_email',$user_ID) ) ) : ?>
								<div class="author-photo">
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
								</div>
							<?php endif; ?>
							<p class="lead author-name">About <?php the_author(); ?></p>
							<p class="author-bio"><?php echo get_the_author_meta('description'); ?></p>
						</aside>

					<?php endif; ?>

				</div>
			</article>
		
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); // Load footer.php ?>