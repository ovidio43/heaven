<?php 
/**
 *Template name: template_distribuidores
 *
 */
get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="distribuidores"></div>
    <div class="wrapper_content">
    	<?php products_important(''); ?>
        <article class="single_product">
            <?php  
                    while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); 
                        $rows = get_field('group_distribuidores'); ?>
                        <ul class="slider_dres">
                            <?php 
                                  if ($rows) { 
                                       for ($i=0; $i<count($rows); $i++) {
                                            $image_attributes =wp_get_attachment_image_src( $rows[$i]['img_distribuidores'], "full" );   
                                            ?> 
                                            <li>
                                                <div class="content_dres">
                                                    <figure class="img_dres">
                                                        <div class="bg_image_dres" style="background-image:url('<?php echo $image_attributes[0]; ?>')"></div>
                                                    </figure>
                                                    <div class="context_fone">
                                                         <h5> Teléfono : </h5>
                                                         <span class="namber_dres"><?php  echo $rows[$i]['content_distribuidores']; ?></span>
                                                    </div>
                                                </div>
                                            </li>
                           <?php        }  
                                   }            
                            ?>
                        </ul>
            <?php   endwhile;
                    wp_reset_query(); ?>
        </article>             
    </div>
</section>
<?php get_footer(); ?>