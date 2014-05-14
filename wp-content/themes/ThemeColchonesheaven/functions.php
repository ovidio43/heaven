<?php
require_once(get_template_directory() . '/lib/post-type.php');
register_nav_menu('primary', __('Primary Menu'));
add_theme_support('post-thumbnails');
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function themecolchones_heaven_wp_title( $title, $sep ) {
    global $paged, $page;
    if ( is_feed() )
        return $title;
    $title .= get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'Colchones_heaven' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'themecolchones_heaven_wp_title', 10, 2 );

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
function products_important($selectid_post){ ?>
  <article class="product_home">
          <ul class="product_detail">
              <?php   $type = 'producto';
                      $args=array(
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' =>3
                      );                 
                      $myposts = new WP_Query( $args );
                      if ( $myposts->have_posts() ) : 
                            while ( $myposts->have_posts() ):$myposts->the_post();   
                                $featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumb-product',false); 
                                $cat_active="";
                                if((!empty($selectid_post))&&($selectid_post==get_the_ID())){
                                    $cat_active="select_product";
                                }
                                ?>
                                <li>
                                  <a class="ptable_detail" href="<?php the_permalink(); ?>" >
                                      <div class="log_product_background" style="background-image:url('<?php echo $featured[0]; ?>');"></div>
                                      <div class="title_product_hover <?php echo $cat_active; ?>" >
                                          <div class="log_product" style="background-image:url('<?php echo get_template_directory_uri()."/img/shield_1.png"; ?>');"></div>
                                          <span class="hover_fortitle"><?php the_title(); ?></span>
                                      </div>
                                  </a>  
                                </li>
              <?php         endwhile; 
                            wp_reset_query();
                            else: ?>
                            <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
              <?php   endif; ?>       
          </ul>
      </article>
<?php } 

function colchones_heaven_image_sizes() {
  //large(9999x656 crop no) for modal gallery, mid(9999x440 crop no) for image banners, thumb(300x300 crop yes) for minor callouts  will be on wp default
    add_image_size( 'callout-home',  300,206, true);  // callouts for home only
    add_image_size( 'callout-minor-news',  421,219, true); //callout for news is smaller
    add_image_size( 'callout-main', 600,600, true);  //for all site callouts except news
    add_image_size( 'thumb-product_gallery',  450,99999, false);  //music header is smaller 
    add_image_size( 'thumb-product',300,308, false);  //news thumbs
    add_image_size( 'slider-home',  1000,308, false);  // only for home, slider
    add_image_size( 'thumb-imagen-small',37,31, false);  //news thumbs
    add_image_size( 'gallery-imagen',481,370, false);  // only for home, slider
}
add_action( 'init', 'colchones_heaven_image_sizes', 0 );
?>



