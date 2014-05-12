<?php get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="noticia"></div>
    <div class="wrapper_content">
        <?php products_important(''); ?>
        <article class="single_product">
              <div class="block_product_left news_long">
                  <span class="log_section_news"></span>
              </div>
              <div class="block_product_right post_news_dim">
                    <ul class="post_news">
                        <?php 
                              $type = 'noticia';
                              $args=array(
                                  'post_type' => $type,
                                  'post_status' => 'publish',
                                  'orderby' => 'date',
                                  'order' => 'DESC'
                              );                 
                              $myposts = new WP_Query( $args );
                              if ( $myposts->have_posts() ) : 
                                    while ( have_posts() ) : the_post(); 
                                        $featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full',false); ?>
                                        <li>
                                            <figure class="news_img">
                                                <img src="<?php echo $featured[0]; ?>"/>
                                            </figure>
                                            <?php the_excerpt(); ?>
                                        </li>
                         <?php      endwhile; 
                                    wp_reset_query();
                                    else: ?>
                                    <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </ul>
                </div>
          </article>              
    </div>
</section>
<?php get_footer(); ?>