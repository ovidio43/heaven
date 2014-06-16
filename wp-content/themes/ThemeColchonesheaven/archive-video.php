<?php get_header(); ?>
<section id="site_content" class="wrapper">
    <div id="id_menu_active" class="video"></div>
    <div class="wrapper_content">
        <?php products_important(''); ?>
        <article class="single_product">
            <div class="wrapp_active_post">
                <a href="/demo/imagen/" class="no_active_post">Imagenes</a>
                <a href="/demo/video/" class="active_post">Videos</a>
            </div>
            <div class="wrapp_cvideo">
                <?php
                $args = Array(
                    'users' => 'UCc9BmSQXOK0f40r-t3AIt-Q',
                    'countRows' => '6'
                );
                $youtube = new youtubeFeed($args);
                $data = $youtube->getFeedByUserName(); ?>
                <div class="video_list">   
                    <?php                    
                    $embed = $data[0]['embedUrl'];
                    if (isset($_GET['embed'])) {
                        $embed = base64_decode($_GET['embed']);
                    } ?>
                    <embed width="420" height="345" type="application/x-shockwave-flash" src="<?php echo $embed; ?>">                    
                </div>
                <div class="block_list_video">
                    <ul class="video_slider">     
                        <?php
                        foreach ($data as $value) { ?>
                            <li>
                                <a href="?embed=<?php echo base64_encode($value['embedUrl']); ?>">
                                    <figure class="dir_video <?php echo $select; ?>">
                                        <img src="<?php echo $value['thumbnail']; ?>" title="<?php echo $value['title']; ?>" width="37" height="31"/>
                                        <span class="log_vedeo"></span>
                                    </figure>
                                </a>
                            </li>
                            <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </article>           
    </div>
</section>
<?php get_footer(); ?>