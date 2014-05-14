<?php 
get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="imagen"></div>
    <div class="wrapper_content">
        <?php products_important(''); ?>
        <article class="single_product">
            <div class="wrapp_active_post">
                <a href="/demo/imagen/" class="active_post">Imagenes</a>
                <a href="/demo/video/" class="no_active_post">Videos</a>
            </div>
            <div id="gallery" class="ad-gallery">
                <div class="ad-image-wrapper"></div>
                <div class="ad-controls"></div>
                <div class="ad-nav">
                    <div class="ad-thumbs">
                        <ul class="ad-thumb-list">
                            <?php
                                $type = 'imagen';
                                $args=array(
                                    'post_type' => $type,
                                    'post_status' => 'publish',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'posts_per_page'=>1
                                );                 
                                 $myposts = new WP_Query( $args );
                                 if ( $myposts->have_posts() ) : 
                                      while ( $myposts->have_posts() ):$myposts->the_post();   
                                            $images = get_field('group_of_img');
                                            if( $images ):
                                                   foreach( $images as $image ): 
                                                       $small_img= $image['sizes']['thumb-imagen-small'];
                                                       $img_present= $image['sizes']['gallery-imagen']; ?>
                                                       <li>
                                                            <a href="<?php echo $img_present; ?>">
                                                                <img src="<?php echo $small_img; ?>" width="37" height="31"/>
                                                            </a>
                                                        </li>
                            <?php                   endforeach; 
                                             endif; 
                                      endwhile; 
                                      wp_reset_query();
                                      else: ?>
                                      <p><?php _e('Sorry, no ofert matched your criteria.'); ?></p>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </article>           
    </div>
</section>
<?php get_footer(); ?>