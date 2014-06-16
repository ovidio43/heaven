
            <footer id="footer" class="wrapper">
                <div class="wrapper_content height_footer">
                    <span class="autor_develop center_vertical">Sitio Desarrollando por <a href="http://www.altra.com.bo" target="_blank">altra</a></span>
                    <?php 
                        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="menu center_vertical">%3$s</ul>')); 
                    ?>
                </div>
            </footer>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/jquery.ad-gallery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/jquery.ad-gallery.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/heaven.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.js?v=2.1.5"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
