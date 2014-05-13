<?php 
session_start();
/**
 *Template name: template_noticias
 *
 */
get_header(); 

?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="noticias"></div>
    <div class="wrapper_content">
        <?php products_important(''); ?>
        <article class="single_product">
            <div class="block_product_left news_long">
                <span class="log_section_news"></span>
            </div>
            <div class="block_product_right post_news_dim">
                  <ul class="post_news">
                     <?php $social_face_obj = new ProdFacebook("YusufCatStevens",5);
                           $face=$social_face_obj->get_data();
                           for ($i=0; $i<count($face); $i++) { ?>
                                <li>
                                    <?php if ( !empty($face[$i]['picture']) ) { ?>
                                              <figure class="news_img">
                                                   <img src="<?php echo $face[$i]['picture']; ?> "/>
                                              </figure>
                                    <?php  } ?>
                                    <p><?php echo $face[$i]['post_text']; ?></p>
                                </li>
                      <?php } ?>
                  </ul>
              </div>
          </article>              
    </div>
</section>
<?php get_footer(); ?>