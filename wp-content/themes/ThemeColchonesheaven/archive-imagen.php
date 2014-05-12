<?php 
/**
 *Template name: template_galeria
 *
 */
get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="galeria"></div>
    <div class="wrapper_content">
        <?php products_important(''); ?>
        <article class="single_product">
            <div id="gallery" class="ad-gallery">
                <div class="ad-image-wrapper"></div>
                <div class="ad-controls"></div>
                <div class="ad-nav">
                    <div class="ad-thumbs">
                        <ul class="ad-thumb-list">
                            <li>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/img_one_gallery.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/small_gallery_one.jpg "/>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/img_two_gallery.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/small_galley_two.jpg"/>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/img_three_gallery.jpg ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/small_gallery_three.jpg"/>
                                </a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </article>           
    </div>
</section>
<?php get_footer(); ?>