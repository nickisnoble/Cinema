    <?php get_header(); // Load header.php ?>

    <?php if (have_posts()) : // Check for posts ?>
      <?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

        <article class="frame">

          <div class="container">
        
            <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

            <?php if (has_post_thumbnail()) : // If the post has a thumbnail, show it: ?>
              <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
            <?php endif; ?>

            <?php the_content(); // Get the post body ?>

            <ul> <!-- Meta Content for post, add and remove as needed -->
              <li><?php the_category(''); // Lists the categories?></li>
            </ul>

          </div>

        </article>

      <?php endwhile; // There are no more posts to list ?>

    <?php else : // If no posts show up, tell the user ?>
      <h2>No posts found, go buy some popcorn and come back later :)</h2>
    <?php endif; ?>

    <?php get_footer(); // Load footer.php ?>