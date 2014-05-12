<?php 
/**
 *Template name: template_contactos
 *
 */
get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="contactos"></div>
    <div class="wrapper_content">
        <article class="single_product">
            <div class="block_product_left">
                <?php 
			 		while (have_posts()) : the_post(); 
	                    the_content();
	                endwhile;
	            	wp_reset_query(); 
		        ?> 
            </div>
            <div class="block_product_right long_contact_mapa">
                 <iframe width="405" height="164" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.bo/maps/ms?ie=UTF8&amp;hl=es&amp;oe=UTF8&amp;msa=0&amp;msid=218290147162574989183.0004b0ad97a11570af5da&amp;t=m&amp;vpsrc=6&amp;ll=-17.793416,-63.180656&amp;spn=0.003351,0.008669&amp;z=16&amp;iwloc=0004b0adacab05fe747cf&amp;output=embed"></iframe>
            </div>
        </article>
        <article class="single_product">
        	<form action="<?php echo get_template_directory_uri()."/lib/send_mail.php"; ?>" method="post" id="form_1" name="form_1">
	            <div class="block_product_left long_contact">
	            	<div class="group_imput">
	            		<label>NOMBRE (*)</label>
	            		<input type="text" name="nombre">
	            	</div>
	            	<div class="group_imput">
	            		<label>APELLIDO (*)</label>
	            		<input type="text" name="apellido">
	            	</div>
	            	<div class="group_imput">
	            		<label>E-MAIL (*)</label>
	            		<input type="text" name="mail">
	            	</div>
	            	<div class="group_imput">
	            		<label>TELEFONO (*)</label>
	            		<input type="text" name="telefono">
	            	</div>
	            </div>
	            <div class="block_product_right long_contact_mapa">
	            	<div class="group_imput">
	            		<label class="sms">MENSAJE (*)</label>
	            		<textarea type="text" name="mensaje" class="txt_area"></textarea>
	            	</div>
	            	<div id="loading_sms" class="group_imput send_ajax">
	            		<input type="submit" value="Enviar" class="btn_enviar">
	            	</div>
	            </div>
        	</form>
        </article>              
    </div>
</section>
<?php get_footer(); ?>