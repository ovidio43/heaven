<?php
function custom_post_type_init() {
    $post_types = array(
        array("slug" => "banner_principal", "plural" => "Banner Principal", "singular" => "Banner Principal", "rewrite" => "banner_principal", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "producto", "plural" => "Productos", "singular" => "Producto", "rewrite" => "producto", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "oferta", "plural" => "Ofertas", "singular" => "Oferta", "rewrite" => "oferta", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "noticia", "plural" => "Noticias", "singular" => "Noticia", "rewrite" => "noticia", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "video", "plural" => "Videos", "singular" => "Video", "rewrite" => "video", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "imagen", "plural" => "Imagenes", "singular" => "Imagen", "rewrite" => "imagen", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail'))
    );
    foreach ($post_types as $pt) {
        $supports = array('title', 'editor', 'post_tags', 'thumbnail', 'excerpt', "comments");
        $public = isset($pt['public']) ? $pt['public'] : false;
        register_post_type($pt["slug"], array(
            'labels' => array(
                'name' => $pt["plural"],
                'singular_name' => $pt["singular"]
            ),
            'show_ui' => true,
            'publicly_queryable' => isset($pt["publicly_queryable"]) ? $pt["publicly_queryable"] : $public,
            'public' => isset($pt['public']) ? $pt['public'] : false,
            'has_archive' => isset($pt['archive']) ? $pt['archive'] : true,
            'rewrite' => array('hierarchical' => true, 'with_front' => true, 'slug' => isset($pt["rewrite"]) ? $pt["rewrite"] : $pt["slug"]),
            'supports' => isset($pt['supports']) ? $pt['supports'] : $supports,
            'taxonomies' => isset($pt['taxonomies']) ? $pt['taxonomies'] : array('post_tag'),
            'hierarchical' => false
                )
        );
    }
}
add_action('init', 'custom_post_type_init');
