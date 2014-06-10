<?php get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="video"></div>
    <div class="wrapper_content">
        <?php products_important(''); ?>
        <article class="single_product">
            <div class="wrapp_active_post">
                <a href="/demo/imagen/" class="no_active_post">Imagenes</a>
                <a href="/demo/video/" class="active_post">Videos</a>
                <a href="#" class="active_post">testing</a>
            </div>
            <div class="wrapp_cvideo">
                <?php
                $type = 'video';
                if (empty($_GET['id_post'])) {
                    $args = array(
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 1
                    );
                } else {
                    $args = array(
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 1,
                        'p' => $_GET['id_post']
                    );
                }
                $myposts = new WP_Query($args);
                if ($myposts->have_posts()) :
                    while ($myposts->have_posts()):$myposts->the_post();
                        ?>
                        <div class="video_list">
                            <?php
                            the_field('id_video');
                            $id_post_actual = get_the_ID();
                            ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                else:
                    ?>
                    <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                <?php endif; ?>
                <div class="block_list_video">
                    <ul class="video_slider">
                        <?php
                        $type = 'video';
                        $args = array(
                            'post_type' => $type,
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => -1
                        );
                        $myposts = new WP_Query($args);
                        if ($myposts->have_posts()) :
                            while ($myposts->have_posts()):$myposts->the_post();
                                $featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumb-imagen-small', false);
                                $select = "";
                                if ($id_post_actual == get_the_ID()) {
                                    $select = "select_video";
                                }
                                ?>
                                <li>
                                    <a href="/demo/video/?id_post=<?php echo get_the_ID(); ?>">
                                        <figure class="dir_video <?php echo $select; ?>">
                                            <img src="<?php echo $featured[0]; ?>" width="37" height="31"/>
                                            <span class="log_vedeo"></span>
                                        </figure>
                                    </a>
                                </li>

                                <?php
                            endwhile;
                            wp_reset_query();
                        else:
                            ?>
                            <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </article>           
    </div>
</section>
<?php get_footer(); ?>