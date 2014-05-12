<?php get_header(); ?>
<section id="site_content" class="wrapper">
  	<div id="id_menu_active" class="producto"></div>
  	<div class="wrapper_content">
        <?php while ( have_posts() ) : the_post(); 
          			$featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumb-product_gallery',false); 
                products_important(get_the_ID()); ?>
  			        <article class="single_product">
    			        	<div class="block_product_left">
    			        	    <?php the_content(); ?>
    			        	</div>
    			        	<div class="block_product_right">
      			        		<?php $images = get_field('product_gallery');
                              if( $images ) { ?>
                               	  <ul class="slider_product">
                                      <?php foreach( $images as $image ): ?>
                                            <li>
        		        				                    <img class="slider_img" src="<?php echo $image['sizes']['thumb-product_gallery']; ?>"/>
        		        		                    <li>
                                      <?php endforeach; ?>
                                    </ul>
                        <?php } else { ?>
                                  <img  class="slider_img" src="<?php echo $featured[0]; ?>"/>
                        <?php }  ?>
    			        	</div>
  			        </article>
	      <?php endwhile; ?>
  	</div>
</section>
<?php get_footer(); ?>