<?php get_header(); ?>
<section id="site_content" class="wrapper">
	<div id="id_menu_active" class="home"></div>
	<div class="wrapper_content">
		<article class="banner_general">
			<ul class="banner_home">
				<?php
                	$type = 'banner_principal';
                    $args=array(
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );                 
                     $myposts = new WP_Query( $args );
                     if ( $myposts->have_posts() ) : 
                          while ( $myposts->have_posts() ):$myposts->the_post();   
                          		$featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'slider-home',false); ?>
								<li>
									 <div class="bg_image_slide" style="background-image:url('<?php echo $featured[0] ; ?>');"></div>
									 <p class="cbanner_hover center_vertical">Bienvenido a&nbsp;HEAVEN, la marca de colchones que resume la tecnología, calidad, confort, durabilidad y bienestar; en cada una de sus piezas. Lo invitamos a que conozca colchones HEAVEN, vive mejor.</p>
								</li>
				<?php 	  endwhile; 
                   		  wp_reset_query();
                   		  else: ?>
                   		  <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
            	<?php endif; ?>
			</ul>
		</article>
		<?php products_important(''); ?>
		<article class="product_home">
			<ul class="product_detail">
				<li class="ofert_product">
					<div class="fb-like-box" data-href="https://www.facebook.com/Colchones.Heaven.Bolivia" data-width="260" data-height="260" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true">
						<iframe name="f13026659c" width="260px" height="260px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FdgdTycPTSRj.js%3Fversion%3D41%23cb%3Df1abb7b0d8%26domain%3Dwww.colchonesheaven.com%26origin%3Dhttp%253A%252F%252Fwww.colchonesheaven.com%252Ffccfae19c%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=false&amp;height=260&amp;href=https%3A%2F%2Fwww.facebook.com%2FColchones.Heaven.Bolivia&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=false&amp;stream=true&amp;width=260" class="" style="border: none; visibility: visible; width: 260px; height: 260px;"></iframe>
					</div>
				</li>
					<?php
                    	$type = 'oferta';
                        $args=array(
	                        'post_type' => $type,
	                        'post_status' => 'publish',
	                        'orderby' => 'date',
	                        'order' => 'DESC',
	                        'posts_per_page' =>1
                        );                 
                         $myposts = new WP_Query( $args );
                         if ( $myposts->have_posts() ) : 
                              while ( $myposts->have_posts() ):$myposts->the_post();   
	                          		$featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full',false); ?>
									<li class="ofert_detail_home">
										<div class="detail_ofert_mattress">
											<h1><?php the_title(); ?></h1>
											<?php the_content(); ?>
											<img src="<?php echo $featured[0]; ?>"/>
										</div>
									</li>
					<?php 	  endwhile; 
	                   		  wp_reset_query();
	                   		  else: ?>
	                   		  <p><?php _e('Sorry, no ofert matched your criteria.'); ?></p>
                	<?php endif; ?>
			</ul>
		</article>
	</div>
</section>
<?php get_footer(); ?>