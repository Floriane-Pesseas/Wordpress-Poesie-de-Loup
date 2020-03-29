<section class="posts" id="posts">
        <article class="post" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <h2 class="post__title"><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
        
      </section>
