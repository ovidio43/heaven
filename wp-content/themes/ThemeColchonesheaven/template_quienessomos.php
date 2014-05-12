<?php 
/**
 *Template name: template_quienessomos
 *
 */
get_header(); ?>
<section id="site_content" class="wrapper">
	<div id="id_menu_active" class="quienes-somos"></div>
	<div class="wrapper_content">
		<?php 	products_important(''); 
		 		while (have_posts()) : the_post(); 
                      the_content();
                endwhile;
            	wp_reset_query(); 
        ?> 
	</div>
</section>
<?php get_footer(); ?>