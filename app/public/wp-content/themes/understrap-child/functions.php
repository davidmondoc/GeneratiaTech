<?php 
    add_action( 'wp_enqueue_scripts', 'wp_understrap_child_enqueue_styles' );
    function wp_understrap_child_enqueue_styles() {
        $parenthandle = 'understrap-style';
        wp_enqueue_style(
            'child-theme-styles', 
            get_stylesheet_uri(), 
            array(),
            filemtime(get_stylesheet_directory().'/style.css')
        );
    } 