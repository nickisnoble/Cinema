    <?php get_header(); // Load header.php ?>
    <div class="cinema-list">
    <?php if (have_posts()) : // Check for posts ?>
      <?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

        <article  id="post-<?php the_ID(); ?>" <?php if (has_post_thumbnail()) : // If the post has a thumbnail, add stuff ?>
                    <?php $thumb_id = get_post_thumbnail_id(); 
                          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                          $thumb_url = $thumb_url_array[0]; ?>
                    <?php post_class('frame'); ?>
                    style="background-image: url('<?php echo $thumb_url ?>');">
                    <div class="frame-darken"></div>
                  <?php else : // otherwise just close class attribute quotes: ?><?php post_class(); ?>>
                  <?php endif; // close tag ?>

          <div class="container">
        
            <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
            
            <?php if (!(has_post_thumbnail())) : ?>
              <?php the_content(); // Get the post body ?>
            <?php endif; ?> 

          </div>

        </article>

      <?php endwhile; // There are no more posts to list ?>

    <?php else : // If no posts show up, tell the user ?>
      <h2>No posts found, go get some popcorn and come back later :)</h2>
    <?php endif; ?>
    </div>
    <?php get_footer(); // Load footer.php ?>