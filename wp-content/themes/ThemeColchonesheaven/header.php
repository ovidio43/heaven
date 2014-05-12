 

 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/gallery/jquery.ad-gallery.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.ad-gallery-customized.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
    </head>
    <body <?php body_class(); ?> rel="<?php echo get_template_directory_uri(); ?>" >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
            <header id="header" class="wrapper">
                <div class="wrapper_content">
                    <figure class="logo center_vertical">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"/>
                        </a>
                    </figure>
                    <?php 
                        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="menu center_vertical">%3$s</ul>')); 
                    ?>
                </div>
            </header>
        
        