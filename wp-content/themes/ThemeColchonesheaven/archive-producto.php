 <?php
      $type = 'producto';
      $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' =>1
      );                 
      $myposts = new WP_Query( $args );
      if ( $myposts->have_posts() ) : 
            while ( $myposts->have_posts() ):$myposts->the_post();   ?>
				        <meta http-equiv="refresh" content="0;url=<?php the_permalink();?>">
<?php       endwhile; 
            wp_reset_query();
            else: ?>
                <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
<?php endif; ?>