<?php
add_action( 'wp_enqueue_scripts', 'orb_iaw_enqueue_parent_styles' );

function orb_iaw_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function orb_iaw_parse_url($url){
    $parse = parse_url($url);
    echo $parse['host']; 
}
